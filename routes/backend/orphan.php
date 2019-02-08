<?php

/**
 * Orphan Management
 * All route names are prefixed with 'admin.orphan'.
 */
Route::group(
    [
        'namespace' => 'Orphan',
        'middleware' => 'role:administrator'
    ],
    function () {
        /*
         * Orphan CRUD
         */
        Route::resource('orphan', 'OrphanController');
        Route::get('donor/{id}/orphans', 'OrphanController@donor')->name(
            'orphan.donor'
        );
    }
);
