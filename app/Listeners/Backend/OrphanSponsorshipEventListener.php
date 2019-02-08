<?php
namespace App\Listeners\Backend;

/**
 * Class OrphanSponsorshipEventListener.
 */
/**
 * Class OrphanSponsorshipCreated.
 */
class OrphanSponsorshipEventListener
{
    /**
     * @param $event
     */
    public function onCreated($event)
    {
        \Log::info('OrphanSponsorship Created');
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        \Log::info('OrphanSponsorship  Updated');
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        \Log::info('OrphanSponsorship Deleted');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \App\Events\Backend\OrphanSponsorship\OrphanSponsorshipCreated::class,
            'App\Listeners\Backend\OrphanSponsorshipEventListener@onCreated'
        );

        $events->listen(
            \App\Events\Backend\OrphanSponsorship\OrphanSponsorshipUpdated::class,
            'App\Listeners\Backend\OrphanSponsorshipEventListener@onUpdated'
        );

        $events->listen(
            \App\Events\Backend\OrphanSponsorship\OrphanSponsorshipDeleted::class,
            'App\Listeners\Backend\OrphanSponsorshipEventListener@onDeleted'
        );
    }
}
