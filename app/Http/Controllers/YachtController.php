<?php

namespace App\Http\Controllers;

use App\Http\Requests\YachtRequest;
use App\Http\Resources\YachtResource;
use App\Models\Yacht;
use Illuminate\Http\JsonResponse;

class YachtController extends Controller
{
    public function index() {
        $yachts = Yacht::query()
            ->paginate();

        return YachtResource::collection($yachts);
    }

    public function show(Yacht $yacht): YachtResource
    {
        return YachtResource::make($yacht);
    }

    public function destroy(Yacht $yacht): JsonResponse
    {
        $yacht->delete();

        return new JsonResponse([
            'message' => 'Yacht deleted successfully.'
        ]);
    }

    public function store(YachtRequest $request): JsonResponse
    {
        $yacht = Yacht::query()->create($request->validated());

        return new JsonResponse([
            'yacht' => YachtResource::make($yacht),
            'message' => 'Yacht created successfully.'
        ]);
    }

    public function update(Yacht $yacht, YachtRequest $request): JsonResponse
    {
        $yacht->update($request->validated());

        return new JsonResponse([
            'yacht' => YachtResource::make($yacht),
            'message' => 'Yacht updated successfully.'
        ]);
    }
}
