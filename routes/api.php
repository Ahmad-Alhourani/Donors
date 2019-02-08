<?php
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//start_Country_start
Route::resource('country', 'API\CountryAPIController');

//end_Country_end

//start_City_start
Route::resource('city', 'API\CityAPIController');

//end_City_end

//start_Orphan_start
Route::resource('orphan', 'API\OrphanAPIController');

//end_Orphan_end

//start_DonorType_start
Route::resource('donor_type', 'API\DonorTypeAPIController');

//end_DonorType_end

//start_Fundraising_start
Route::resource('fundraising', 'API\FundraisingAPIController');

//end_Fundraising_end

//start_Donor_start
Route::resource('donor', 'API\DonorAPIController');

//end_Donor_end

//start_Donation_start
Route::resource('donation', 'API\DonationAPIController');

//end_Donation_end

//start_OrphanSponsorship_start
Route::resource('orphan_sponsorship', 'API\OrphanSponsorshipAPIController');

//end_OrphanSponsorship_end

//*****Do Not Delete Me
