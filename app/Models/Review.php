<?php

namespace App\Models;

use App\Enums\ReviewStatusEnum;
use App\Observers\ReviewObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy(ReviewObserver::class)]
class Review extends Model
{
    use HasFactory;

    protected $casts = [
        'status' => ReviewStatusEnum::class
    ];
    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
}
