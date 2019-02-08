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

//start_City_start
Breadcrumbs::register('admin.city.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.cities.title'),
        route('admin.city.index')
    );
});

Breadcrumbs::register('admin.city.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.city.index');
    $breadcrumbs->push(
        __('labels.backend.cities.create'),
        route('admin.city.create')
    );
});

Breadcrumbs::register('admin.city.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.city.index');
    $breadcrumbs->push(
        __('menus.backend.cities.view'),
        route('admin.city.show', $id)
    );
});

Breadcrumbs::register('admin.city.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.city.index');
    $breadcrumbs->push(
        __('menus.backend.cities.edit'),
        route('admin.city.edit', $id)
    );
});
//end_City_end

//start_Orphan_start
Breadcrumbs::register('admin.orphan.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.orphans.title'),
        route('admin.orphan.index')
    );
});

Breadcrumbs::register('admin.orphan.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.orphan.index');
    $breadcrumbs->push(
        __('labels.backend.orphans.create'),
        route('admin.orphan.create')
    );
});

Breadcrumbs::register('admin.orphan.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.orphan.index');
    $breadcrumbs->push(
        __('menus.backend.orphans.view'),
        route('admin.orphan.show', $id)
    );
});

Breadcrumbs::register('admin.orphan.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.orphan.index');
    $breadcrumbs->push(
        __('menus.backend.orphans.edit'),
        route('admin.orphan.edit', $id)
    );
});
//end_Orphan_end

//*****Do Not Delete Me

require __DIR__ . '/auth.php';
require __DIR__ . '/log-viewer.php';
