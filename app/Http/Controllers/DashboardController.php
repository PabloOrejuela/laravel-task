<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $data['user'] = Auth::user();
        $data['tasks'] = $data['user']->tasks;

        return view('dashboard', $data);
    }
}
