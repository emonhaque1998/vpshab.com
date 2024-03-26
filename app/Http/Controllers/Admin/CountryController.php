<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Cache::remember('wp_country', Carbon::now()->addDays(7), function () {
            // Code to fetch the data if not found in the cache
            return Country::all();
        });
        return view("admin.product.country-list", ["countris" => $countries]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|unique:countries,name",
            "horizontal" => "required",
            "vertical" => "required"
        ]);

        $data = Country::create($request->all());
        Cache::forget('wp_country');

        return response()->json([
            "message" => "Successfully Country Update",
            "returnData" => $data
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
