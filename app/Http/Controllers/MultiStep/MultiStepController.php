<?php

namespace App\Http\Controllers\MultiStep;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MultiStepController extends Controller
{
    public function index()
    {
        return view('pages.muti-step.index');
    }
}
