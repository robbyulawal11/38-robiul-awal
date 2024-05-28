<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $path = $request->path();
        $data = Appointment::all();
        $totalIncome = number_format(Appointment::where('status', 'done')->sum('price'), 2, ',', '.');
        $countAllData = Appointment::count();
        $countDoneData =  Appointment::where('status', 'done')->count();
        $appointmentProgress = number_format($countDoneData/$countAllData*100, 2);
        $pendingRequest = Appointment::where('status', 'new')->count();
        return view('pages/dashboard', compact('data', 'path', 'totalIncome', 'appointmentProgress', 'pendingRequest'));
    }
}
