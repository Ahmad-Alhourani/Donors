<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateCityAPIRequest;
use App\Http\Requests\API\UpdateCityAPIRequest;
use App\Models\City;
use App\Repositories\Backend\CityRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Models\Country;

/**
 * Class CityAPIController
 * @package App\Http\Controllers\API
 */
class CityAPIController extends Controller
{
    /** @var  CityRepository */
    private $cityRepository;
    /** @var  CityModel */
    private $cityModel;

    public function __construct(CityRepository $cityRepo, City $city)
    {
        $this->cityRepository = $cityRepo->skipCache(true);
        $this->cityModel = $city;
    }

    /**
     * Display a listing of the City.
     * GET|HEAD /cities
     *
     * @param Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function index(Request $request)
    {
        $cities = $this->cityRepository->all();
        return response()->json([
            'data' => $cities,
            'Citys retrieved successfully'
        ]);
    }

    /**
     * Store a newly created City in storage.
     * POST /cities
     *
     * @param CreateCityAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function store(CreateCityAPIRequest $request)
    {
        $input = $request->all();
        $this->cityRepository->create($input);
        return response()->json(['City saved successfully']);
    }

    /**
     * Display the specified City.
     * GET|HEAD /cities/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function show($id)
    {
        /** @var City $city */
        //   $city = $this->cityRepository->findByField('id',$id);
        $city = $this->cityModel->find($id);
        return response()->json([
            'data' => $city,
            'City retrieved successfully'
        ]);
    }

    /**
     * Update the specified City in storage.
     * PUT/PATCH /cities/{id}
     *
     * @param  int $id
     * @param UpdateCityAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function update($id, UpdateCityAPIRequest $request)
    {
        $input = $request->all();
        /** @var City $city */
        $city = $this->cityModel->find($id);
        $city = $this->cityRepository->update($city, $input);
        return response()->json(['City updated successfully']);
    }

    /**
     * Remove the specified City from storage.
     * DELETE /cities/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var City $city */
        $city = $this->cityModel->find($id);
        $city->delete();

        return response()->json('City deleted successfully');
    }
}
