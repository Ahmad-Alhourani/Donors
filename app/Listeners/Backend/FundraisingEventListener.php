<?php
namespace App\Listeners\Backend;

/**
 * Class FundraisingEventListener.
 */
/**
 * Class FundraisingCreated.
 */
class FundraisingEventListener
{
    /**
     * @param $event
     */
    public function onCreated($event)
    {
        \Log::info('Fundraising Created');
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        \Log::info('Fundraising  Updated');
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        \Log::info('Fundraising Deleted');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \App\Events\Backend\Fundraising\FundraisingCreated::class,
            'App\Listeners\Backend\FundraisingEventListener@onCreated'
        );

        $events->listen(
            \App\Events\Backend\Fundraising\FundraisingUpdated::class,
            'App\Listeners\Backend\FundraisingEventListener@onUpdated'
        );

        $events->listen(
            \App\Events\Backend\Fundraising\FundraisingDeleted::class,
            'App\Listeners\Backend\FundraisingEventListener@onDeleted'
        );
    }
}
