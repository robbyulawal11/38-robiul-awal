<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\User;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $path = $request->path();
        $data = Appointment::where('status', 'done')->when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%")
                         ->orWhere('gender', 'like', "%{$search}%")
                         ->orWhere('service', 'like', "%{$search}%")
                         ->orWhere('therapist_id', 'like', "%{$search}%")
                         ->orWhere('location', 'like', "%{$search}%")
                         ->orWhere('phone', 'like', "%{$search}%")
                         ->orWhere('event_date', 'like', "%{$search}%")
                         ->orWhere('start_time', 'like', "%{$search}%")
                         ->orWhere('complaint', 'like', "%{$search}%")
                         ->orWhere('status', 'like', "%{$search}%")
                         ->orWhere('price', 'like', "%{$search}%");
        })->paginate(10);
        $totalIncome = $data->sum('price');
        return view('pages/IncomePage/show', compact('data', 'totalIncome', 'path'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
