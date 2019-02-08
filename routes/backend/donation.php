<?php

/**
 * Donation Management
 * All route names are prefixed with 'admin.donation'.
 */
Route::group(
    [
        'namespace' => 'Donation',
        'middleware' => 'role:administrator'
    ],
    function () {
        /*
         * Donation CRUD
         */
        Route::resource('donation', 'DonationController');
        Route::get('donor/{id}/donations', 'DonationController@donor')->name(
            'donation.donor'
        );
        Route::get(
            'fundraising/{id}/donations',
            'DonationController@fundraising'
        )->name('donation.fundraising');
    }
);
