<?php

namespace App\Http\Controllers\Backend\Country;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\Country\CreateCountry;
use App\Http\Requests\Backend\Country\UpdateCountry;
use App\Repositories\Backend\CountryRepository;
use App\Events\Backend\Country\CountryCreated;
use App\Events\Backend\Country\CountryUpdated;
use App\Events\Backend\Country\CountryDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Country;

class CountryController extends Controller
{
    /** @var $countryRepository */
    private $countryRepository;

    public function __construct(CountryRepository $countryRepo)
    {
        $this->countryRepository = $countryRepo;
    }

    /**
     * Display a listing of the Country.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->countryRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->countryRepository->getPaginatedAndSortable(10);

        return view('backend.countries.index')->with('countries', $data);
    }

    /**
     * Show the form for creating a new Country.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        return view('backend.countries.create');
    }

    /**
     * Store a newly created Country in storage.
     *
     * @param CreateCountry $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateCountry $request)
    {
        $obj = $this->countryRepository->create(
            $request->only(["name", "code"])
        );

        event(new CountryCreated($obj));
        return redirect()
            ->route('admin.country.index')
            ->withFlashSuccess(__('alerts.frontend.country.saved'));
    }

    /**
     * Display the specified Country.
     *
     * @param Country $country
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(Country $country)
    {
        return view('backend.countries.show')->with('country', $country);
    }

    /**
     * Show the form for editing the specified Country.
     *
     * @param Country $country
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(Country $country)
    {
        return view('backend.countries.edit')->with('country', $country);
    }

    /**
     * Update the specified Country in storage.
     *
     * @param UpdateCountry $request
     *
     * @param Country $country
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UpdateCountry $request, Country $country)
    {
        $obj = $this->countryRepository->update($request->all(), $country);

        event(new CountryUpdated($obj));
        return redirect()
            ->route('admin.country.index')
            ->withFlashSuccess(__('alerts.frontend.country.updated'));
    }

    /**
     * Remove the specified Country from storage.
     *
     * @param Country $country
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(Country $country)
    {
        $obj = $this->countryRepository->delete($country);
        event(new CountryDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.country.deleted'));
    }
}
