<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Interaction\StoreRequest;
use App\Http\Requests\Api\V1\Interaction\UpdateRequest;
use App\Http\Resources\Api\V1\InteractionResource;
use App\Models\Interaction;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response as HttpResponse;

class InteractionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $interactions = Interaction::query()
            ->where('user_id', auth()->id())
            ->with(
                'user:id,name,email',
                'contact:id,first_name,last_name,email,phone',
                'project:id,title,deadline,status',
            )
            ->paginate(15);

        return response()->json([
            'data' => InteractionResource::collection($interactions),
        ], HttpResponse::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): JsonResponse
    {
        $interaction = Interaction::create($request->validated());
        // $interaction->load(
        //     'user:id,name,email',
        //     'contact:id,first_name,last_name,email,phone',
        //     'project:id,title,deadline,status'
        // );

        return response()->json([
            'data' => InteractionResource::collection($interaction),
        ], HttpResponse::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $uuid): JsonResponse
    {
        $interaction = Interaction::query()
            ->where('uuid', $uuid)
            ->firstOrFail();

        return response()->json([
            'data' => InteractionResource::collection($interaction),
        ], HttpResponse::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $uuid): JsonResponse
    {
        $interaction = Interaction::query()
            ->where('uuid', $uuid)
            ->firstOrFail()
            ->update($request->validated());

        return response()->json([
            'data' =>  InteractionResource::collection($interaction),
        ], HttpResponse::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $uuid)
    {
        Interaction::query()
            ->where('uuid', $uuid)
            ->firstOrFail()
            ->deleteOrFail();

        return response()->noContent();
    }
}
