<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $path = $request->path();
        $data = Feedback::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%")
                         ->orWhere('phone', 'like', "%{$search}%")
                         ->orWhere('service', 'like', "%{$search}%")
                         ->orWhere('therapist_id', 'like', "%{$search}%")
                         ->orWhere('testimony', 'like', "%{$search}%")
                         ->orWhere('star', 'like', "%{$search}%")
                         ->orWhere('dateCreated', 'like', "%{$search}%");
        })->paginate(10);
        return view('pages/FeedbackPage/show', compact('data', 'path'));
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
        Feedback::destroy($id);
        return redirect('feedback')->with('success', 'Data berhasil dihapus');
    }
}
