<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Appointment;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $path = $request->path();
        $data = Appointment::all();
        $role = Auth::user()->role;
        $nameUser = Auth::user()->name;
        if( $role == 'admin' ){
            $totalIncome = number_format(Appointment::where('status', 'done')->sum('price'), 2, ',', '.');
            $countAllData = Appointment::count();
            $countDoneData =  Appointment::where('status', 'done')->count();
            $appointmentProgress = number_format($countDoneData/$countAllData*100, 2);
            $pendingRequest = Appointment::where('status', 'new')->count();
            $countSIService = Appointment::where('service', 'sport injury')->count();
            $countSMService = Appointment::where('service', 'sport massase')->count();
            $countETService = Appointment::where('service', 'exercise therapy')->count();
        }else{
            $totalIncome = number_format(Appointment::with('user')->whereHas('user', function($q) use ($nameUser) {
                $q->where('name', $nameUser);
                })->where('status', 'done')->sum('price'), 2, ',', '.');
            $countAllData = Appointment::with('user')->whereHas('user', function($q) use ($nameUser) {
                $q->where('name', $nameUser);
                })->count();
            $countDoneData =  Appointment::with('user')->whereHas('user', function($q) use ($nameUser) {
                $q->where('name', $nameUser);
                })->where('status', 'done')->count();
            $appointmentProgress = number_format($countDoneData/$countAllData*100, 2);
            $pendingRequest = Appointment::with('user')->whereHas('user', function($q) use ($nameUser) {
                $q->where('name', $nameUser);
                })->where('status', 'new')->count();
            $countSIService = Appointment::with('user')->whereHas('user', function($q) use ($nameUser) {
                $q->where('name', $nameUser);
                })->where('service', 'sport injury')->count();
            $countSMService = Appointment::with('user')->whereHas('user', function($q) use ($nameUser) {
                $q->where('name', $nameUser);
                })->where('service', 'sport massase')->count();
            $countETService = Appointment::with('user')->whereHas('user', function($q) use ($nameUser) {
                $q->where('name', $nameUser);
                })->where('service', 'exercise therapy')->count();
        }
        return view('pages/dashboard', compact('data', 'path', 'totalIncome', 'appointmentProgress', 'pendingRequest', 'countSIService', 'countSMService', 'countETService'));
    }
}
