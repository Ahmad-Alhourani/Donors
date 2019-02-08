<?php

namespace App\Http\Controllers\Backend\Donation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\Donation\CreateDonation;
use App\Http\Requests\Backend\Donation\UpdateDonation;
use App\Repositories\Backend\DonationRepository;
use App\Events\Backend\Donation\DonationCreated;
use App\Events\Backend\Donation\DonationUpdated;
use App\Events\Backend\Donation\DonationDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Donation;

use App\Models\Donor;
use App\Models\Fundraising;

class DonationController extends Controller
{
    /** @var $donationRepository */
    private $donationRepository;

    public function __construct(DonationRepository $donationRepo)
    {
        $this->donationRepository = $donationRepo;
    }

    /**
     * Display a listing of the Donation.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->donationRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->donationRepository->getPaginatedAndSortable(10);

        return view('backend.donations.index')->with('donations', $data);
    }

    /**
     * Show the form for creating a new Donation.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        $donors = Donor::all();
        $selectedDonor = Donor::first() ? Donor::first()->_id : 0;

        $fundraisings = Fundraising::all();
        $selectedFundraising = Fundraising::first()
            ? Fundraising::first()->_id
            : 0;

        return view(
            'backend.donations.create',
            compact(
                "donors",
                "selectedDonor",

                "fundraisings",
                "selectedFundraising"
            )
        );
    }

    /**
     * Store a newly created Donation in storage.
     *
     * @param CreateDonation $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateDonation $request)
    {
        $obj = $this->donationRepository->create(
            $request->only(["donor_id", "fundraising_id", "value"])
        );

        event(new DonationCreated($obj));
        return redirect()
            ->route('admin.donation.index')
            ->withFlashSuccess(__('alerts.frontend.donation.saved'));
    }

    /**
     * Display the specified Donation.
     *
     * @param Donation $donation
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(Donation $donation)
    {
        return view('backend.donations.show')->with('donation', $donation);
    }

    /**
     * Show the form for editing the specified Donation.
     *
     * @param Donation $donation
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(Donation $donation)
    {
        $donors = Donor::all();
        $selectedDonor = $donation->donor_id;

        $fundraisings = Fundraising::all();
        $selectedFundraising = $donation->fundraising_id;

        return view(
            'backend.donations.edit',
            compact(
                "donors",
                "selectedDonor",
                "fundraisings",
                "selectedFundraising"
            )
        )->with('donation', $donation);
    }

    /**
     * Update the specified Donation in storage.
     *
     * @param UpdateDonation $request
     *
     * @param Donation $donation
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UpdateDonation $request, Donation $donation)
    {
        $obj = $this->donationRepository->update($request->all(), $donation);

        event(new DonationUpdated($obj));
        return redirect()
            ->route('admin.donation.index')
            ->withFlashSuccess(__('alerts.frontend.donation.updated'));
    }

    /**
     * Remove the specified Donation from storage.
     *
     * @param Donation $donation
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(Donation $donation)
    {
        $obj = $this->donationRepository->delete($donation);
        event(new DonationDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.donation.deleted'));
    }
}
