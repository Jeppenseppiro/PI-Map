<?php

namespace App\Http\Controllers;

use App\Models\PiData;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PiDataController extends Controller
{
    public function index()
    {
        return Inertia::render('Dashboard/Index', [
            'piData' => PiData::get(),
        ]);
    }
}
