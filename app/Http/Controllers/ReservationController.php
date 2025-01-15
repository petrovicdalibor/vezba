<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Http\Resources\ReservationResource;
use App\Models\Reservation;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index() {
        $reservations = Reservation::query()
            ->paginate();

        return ReservationResource::collection($reservations);
    }

    public function show(Reservation $reservation) {
        return ReservationResource::make($reservation);
    }

    public function store(ReservationRequest $request) {
        $reservation = Reservation::query()->create($request->validated());

        return new JsonResponse([
            'message' => 'Reservation created.'
        ]);
    }
}
