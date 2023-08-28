<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerProof_1 extends Controller
{
    public function __invoke()
    {
        return view('welcome');
    }
}
