<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{


    public function list(): \Illuminate\Database\Eloquent\Collection
    {
        return Plan::all();
    }
}
