<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateDonationAPIRequest;
use App\Http\Requests\API\UpdateDonationAPIRequest;
use App\Models\Donation;
use App\Repositories\Backend\DonationRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Models\Donor;
use App\Models\Fundraising;

/**
 * Class DonationAPIController
 * @package App\Http\Controllers\API
 */
class DonationAPIController extends Controller
{
    /** @var  DonationRepository */
    private $donationRepository;
    /** @var  DonationModel */
    private $donationModel;

    public function __construct(
        DonationRepository $donationRepo,
        Donation $donation
    ) {
        $this->donationRepository = $donationRepo->skipCache(true);
        $this->donationModel = $donation;
    }

    /**
     * Display a listing of the Donation.
     * GET|HEAD /donations
     *
     * @param Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function index(Request $request)
    {
        $donations = $this->donationRepository->all();
        return response()->json([
            'data' => $donations,
            'Donations retrieved successfully'
        ]);
    }

    /**
     * Store a newly created Donation in storage.
     * POST /donations
     *
     * @param CreateDonationAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function store(CreateDonationAPIRequest $request)
    {
        $input = $request->all();
        $this->donationRepository->create($input);
        return response()->json(['Donation saved successfully']);
    }

    /**
     * Display the specified Donation.
     * GET|HEAD /donations/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function show($id)
    {
        /** @var Donation $donation */
        //   $donation = $this->donationRepository->findByField('id',$id);
        $donation = $this->donationModel->find($id);
        return response()->json([
            'data' => $donation,
            'Donation retrieved successfully'
        ]);
    }

    /**
     * Update the specified Donation in storage.
     * PUT/PATCH /donations/{id}
     *
     * @param  int $id
     * @param UpdateDonationAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function update($id, UpdateDonationAPIRequest $request)
    {
        $input = $request->all();
        /** @var Donation $donation */
        $donation = $this->donationModel->find($id);
        $donation = $this->donationRepository->update($donation, $input);
        return response()->json(['Donation updated successfully']);
    }

    /**
     * Remove the specified Donation from storage.
     * DELETE /donations/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Donation $donation */
        $donation = $this->donationModel->find($id);
        $donation->delete();

        return response()->json('Donation deleted successfully');
    }
}
