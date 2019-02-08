<?php
namespace App\Listeners\Backend;

/**
 * Class DonorEventListener.
 */
/**
 * Class DonorCreated.
 */
class DonorEventListener
{
    /**
     * @param $event
     */
    public function onCreated($event)
    {
        \Log::info('Donor Created');
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        \Log::info('Donor  Updated');
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        \Log::info('Donor Deleted');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \App\Events\Backend\Donor\DonorCreated::class,
            'App\Listeners\Backend\DonorEventListener@onCreated'
        );

        $events->listen(
            \App\Events\Backend\Donor\DonorUpdated::class,
            'App\Listeners\Backend\DonorEventListener@onUpdated'
        );

        $events->listen(
            \App\Events\Backend\Donor\DonorDeleted::class,
            'App\Listeners\Backend\DonorEventListener@onDeleted'
        );
    }
}
