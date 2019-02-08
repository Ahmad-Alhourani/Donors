<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateCountryAPIRequest;
use App\Http\Requests\API\UpdateCountryAPIRequest;
use App\Models\Country;
use App\Repositories\Backend\CountryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

/**
 * Class CountryAPIController
 * @package App\Http\Controllers\API
 */
class CountryAPIController extends Controller
{
    /** @var  CountryRepository */
    private $countryRepository;
    /** @var  CountryModel */
    private $countryModel;

    public function __construct(
        CountryRepository $countryRepo,
        Country $country
    ) {
        $this->countryRepository = $countryRepo->skipCache(true);
        $this->countryModel = $country;
    }

    /**
     * Display a listing of the Country.
     * GET|HEAD /countries
     *
     * @param Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function index(Request $request)
    {
        $countries = $this->countryRepository->all();
        return response()->json([
            'data' => $countries,
            'Countrys retrieved successfully'
        ]);
    }

    /**
     * Store a newly created Country in storage.
     * POST /countries
     *
     * @param CreateCountryAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function store(CreateCountryAPIRequest $request)
    {
        $input = $request->all();
        $this->countryRepository->create($input);
        return response()->json(['Country saved successfully']);
    }

    /**
     * Display the specified Country.
     * GET|HEAD /countries/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function show($id)
    {
        /** @var Country $country */
        //   $country = $this->countryRepository->findByField('id',$id);
        $country = $this->countryModel->find($id);
        return response()->json([
            'data' => $country,
            'Country retrieved successfully'
        ]);
    }

    /**
     * Update the specified Country in storage.
     * PUT/PATCH /countries/{id}
     *
     * @param  int $id
     * @param UpdateCountryAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function update($id, UpdateCountryAPIRequest $request)
    {
        $input = $request->all();
        /** @var Country $country */
        $country = $this->countryModel->find($id);
        $country = $this->countryRepository->update($country, $input);
        return response()->json(['Country updated successfully']);
    }

    /**
     * Remove the specified Country from storage.
     * DELETE /countries/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Country $country */
        $country = $this->countryModel->find($id);
        $country->delete();

        return response()->json('Country deleted successfully');
    }
}
