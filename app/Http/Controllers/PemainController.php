<?php

namespace App\Http\Controllers;

use App\Models\Pemain;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorepemainRequest;
use App\Http\Requests\UpdatepemainRequest;

class PemainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataPemain = Pemain::all();
        return view('pemains.index', compact('dataPemain'));
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
    public function store(StorepemainRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(pemain $pemain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pemain $pemain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepemainRequest $request, pemain $pemain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pemain $pemain)
    {
        //
    }
}
