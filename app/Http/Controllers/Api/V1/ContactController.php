<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Contact\StoreRequest;
use App\Http\Requests\Api\V1\Contact\UpdateRequest;
use App\Http\Resources\Api\V1\ContactResource;
use App\Models\Contact;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response as HttpResponse;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $contact = Contact::paginate(15);

        return response()->json([
            'data' => ContactResource::collection($contact),
        ], HttpResponse::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $contact = Contact::create($request->validated());

        return response()->json([
            'data' => new ContactResource($contact),
        ], HttpResponse::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $uuid)
    {
        $contact = Contact::where('uuid', $uuid)->firstOrFail();

        return response()->json([
            'data' => new ContactResource($contact),
        ], HttpResponse::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $uuid)
    {

        $contact = Contact::query()
            ->where('uuid', $uuid)
            ->firstOrFail();

        $contact->update($request->validated());

        return response()->json([
            'data' => new ContactResource($contact->refresh()),
        ], HttpResponse::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
