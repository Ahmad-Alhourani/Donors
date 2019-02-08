<?php

/**
 * OrphanSponsorship Management
 * All route names are prefixed with 'admin.orphan_sponsorship'.
 */
Route::group(
    [
        'namespace' => 'OrphanSponsorship',
        'middleware' => 'role:administrator'
    ],
    function () {
        /*
         * OrphanSponsorship CRUD
         */
        Route::resource('orphan_sponsorship', 'OrphanSponsorshipController');
        Route::get(
            'donor/{id}/orphan_sponsorships',
            'OrphanSponsorshipController@donor'
        )->name('orphan_sponsorship.donor');
        Route::get(
            'orphan/{id}/orphan_sponsorships',
            'OrphanSponsorshipController@orphan'
        )->name('orphan_sponsorship.orphan');
    }
);
