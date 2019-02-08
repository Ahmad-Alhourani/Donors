<?php
namespace App\Listeners\Backend;

/**
 * Class DonorTypeEventListener.
 */
/**
 * Class DonorTypeCreated.
 */
class DonorTypeEventListener
{
    /**
     * @param $event
     */
    public function onCreated($event)
    {
        \Log::info('DonorType Created');
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        \Log::info('DonorType  Updated');
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        \Log::info('DonorType Deleted');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \App\Events\Backend\DonorType\DonorTypeCreated::class,
            'App\Listeners\Backend\DonorTypeEventListener@onCreated'
        );

        $events->listen(
            \App\Events\Backend\DonorType\DonorTypeUpdated::class,
            'App\Listeners\Backend\DonorTypeEventListener@onUpdated'
        );

        $events->listen(
            \App\Events\Backend\DonorType\DonorTypeDeleted::class,
            'App\Listeners\Backend\DonorTypeEventListener@onDeleted'
        );
    }
}
