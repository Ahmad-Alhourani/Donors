<?php

/**
 * Donor Management
 * All route names are prefixed with 'admin.donor'.
 */
Route::group(
    [
        'namespace' => 'Donor',
        'middleware' => 'role:administrator'
    ],
    function () {
        /*
         * Donor CRUD
         */
        Route::resource('donor', 'DonorController');
        Route::get('city/{id}/donors', 'DonorController@city')->name(
            'donor.city'
        );
        Route::get('orphan/{id}/donors', 'DonorController@orphan')->name(
            'donor.orphan'
        );
        Route::get(
            'fundraising/{id}/donors',
            'DonorController@fundraising'
        )->name('donor.fundraising');
    }
);
