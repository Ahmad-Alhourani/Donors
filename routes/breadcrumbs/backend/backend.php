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

//start_DonorType_start
Breadcrumbs::register('admin.donor_type.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.donor_types.title'),
        route('admin.donor_type.index')
    );
});

Breadcrumbs::register('admin.donor_type.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.donor_type.index');
    $breadcrumbs->push(
        __('labels.backend.donor_types.create'),
        route('admin.donor_type.create')
    );
});

Breadcrumbs::register('admin.donor_type.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.donor_type.index');
    $breadcrumbs->push(
        __('menus.backend.donor_types.view'),
        route('admin.donor_type.show', $id)
    );
});

Breadcrumbs::register('admin.donor_type.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.donor_type.index');
    $breadcrumbs->push(
        __('menus.backend.donor_types.edit'),
        route('admin.donor_type.edit', $id)
    );
});
//end_DonorType_end

//start_Fundraising_start
Breadcrumbs::register('admin.fundraising.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.fundraisings.title'),
        route('admin.fundraising.index')
    );
});

Breadcrumbs::register('admin.fundraising.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.fundraising.index');
    $breadcrumbs->push(
        __('labels.backend.fundraisings.create'),
        route('admin.fundraising.create')
    );
});

Breadcrumbs::register('admin.fundraising.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.fundraising.index');
    $breadcrumbs->push(
        __('menus.backend.fundraisings.view'),
        route('admin.fundraising.show', $id)
    );
});

Breadcrumbs::register('admin.fundraising.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.fundraising.index');
    $breadcrumbs->push(
        __('menus.backend.fundraisings.edit'),
        route('admin.fundraising.edit', $id)
    );
});
//end_Fundraising_end

//start_Donor_start
Breadcrumbs::register('admin.donor.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.donors.title'),
        route('admin.donor.index')
    );
});

Breadcrumbs::register('admin.donor.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.donor.index');
    $breadcrumbs->push(
        __('labels.backend.donors.create'),
        route('admin.donor.create')
    );
});

Breadcrumbs::register('admin.donor.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.donor.index');
    $breadcrumbs->push(
        __('menus.backend.donors.view'),
        route('admin.donor.show', $id)
    );
});

Breadcrumbs::register('admin.donor.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.donor.index');
    $breadcrumbs->push(
        __('menus.backend.donors.edit'),
        route('admin.donor.edit', $id)
    );
});
//end_Donor_end

//start_Donation_start
Breadcrumbs::register('admin.donation.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.donations.title'),
        route('admin.donation.index')
    );
});

Breadcrumbs::register('admin.donation.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.donation.index');
    $breadcrumbs->push(
        __('labels.backend.donations.create'),
        route('admin.donation.create')
    );
});

Breadcrumbs::register('admin.donation.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.donation.index');
    $breadcrumbs->push(
        __('menus.backend.donations.view'),
        route('admin.donation.show', $id)
    );
});

Breadcrumbs::register('admin.donation.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.donation.index');
    $breadcrumbs->push(
        __('menus.backend.donations.edit'),
        route('admin.donation.edit', $id)
    );
});
//end_Donation_end

//*****Do Not Delete Me

require __DIR__ . '/auth.php';
require __DIR__ . '/log-viewer.php';
