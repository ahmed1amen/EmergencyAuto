<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlerterController extends Controller
{
    public function index()
    {
        return view('Alerter.index');
    }
}
