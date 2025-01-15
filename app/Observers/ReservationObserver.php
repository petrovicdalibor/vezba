<?php

namespace App\Observers;

use App\Enums\ReservationStatusEnum;
use App\Models\Reservation;

class ReservationObserver
{
    /**
     * Handle the Review "creating" event.
     */
    public function creating(Reservation $reservation): void
    {
        $reservation->status = ReservationStatusEnum::PENDING;
    }

    /**
     * Handle the Reservation "created" event.
     */
    public function created(Reservation $reservation): void
    {
        //
    }

    /**
     * Handle the Reservation "updated" event.
     */
    public function updated(Reservation $reservation): void
    {
        //
    }

    /**
     * Handle the Reservation "deleting" event.
     */
    public function deleting(Reservation $reservation): void
    {
        $reservation->reviews()->delete();
    }

    /**
     * Handle the Reservation "deleted" event.
     */
    public function deleted(Reservation $reservation): void
    {
        //
    }

    /**
     * Handle the Reservation "restored" event.
     */
    public function restored(Reservation $reservation): void
    {
        //
    }

    /**
     * Handle the Reservation "force deleted" event.
     */
    public function forceDeleted(Reservation $reservation): void
    {
        //
    }
}
