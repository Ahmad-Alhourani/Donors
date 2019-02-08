<?php

namespace App\Http\Controllers\Backend\DonorType;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\DonorType\CreateDonorType;
use App\Http\Requests\Backend\DonorType\UpdateDonorType;
use App\Repositories\Backend\DonorTypeRepository;
use App\Events\Backend\DonorType\DonorTypeCreated;
use App\Events\Backend\DonorType\DonorTypeUpdated;
use App\Events\Backend\DonorType\DonorTypeDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\DonorType;

class DonorTypeController extends Controller
{
    /** @var $donor_typeRepository */
    private $donor_typeRepository;

    public function __construct(DonorTypeRepository $donor_typeRepo)
    {
        $this->donor_typeRepository = $donor_typeRepo;
    }

    /**
     * Display a listing of the DonorType.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->donor_typeRepository->pushCriteria(
            new RequestCriteria($request)
        );
        $data = $this->donor_typeRepository->getPaginatedAndSortable(10);

        return view('backend.donor_types.index')->with('donor_types', $data);
    }

    /**
     * Show the form for creating a new DonorType.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        return view('backend.donor_types.create');
    }

    /**
     * Store a newly created DonorType in storage.
     *
     * @param CreateDonorType $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateDonorType $request)
    {
        $obj = $this->donor_typeRepository->create(
            $request->only(["name", "details"])
        );

        event(new DonorTypeCreated($obj));
        return redirect()
            ->route('admin.donor_type.index')
            ->withFlashSuccess(__('alerts.frontend.donor_type.saved'));
    }

    /**
     * Display the specified DonorType.
     *
     * @param DonorType $donor_type
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(DonorType $donor_type)
    {
        return view('backend.donor_types.show')->with(
            'donor_type',
            $donor_type
        );
    }

    /**
     * Show the form for editing the specified DonorType.
     *
     * @param DonorType $donor_type
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(DonorType $donor_type)
    {
        return view('backend.donor_types.edit')->with(
            'donor_type',
            $donor_type
        );
    }

    /**
     * Update the specified DonorType in storage.
     *
     * @param UpdateDonorType $request
     *
     * @param DonorType $donor_type
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UpdateDonorType $request, DonorType $donor_type)
    {
        $obj = $this->donor_typeRepository->update(
            $request->all(),
            $donor_type
        );

        event(new DonorTypeUpdated($obj));
        return redirect()
            ->route('admin.donor_type.index')
            ->withFlashSuccess(__('alerts.frontend.donor_type.updated'));
    }

    /**
     * Remove the specified DonorType from storage.
     *
     * @param DonorType $donor_type
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(DonorType $donor_type)
    {
        $obj = $this->donor_typeRepository->delete($donor_type);
        event(new DonorTypeDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.donor_type.deleted'));
    }
}
