<?php

namespace App\Http\Controllers\Backend\Donor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\Donor\CreateDonor;
use App\Http\Requests\Backend\Donor\UpdateDonor;
use App\Repositories\Backend\DonorRepository;
use App\Events\Backend\Donor\DonorCreated;
use App\Events\Backend\Donor\DonorUpdated;
use App\Events\Backend\Donor\DonorDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Donor;

use App\Models\City;

class DonorController extends Controller
{
    /** @var $donorRepository */
    private $donorRepository;

    public function __construct(DonorRepository $donorRepo)
    {
        $this->donorRepository = $donorRepo;
    }

    /**
     * Display a listing of the Donor.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->donorRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->donorRepository->getPaginatedAndSortable(10);

        return view('backend.donors.index')->with('donors', $data);
    }

    /**
     * Show the form for creating a new Donor.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        $cities = City::all();
        $selectedCity = City::first() ? City::first()->_id : 0;

        return view('backend.donors.create', compact("cities", "selectedCity"));
    }

    /**
     * Store a newly created Donor in storage.
     *
     * @param CreateDonor $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateDonor $request)
    {
        if (request()->hasFile('image_file')) {
            $path = $request->file('image_file')->store('public');
            $request['image'] = $path;
        }

        $req = $request->only(["is_orphan"]);
        if (!$req) {
            $request["is_orphan"] = 0;
        }
        $obj = $this->donorRepository->create(
            $request->only([
                "image",
                "name",
                "l_name",
                "address",
                "city_id",
                "mobile",
                "phone1",
                "phone2",
                "is_orphan",
                "notes"
            ])
        );

        event(new DonorCreated($obj));
        return redirect()
            ->route('admin.donor.index')
            ->withFlashSuccess(__('alerts.frontend.donor.saved'));
    }

    /**
     * Display the specified Donor.
     *
     * @param Donor $donor
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(Donor $donor)
    {
        return view('backend.donors.show')->with('donor', $donor);
    }

    /**
     * Show the form for editing the specified Donor.
     *
     * @param Donor $donor
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(Donor $donor)
    {
        $cities = City::all();
        $selectedCity = $donor->city_id;

        return view(
            'backend.donors.edit',
            compact("cities", "selectedCity")
        )->with('donor', $donor);
    }

    /**
     * Update the specified Donor in storage.
     *
     * @param UpdateDonor $request
     *
     * @param Donor $donor
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UpdateDonor $request, Donor $donor)
    {
        if (request()->hasFile('image_file')) {
            $path = $request->file('image_file')->store('public');
            $request['image'] = $path;
        }

        $req = $request->only(["is_orphan"]);
        if (!$req) {
            $request["is_orphan"] = 0;
        }
        $obj = $this->donorRepository->update($request->all(), $donor);

        event(new DonorUpdated($obj));
        return redirect()
            ->route('admin.donor.index')
            ->withFlashSuccess(__('alerts.frontend.donor.updated'));
    }

    /**
     * Remove the specified Donor from storage.
     *
     * @param Donor $donor
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(Donor $donor)
    {
        $obj = $this->donorRepository->delete($donor);
        event(new DonorDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.donor.deleted'));
    }
}
