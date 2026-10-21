<?php

namespace App\Http\Controllers;

use App\Models\Polyclinic;
use Illuminate\Http\Request;

class PolyclinicController extends Controller
{
    public function index()
    {
        $polyclinics = Polyclinic::latest()->get();

        return view('admin.polyclinics.index', compact('polyclinics'));
    }

    public function create()
    {
        return view('admin.polyclinics.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Polyclinic::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        return redirect()
            ->route('admin.polyclinics.index')
            ->with('success', 'Poli berhasil ditambahkan!');
    }
}