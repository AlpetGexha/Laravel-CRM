<?php

namespace App\Observers;

use App\Models\Interaction;

class InteractionObserver
{
    public function creating(Interaction $interaction): void
    {
        if (auth()->check()) {
            $interaction->user_id = auth()->id();
        }
    }

    /**
     * Handle the Interaction "created" event.
     */
    public function created(Interaction $interaction): void
    {
        //
    }

    /**
     * Handle the Interaction "updated" event.
     */
    public function updated(Interaction $interaction): void
    {
        //
    }

    /**
     * Handle the Interaction "deleted" event.
     */
    public function deleted(Interaction $interaction): void
    {
        //
    }

    /**
     * Handle the Interaction "restored" event.
     */
    public function restored(Interaction $interaction): void
    {
        //
    }

    /**
     * Handle the Interaction "force deleted" event.
     */
    public function forceDeleted(Interaction $interaction): void
    {
        //
    }
}
