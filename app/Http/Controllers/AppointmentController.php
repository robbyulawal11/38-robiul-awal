<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $path = $request->path();
        // Jika ada input pencarian, tambahkan kondisi ke query
        $data = Appointment::when($search, function ($query, $search) {
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
        return view('pages/AppointmentPage/show', compact('data', 'path'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $path = 'none';
        $user = User::all();
        return view('pages/AppointmentPage/create', compact('user', 'path'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $appointment = new Appointment;
        $payload = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'service' => 'required',
            'therapist_id' => 'required',
            'location' => 'required',
            'phone' => 'required',
            'event_date' => 'required',
            'start_time' => 'required',
            'complaint' => 'required',
            'status' => 'required',
            'price' => 'required',]);
        $appointment->name = $payload["name"];
        $appointment->gender = $payload["gender"];
        $appointment->service = $payload["service"];
        $appointment->therapist_id = $payload["therapist_id"];
        $appointment->location = $payload["location"];
        $appointment->phone = $payload["phone"];
        $appointment->event_date = $payload["event_date"];
        $appointment->start_time = $payload["start_time"];
        $appointment->complaint = $payload["complaint"];
        $appointment->status = $payload["status"];
        $appointment->price = $payload["price"];
        $appointment->save();
        return redirect('appointment')->with('success', 'Data berhasil ditambah');
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
        $path = 'none';
        $data = Appointment::find($id);
        $user = User::all();
        return view('pages/AppointmentPage/edit', compact('data', 'user', 'path'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $appointment = Appointment::find($id);

        $payload = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'service' => 'required',
            'therapist_id' => 'required',
            'location' => 'required',
            'phone' => 'required',
            'event_date' => 'required',
            'start_time' => 'required',
            'complaint' => 'required',
            'status' => 'required',
            'price' => 'required',]);
        $appointment->name = $payload["name"];
        $appointment->gender = $payload["gender"];
        $appointment->service = $payload["service"];
        $appointment->therapist_id = $payload["therapist_id"];
        $appointment->location = $payload["location"];
        $appointment->phone = $payload["phone"];
        $appointment->event_date = $payload["event_date"];
        $appointment->start_time = $payload["start_time"];
        $appointment->complaint = $payload["complaint"];
        $appointment->status = $payload["status"];
        $appointment->price = $payload["price"];
        $appointment->save();
        return redirect('appointment')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Appointment::destroy($id);
        return redirect('appointment')->with('success', 'Data berhasil dihapus');
    }
}
