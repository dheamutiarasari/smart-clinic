<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\DoctorSchedule;
use Illuminate\Http\Request;

class DoctorScheduleController extends Controller
{
    // =========================
    // ADMIN: DAFTAR JADWAL
    // =========================

    public function index()
    {
        $schedules = DoctorSchedule::with('doctor.polyclinic')
            ->latest()
            ->get();

        return view(
            'admin.doctor_schedules.index',
            compact('schedules')
        );
    }

    // =========================
    // ADMIN: FORM TAMBAH JADWAL
    // =========================

    public function create()
    {
        $doctors = Doctor::where('is_active', true)
            ->orderBy('name')
            ->get();

        return view(
            'admin.doctor_schedules.create',
            compact('doctors')
        );
    }

    // =========================
    // ADMIN: SIMPAN JADWAL
    // =========================

    public function store(Request $request)
    {
        $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'day' => 'required|string|max:20',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
        ]);

        DoctorSchedule::create([
            'doctor_id' => $request->doctor_id,
            'day' => $request->day,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'is_active' => true,
        ]);

        return redirect()
            ->route('admin.doctor-schedules.index')
            ->with('success', 'Jadwal dokter berhasil ditambahkan!');
    }

    // =========================
    // DOKTER: DAFTAR JADWAL PRAKTIK
    // =========================

    public function doctorIndex()
    {
        $schedules = DoctorSchedule::with('doctor.polyclinic')
            ->where('is_active', true)
            ->orderBy('day')
            ->orderBy('start_time')
            ->get();

        return view(
            'doctor.schedules.index',
            compact('schedules')
        );
    }
}