<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateDonorAPIRequest;
use App\Http\Requests\API\UpdateDonorAPIRequest;
use App\Models\Donor;
use App\Repositories\Backend\DonorRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Models\City;

/**
 * Class DonorAPIController
 * @package App\Http\Controllers\API
 */
class DonorAPIController extends Controller
{
    /** @var  DonorRepository */
    private $donorRepository;
    /** @var  DonorModel */
    private $donorModel;

    public function __construct(DonorRepository $donorRepo, Donor $donor)
    {
        $this->donorRepository = $donorRepo->skipCache(true);
        $this->donorModel = $donor;
    }

    /**
     * Display a listing of the Donor.
     * GET|HEAD /donors
     *
     * @param Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function index(Request $request)
    {
        $donors = $this->donorRepository->all();
        return response()->json([
            'data' => $donors,
            'Donors retrieved successfully'
        ]);
    }

    /**
     * Store a newly created Donor in storage.
     * POST /donors
     *
     * @param CreateDonorAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function store(CreateDonorAPIRequest $request)
    {
        $input = $request->all();
        $this->donorRepository->create($input);
        return response()->json(['Donor saved successfully']);
    }

    /**
     * Display the specified Donor.
     * GET|HEAD /donors/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function show($id)
    {
        /** @var Donor $donor */
        //   $donor = $this->donorRepository->findByField('id',$id);
        $donor = $this->donorModel->find($id);
        return response()->json([
            'data' => $donor,
            'Donor retrieved successfully'
        ]);
    }

    /**
     * Update the specified Donor in storage.
     * PUT/PATCH /donors/{id}
     *
     * @param  int $id
     * @param UpdateDonorAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function update($id, UpdateDonorAPIRequest $request)
    {
        $input = $request->all();
        /** @var Donor $donor */
        $donor = $this->donorModel->find($id);
        $donor = $this->donorRepository->update($donor, $input);
        return response()->json(['Donor updated successfully']);
    }

    /**
     * Remove the specified Donor from storage.
     * DELETE /donors/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Donor $donor */
        $donor = $this->donorModel->find($id);
        $donor->delete();

        return response()->json('Donor deleted successfully');
    }
}
