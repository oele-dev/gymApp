<?php

namespace App\Http\Controllers;

use App\Models\Hour;
use Illuminate\Http\Request;

class HoursController extends Controller
{
    //

    public function index() {
        return view('hours.index', [
            'hours' => Hour::all(),
            'search'=> '',
        ]);
    }
}
