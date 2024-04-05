<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Provider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ProviderResource;
use App\Http\Resources\V1\ProviderCollection;
use App\Filters\V1\ProvidersFilter;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new ProvidersFilter;
        $queryItems = $filter->transform($request);

        if (count($queryItems) == 0) {
            return new ProviderCollection(Provider::paginate());
        } else {
            return new ProviderCollection(Provider::where($queryItems)->paginate());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Provider $provider)
    {
        return new ProviderResource($provider);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Provider $provider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Provider $provider)
    {
        //
    }
}
