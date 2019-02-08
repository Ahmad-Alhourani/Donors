<?php

namespace App\Http\Controllers\Backend\Fundraising;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\Fundraising\CreateFundraising;
use App\Http\Requests\Backend\Fundraising\UpdateFundraising;
use App\Repositories\Backend\FundraisingRepository;
use App\Events\Backend\Fundraising\FundraisingCreated;
use App\Events\Backend\Fundraising\FundraisingUpdated;
use App\Events\Backend\Fundraising\FundraisingDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Fundraising;

class FundraisingController extends Controller
{
    /** @var $fundraisingRepository */
    private $fundraisingRepository;

    public function __construct(FundraisingRepository $fundraisingRepo)
    {
        $this->fundraisingRepository = $fundraisingRepo;
    }

    /**
     * Display a listing of the Fundraising.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->fundraisingRepository->pushCriteria(
            new RequestCriteria($request)
        );
        $data = $this->fundraisingRepository->getPaginatedAndSortable(10);

        return view('backend.fundraisings.index')->with('fundraisings', $data);
    }

    /**
     * Show the form for creating a new Fundraising.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        return view('backend.fundraisings.create');
    }

    /**
     * Store a newly created Fundraising in storage.
     *
     * @param CreateFundraising $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateFundraising $request)
    {
        $obj = $this->fundraisingRepository->create(
            $request->only(["name", "founded_at", "description"])
        );

        event(new FundraisingCreated($obj));
        return redirect()
            ->route('admin.fundraising.index')
            ->withFlashSuccess(__('alerts.frontend.fundraising.saved'));
    }

    /**
     * Display the specified Fundraising.
     *
     * @param Fundraising $fundraising
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(Fundraising $fundraising)
    {
        return view('backend.fundraisings.show')->with(
            'fundraising',
            $fundraising
        );
    }

    /**
     * Show the form for editing the specified Fundraising.
     *
     * @param Fundraising $fundraising
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(Fundraising $fundraising)
    {
        return view('backend.fundraisings.edit')->with(
            'fundraising',
            $fundraising
        );
    }

    /**
     * Update the specified Fundraising in storage.
     *
     * @param UpdateFundraising $request
     *
     * @param Fundraising $fundraising
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UpdateFundraising $request, Fundraising $fundraising)
    {
        $obj = $this->fundraisingRepository->update(
            $request->all(),
            $fundraising
        );

        event(new FundraisingUpdated($obj));
        return redirect()
            ->route('admin.fundraising.index')
            ->withFlashSuccess(__('alerts.frontend.fundraising.updated'));
    }

    /**
     * Remove the specified Fundraising from storage.
     *
     * @param Fundraising $fundraising
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(Fundraising $fundraising)
    {
        $obj = $this->fundraisingRepository->delete($fundraising);
        event(new FundraisingDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.fundraising.deleted'));
    }
}
