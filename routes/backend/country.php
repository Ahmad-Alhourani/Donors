<?php

/**
 * Country Management
 * All route names are prefixed with 'admin.country'.
 */
Route::group(
    [
        'namespace' => 'Country',
        'middleware' => 'role:administrator'
    ],
    function () {
        /*
         * Country CRUD
         */
        Route::resource('country', 'CountryController');
    }
);
