<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $path = $request->path();
        $data = User::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%")
                         ->orWhere('id', 'like', "%{$search}%")
                         ->orWhere('email', 'like', "%{$search}%")
                         ->orWhere('role', 'like', "%{$search}%")
                         ->orWhere('position', 'like', "%{$search}%")
                         ->orWhere('location', 'like', "%{$search}%")
                         ->orWhere('age', 'like', "%{$search}%")
                         ->orWhere('phone', 'like', "%{$search}%")
                         ->orWhere('salary', 'like', "%{$search}%");
        })->simplePaginate(10);
        return view('pages/UserPage/show', compact('data', 'path'));
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
        $path = 'none';
        $data = User::find($id);
        return view('pages/UserPage/edit', compact('data', 'path'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);

        $payload = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'role'=>'required',
            'position'=>'required',
            'location'=>'required',
            'age'=>'required',
            'phone'=>'required',
            'salary'=>'required',
        ]);
        $user->name = $payload["name"];
        $user->email = $payload["email"];
        $user->role = $payload["role"];
        $user->position = $payload["position"];
        $user->location = $payload["location"];
        $user->age = $payload["age"];
        $user->phone = $payload["phone"];
        $user->salary = $payload["salary"];
        $user->save();
        return redirect('user')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect('user')->with('success', 'Data berhasil dihapus');
    }
}
