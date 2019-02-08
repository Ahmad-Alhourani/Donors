<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateDonorTypeAPIRequest;
use App\Http\Requests\API\UpdateDonorTypeAPIRequest;
use App\Models\DonorType;
use App\Repositories\Backend\DonorTypeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

/**
 * Class DonorTypeAPIController
 * @package App\Http\Controllers\API
 */
class DonorTypeAPIController extends Controller
{
    /** @var  DonorTypeRepository */
    private $donortypeRepository;
    /** @var  DonorTypeModel */
    private $donortypeModel;

    public function __construct(
        DonorTypeRepository $donortypeRepo,
        DonorType $donortype
    ) {
        $this->donortypeRepository = $donortypeRepo->skipCache(true);
        $this->donortypeModel = $donortype;
    }

    /**
     * Display a listing of the DonorType.
     * GET|HEAD /donor_types
     *
     * @param Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function index(Request $request)
    {
        $donor_types = $this->donortypeRepository->all();
        return response()->json([
            'data' => $donor_types,
            'DonorTypes retrieved successfully'
        ]);
    }

    /**
     * Store a newly created DonorType in storage.
     * POST /donor_types
     *
     * @param CreateDonorTypeAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function store(CreateDonorTypeAPIRequest $request)
    {
        $input = $request->all();
        $this->donortypeRepository->create($input);
        return response()->json(['DonorType saved successfully']);
    }

    /**
     * Display the specified DonorType.
     * GET|HEAD /donor_types/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function show($id)
    {
        /** @var DonorType $donortype */
        //   $donortype = $this->donortypeRepository->findByField('id',$id);
        $donortype = $this->donortypeModel->find($id);
        return response()->json([
            'data' => $donortype,
            'DonorType retrieved successfully'
        ]);
    }

    /**
     * Update the specified DonorType in storage.
     * PUT/PATCH /donor_types/{id}
     *
     * @param  int $id
     * @param UpdateDonorTypeAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function update($id, UpdateDonorTypeAPIRequest $request)
    {
        $input = $request->all();
        /** @var DonorType $donortype */
        $donortype = $this->donortypeModel->find($id);
        $donortype = $this->donortypeRepository->update($donortype, $input);
        return response()->json(['DonorType updated successfully']);
    }

    /**
     * Remove the specified DonorType from storage.
     * DELETE /donor_types/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var DonorType $donortype */
        $donortype = $this->donortypeModel->find($id);
        $donortype->delete();

        return response()->json('DonorType deleted successfully');
    }
}
