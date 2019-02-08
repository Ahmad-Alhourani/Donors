<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateFundraisingAPIRequest;
use App\Http\Requests\API\UpdateFundraisingAPIRequest;
use App\Models\Fundraising;
use App\Repositories\Backend\FundraisingRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

/**
 * Class FundraisingAPIController
 * @package App\Http\Controllers\API
 */
class FundraisingAPIController extends Controller
{
    /** @var  FundraisingRepository */
    private $fundraisingRepository;
    /** @var  FundraisingModel */
    private $fundraisingModel;

    public function __construct(
        FundraisingRepository $fundraisingRepo,
        Fundraising $fundraising
    ) {
        $this->fundraisingRepository = $fundraisingRepo->skipCache(true);
        $this->fundraisingModel = $fundraising;
    }

    /**
     * Display a listing of the Fundraising.
     * GET|HEAD /fundraisings
     *
     * @param Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function index(Request $request)
    {
        $fundraisings = $this->fundraisingRepository->all();
        return response()->json([
            'data' => $fundraisings,
            'Fundraisings retrieved successfully'
        ]);
    }

    /**
     * Store a newly created Fundraising in storage.
     * POST /fundraisings
     *
     * @param CreateFundraisingAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function store(CreateFundraisingAPIRequest $request)
    {
        $input = $request->all();
        $this->fundraisingRepository->create($input);
        return response()->json(['Fundraising saved successfully']);
    }

    /**
     * Display the specified Fundraising.
     * GET|HEAD /fundraisings/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function show($id)
    {
        /** @var Fundraising $fundraising */
        //   $fundraising = $this->fundraisingRepository->findByField('id',$id);
        $fundraising = $this->fundraisingModel->find($id);
        return response()->json([
            'data' => $fundraising,
            'Fundraising retrieved successfully'
        ]);
    }

    /**
     * Update the specified Fundraising in storage.
     * PUT/PATCH /fundraisings/{id}
     *
     * @param  int $id
     * @param UpdateFundraisingAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function update($id, UpdateFundraisingAPIRequest $request)
    {
        $input = $request->all();
        /** @var Fundraising $fundraising */
        $fundraising = $this->fundraisingModel->find($id);
        $fundraising = $this->fundraisingRepository->update(
            $fundraising,
            $input
        );
        return response()->json(['Fundraising updated successfully']);
    }

    /**
     * Remove the specified Fundraising from storage.
     * DELETE /fundraisings/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Fundraising $fundraising */
        $fundraising = $this->fundraisingModel->find($id);
        $fundraising->delete();

        return response()->json('Fundraising deleted successfully');
    }
}
