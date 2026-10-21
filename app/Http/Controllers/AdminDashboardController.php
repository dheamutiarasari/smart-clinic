<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Polyclinic;
use App\Models\Appointment;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalPatients = User::where('role', 'patient')->count();

        $totalDoctors = Doctor::count();

        $totalPolyclinics = Polyclinic::count();

        $totalAppointments = Appointment::count();

        return view('dashboard.admin', compact(
            'totalPatients',
            'totalDoctors',
            'totalPolyclinics',
            'totalAppointments'
        ));
    }
}