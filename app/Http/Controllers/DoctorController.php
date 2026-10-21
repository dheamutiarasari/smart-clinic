<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Polyclinic;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::with('polyclinic')
            ->latest()
            ->get();

        return view('admin.doctors.index', compact('doctors'));
    }

    public function create()
    {
        $polyclinics = Polyclinic::where('is_active', true)
            ->orderBy('name')
            ->get();

        return view('admin.doctors.create', compact('polyclinics'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'polyclinic_id' => 'required|exists:polyclinics,id',
        ]);

        Doctor::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'polyclinic_id' => $request->input('polyclinic_id'),
        ]);

        return redirect()
            ->route('admin.doctors.index')
            ->with('success', 'Dokter berhasil ditambahkan!');
    }
}