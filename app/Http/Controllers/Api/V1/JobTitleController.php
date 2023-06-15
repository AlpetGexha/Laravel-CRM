<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\JobTitle\StoreRequest;
use App\Http\Resources\Api\V1\JobTitleResource;
use App\Models\JobTitle;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class JobTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $job_title = JobTitle::all();

        return response()->json([
            'data' => JobTitleResource::collection($job_title),
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): JsonResponse
    {
        $job_title = JobTitle::create(
            $request->validated()
        );

        return response()->json([
            'data' => JobTitleResource::collection($job_title),
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        $job_title = JobTitle::query()
            ->where('id', $id)
            ->firstOrFail();

        return response()->json([
            'data' => JobTitleResource::collection($job_title),
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRequest $request, string $id): JsonResponse
    {
        $job_title = JobTitle::query()
            ->where('id', $id)
            ->firstOrFail();
        $job_title->update($request->validated());

        return response()->json([
            'data' => JobTitleResource::collection($job_title->refresh()),
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        JobTitle::query()
            ->where('id', $id)
            ->firstOrFail()
            ->deleteOrFail();

        return response()->noContent();
    }
}
