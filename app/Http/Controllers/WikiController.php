<?php

namespace App\Http\Controllers;

use App\Models\Wiki;
use App\Http\Requests\StoreWikiRequest;
use App\Http\Requests\UpdateWikiRequest;

class WikiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreWikiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Wiki $wiki)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wiki $wiki)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWikiRequest $request, Wiki $wiki)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wiki $wiki)
    {
        //
    }
}
