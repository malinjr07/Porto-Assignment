<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Office;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use App\Adress;
use App\state;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('dashboard.main');
    }
    public function form()
    {
        return view('dashboard.component.form');
    }
    public function list(){
        return view('dashboard.component.list');
    }
}
