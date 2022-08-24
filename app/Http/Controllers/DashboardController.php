<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;
use Auth;
class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalbooking=Booking::all()->count();
        $totaldeposit = Booking::sum('deposit');
        $booking= Booking::where("client_id",Auth::user()->id)->get();
        return view('dashboard')->with(compact('totalbooking','totaldeposit','booking'));
    }
}
