<?php
namespace App\Listeners\Backend;

/**
 * Class DonationEventListener.
 */
/**
 * Class DonationCreated.
 */
class DonationEventListener
{
    /**
     * @param $event
     */
    public function onCreated($event)
    {
        \Log::info('Donation Created');
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        \Log::info('Donation  Updated');
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        \Log::info('Donation Deleted');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \App\Events\Backend\Donation\DonationCreated::class,
            'App\Listeners\Backend\DonationEventListener@onCreated'
        );

        $events->listen(
            \App\Events\Backend\Donation\DonationUpdated::class,
            'App\Listeners\Backend\DonationEventListener@onUpdated'
        );

        $events->listen(
            \App\Events\Backend\Donation\DonationDeleted::class,
            'App\Listeners\Backend\DonationEventListener@onDeleted'
        );
    }
}
