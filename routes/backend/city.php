<?php

/**
 * City Management
 * All route names are prefixed with 'admin.city'.
 */
Route::group(
    [
        'namespace' => 'City',
        'middleware' => 'role:administrator'
    ],
    function () {
        /*
         * City CRUD
         */
        Route::resource('city', 'CityController');
        Route::get('country/{id}/cities', 'CityController@country')->name(
            'city.country'
        );
    }
);
