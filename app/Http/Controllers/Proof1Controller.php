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
}
