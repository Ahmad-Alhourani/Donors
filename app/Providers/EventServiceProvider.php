<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

/**
 * Class EventServiceProvider.
 */
class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        //
    ];

    /**
     * Class event subscribers.
     *
     * @var array
     */
    protected $subscribe = [
        /*
         * Frontend Subscribers
         */

        /*
         * Auth Subscribers
         */
        \App\Listeners\Frontend\Auth\UserEventListener::class,

        /*
         * Backend Subscribers
         */

        /*
         * Auth Subscribers
         */
        \App\Listeners\Backend\Auth\User\UserEventListener::class,
        \App\Listeners\Backend\Auth\Role\RoleEventListener::class,

        //start_Country_start
        \App\Listeners\Backend\CountryEventListener::class,
        //end_Country_end

        //start_City_start
        \App\Listeners\Backend\CityEventListener::class,
        //end_City_end

        //start_Orphan_start
        \App\Listeners\Backend\OrphanEventListener::class,
        //end_Orphan_end

        //start_DonorType_start
        \App\Listeners\Backend\DonorTypeEventListener::class,
        //end_DonorType_end

        //start_Fundraising_start
        \App\Listeners\Backend\FundraisingEventListener::class,
        //end_Fundraising_end

        //start_Donor_start
        \App\Listeners\Backend\DonorEventListener::class,
        //end_Donor_end

        //start_Donation_start
        \App\Listeners\Backend\DonationEventListener::class,
        //end_Donation_end

        //start_OrphanSponsorship_start
        \App\Listeners\Backend\OrphanSponsorshipEventListener::class
        //end_OrphanSponsorship_end

        // Do not delete me :) I'm used for auto-generation
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }
}
