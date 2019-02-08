<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(
        __('strings.backend.dashboard.title'),
        route('admin.dashboard')
    );
});

//start_Country_start
Breadcrumbs::register('admin.country.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.countries.title'),
        route('admin.country.index')
    );
});

Breadcrumbs::register('admin.country.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.country.index');
    $breadcrumbs->push(
        __('labels.backend.countries.create'),
        route('admin.country.create')
    );
});

Breadcrumbs::register('admin.country.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.country.index');
    $breadcrumbs->push(
        __('menus.backend.countries.view'),
        route('admin.country.show', $id)
    );
});

Breadcrumbs::register('admin.country.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.country.index');
    $breadcrumbs->push(
        __('menus.backend.countries.edit'),
        route('admin.country.edit', $id)
    );
});
//end_Country_end

//*****Do Not Delete Me

require __DIR__ . '/auth.php';
require __DIR__ . '/log-viewer.php';
