<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Company\StoreRequest;
use App\Http\Requests\Api\V1\Company\UpdateRequest;
use App\Http\Resources\Api\V1\CompanyResource;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company = Company::all();

        return response()->json([
            'data' => CompanyResource::collection($company),
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $company = Company::create(
            $request->validated()
        );

        return response()->json([
            'data' => CompanyResource::collection($company),
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $uuid)
    {
        // show single
        $company = Company::query()
            ->where('id', $uuid)
            ->firstOrFail();

        return response()->json([
            'data' => CompanyResource::collection($company),
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $uuid)
    {
        $company = Company::query()
            ->where('id', $uuid)
            ->firstOrFail();

        $company->update(
            $request->validated()
        );

        return response()->json([
            'data' => CompanyResource::collection($company),
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $uuid)
    {
        Company::query()
            ->where('id', $uuid)
            ->firstOrFail()
            ->deleteOrFail();

        return response()->noContent();
    }
}
