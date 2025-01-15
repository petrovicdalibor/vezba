<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Http\Resources\ReviewResource;
use App\Models\Review;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ReviewController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $reviews = Review::query()
            ->paginate();

        return ReviewResource::collection($reviews);
    }

    public function show(Review $review): ReviewResource
    {
        return new ReviewResource($review);
    }

    public function store(ReviewRequest $request): JsonResponse
    {
        $review = Review::query()->create($request->validated());

        return new JsonResponse([
            'message' => 'Review created successfully.'
        ]);
    }
}
