<?php
namespace App\Listeners\Backend;

/**
 * Class CountryEventListener.
 */
/**
 * Class CountryCreated.
 */
class CountryEventListener
{
    /**
     * @param $event
     */
    public function onCreated($event)
    {
        \Log::info('Country Created');
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        \Log::info('Country  Updated');
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        \Log::info('Country Deleted');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \App\Events\Backend\Country\CountryCreated::class,
            'App\Listeners\Backend\CountryEventListener@onCreated'
        );

        $events->listen(
            \App\Events\Backend\Country\CountryUpdated::class,
            'App\Listeners\Backend\CountryEventListener@onUpdated'
        );

        $events->listen(
            \App\Events\Backend\Country\CountryDeleted::class,
            'App\Listeners\Backend\CountryEventListener@onDeleted'
        );
    }
}
