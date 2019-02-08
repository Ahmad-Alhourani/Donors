<?php

namespace App\Http\Controllers\Backend\City;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\City\CreateCity;
use App\Http\Requests\Backend\City\UpdateCity;
use App\Repositories\Backend\CityRepository;
use App\Events\Backend\City\CityCreated;
use App\Events\Backend\City\CityUpdated;
use App\Events\Backend\City\CityDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\City;

use App\Models\Country;

class CityController extends Controller
{
    /** @var $cityRepository */
    private $cityRepository;

    public function __construct(CityRepository $cityRepo)
    {
        $this->cityRepository = $cityRepo;
    }

    /**
     * Display a listing of the City.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->cityRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->cityRepository->getPaginatedAndSortable(10);

        return view('backend.cities.index')->with('cities', $data);
    }

    /**
     * Show the form for creating a new City.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        $countries = Country::all();
        $selectedCountry = Country::first() ? Country::first()->_id : 0;

        return view(
            'backend.cities.create',
            compact("countries", "selectedCountry")
        );
    }

    /**
     * Store a newly created City in storage.
     *
     * @param CreateCity $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateCity $request)
    {
        $obj = $this->cityRepository->create(
            $request->only(["country_id", "name"])
        );

        event(new CityCreated($obj));
        return redirect()
            ->route('admin.city.index')
            ->withFlashSuccess(__('alerts.frontend.city.saved'));
    }

    /**
     * Display the specified City.
     *
     * @param City $city
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(City $city)
    {
        return view('backend.cities.show')->with('city', $city);
    }

    /**
     * Show the form for editing the specified City.
     *
     * @param City $city
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(City $city)
    {
        $countries = Country::all();
        $selectedCountry = $city->country_id;

        return view(
            'backend.cities.edit',
            compact("countries", "selectedCountry")
        )->with('city', $city);
    }

    /**
     * Update the specified City in storage.
     *
     * @param UpdateCity $request
     *
     * @param City $city
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UpdateCity $request, City $city)
    {
        $obj = $this->cityRepository->update($request->all(), $city);

        event(new CityUpdated($obj));
        return redirect()
            ->route('admin.city.index')
            ->withFlashSuccess(__('alerts.frontend.city.updated'));
    }

    /**
     * Remove the specified City from storage.
     *
     * @param City $city
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(City $city)
    {
        $obj = $this->cityRepository->delete($city);
        event(new CityDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.city.deleted'));
    }
}
