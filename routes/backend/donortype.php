<?php

/**
 * DonorType Management
 * All route names are prefixed with 'admin.donor_type'.
 */
Route::group(
    [
        'namespace' => 'DonorType',
        'middleware' => 'role:administrator'
    ],
    function () {
        /*
         * DonorType CRUD
         */
        Route::resource('donor_type', 'DonorTypeController');
    }
);
