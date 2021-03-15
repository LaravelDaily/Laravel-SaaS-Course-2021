<?php

namespace App\Http\Controllers;

use App\Models\Plan;

class BillingController extends Controller
{
    public function index()
    {
        $plans = Plan::all();

        return view('billing.index', compact('plans'));
    }
}
