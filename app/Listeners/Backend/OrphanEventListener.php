<?php
namespace App\Listeners\Backend;

/**
 * Class OrphanEventListener.
 */
/**
 * Class OrphanCreated.
 */
class OrphanEventListener
{
    /**
     * @param $event
     */
    public function onCreated($event)
    {
        \Log::info('Orphan Created');
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        \Log::info('Orphan  Updated');
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        \Log::info('Orphan Deleted');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \App\Events\Backend\Orphan\OrphanCreated::class,
            'App\Listeners\Backend\OrphanEventListener@onCreated'
        );

        $events->listen(
            \App\Events\Backend\Orphan\OrphanUpdated::class,
            'App\Listeners\Backend\OrphanEventListener@onUpdated'
        );

        $events->listen(
            \App\Events\Backend\Orphan\OrphanDeleted::class,
            'App\Listeners\Backend\OrphanEventListener@onDeleted'
        );
    }
}
