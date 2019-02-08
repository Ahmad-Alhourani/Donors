<?php

namespace App\Http\Controllers\Backend\OrphanSponsorship;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\OrphanSponsorship\CreateOrphanSponsorship;
use App\Http\Requests\Backend\OrphanSponsorship\UpdateOrphanSponsorship;
use App\Repositories\Backend\OrphanSponsorshipRepository;
use App\Events\Backend\OrphanSponsorship\OrphanSponsorshipCreated;
use App\Events\Backend\OrphanSponsorship\OrphanSponsorshipUpdated;
use App\Events\Backend\OrphanSponsorship\OrphanSponsorshipDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\OrphanSponsorship;

use App\Models\Donor;
use App\Models\Orphan;

class OrphanSponsorshipController extends Controller
{
    /** @var $orphan_sponsorshipRepository */
    private $orphan_sponsorshipRepository;

    public function __construct(
        OrphanSponsorshipRepository $orphan_sponsorshipRepo
    ) {
        $this->orphan_sponsorshipRepository = $orphan_sponsorshipRepo;
    }

    /**
     * Display a listing of the OrphanSponsorship.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->orphan_sponsorshipRepository->pushCriteria(
            new RequestCriteria($request)
        );
        $data = $this->orphan_sponsorshipRepository->getPaginatedAndSortable(
            10
        );

        return view('backend.orphan_sponsorships.index')->with(
            'orphan_sponsorships',
            $data
        );
    }

    /**
     * Show the form for creating a new OrphanSponsorship.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        $donors = Donor::all();
        $selectedDonor = Donor::first() ? Donor::first()->_id : 0;

        $orphans = Orphan::all();
        $selectedOrphan = Orphan::first() ? Orphan::first()->_id : 0;

        return view(
            'backend.orphan_sponsorships.create',
            compact(
                "donors",
                "selectedDonor",

                "orphans",
                "selectedOrphan"
            )
        );
    }

    /**
     * Store a newly created OrphanSponsorship in storage.
     *
     * @param CreateOrphanSponsorship $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateOrphanSponsorship $request)
    {
        $obj = $this->orphan_sponsorshipRepository->create(
            $request->only([
                "donor_id",
                "orphan_id",
                "value",
                "start_date",
                "expected_date",
                "end_date"
            ])
        );

        event(new OrphanSponsorshipCreated($obj));
        return redirect()
            ->route('admin.orphan_sponsorship.index')
            ->withFlashSuccess(__('alerts.frontend.orphan_sponsorship.saved'));
    }

    /**
     * Display the specified OrphanSponsorship.
     *
     * @param OrphanSponsorship $orphan_sponsorship
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(OrphanSponsorship $orphan_sponsorship)
    {
        return view('backend.orphan_sponsorships.show')->with(
            'orphan_sponsorship',
            $orphan_sponsorship
        );
    }

    /**
     * Show the form for editing the specified OrphanSponsorship.
     *
     * @param OrphanSponsorship $orphan_sponsorship
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(OrphanSponsorship $orphan_sponsorship)
    {
        $donors = Donor::all();
        $selectedDonor = $orphan_sponsorship->donor_id;

        $orphans = Orphan::all();
        $selectedOrphan = $orphan_sponsorship->orphan_id;

        return view(
            'backend.orphan_sponsorships.edit',
            compact("donors", "selectedDonor", "orphans", "selectedOrphan")
        )->with('orphan_sponsorship', $orphan_sponsorship);
    }

    /**
     * Update the specified OrphanSponsorship in storage.
     *
     * @param UpdateOrphanSponsorship $request
     *
     * @param OrphanSponsorship $orphan_sponsorship
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(
        UpdateOrphanSponsorship $request,
        OrphanSponsorship $orphan_sponsorship
    ) {
        $obj = $this->orphan_sponsorshipRepository->update(
            $request->all(),
            $orphan_sponsorship
        );

        event(new OrphanSponsorshipUpdated($obj));
        return redirect()
            ->route('admin.orphan_sponsorship.index')
            ->withFlashSuccess(
                __('alerts.frontend.orphan_sponsorship.updated')
            );
    }

    /**
     * Remove the specified OrphanSponsorship from storage.
     *
     * @param OrphanSponsorship $orphan_sponsorship
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(OrphanSponsorship $orphan_sponsorship)
    {
        $obj = $this->orphan_sponsorshipRepository->delete($orphan_sponsorship);
        event(new OrphanSponsorshipDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(
                __('alerts.frontend.orphan_sponsorship.deleted')
            );
    }
}
