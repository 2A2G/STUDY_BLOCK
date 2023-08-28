<?php

namespace App\Http\Controllers;

use App\Models\Proof_1;
use App\Http\Requests\StoreProof_1Request;
use App\Http\Requests\UpdateProof_1Request;

class Proof1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.dashboard');
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
    public function store(StoreProof_1Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Proof_1 $proof_1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proof_1 $proof_1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProof_1Request $request, Proof_1 $proof_1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proof_1 $proof_1)
    {
        //
    }
}
