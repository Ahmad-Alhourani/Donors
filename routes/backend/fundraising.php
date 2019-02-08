<?php

/**
 * Fundraising Management
 * All route names are prefixed with 'admin.fundraising'.
 */
Route::group(
    [
        'namespace' => 'Fundraising',
        'middleware' => 'role:administrator'
    ],
    function () {
        /*
         * Fundraising CRUD
         */
        Route::resource('fundraising', 'FundraisingController');
        Route::get(
            'donor/{id}/fundraisings',
            'FundraisingController@donor'
        )->name('fundraising.donor');
    }
);
