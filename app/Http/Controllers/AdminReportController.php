<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Polyclinic;
use App\Models\User;

class AdminReportController extends Controller
{
    public function index()
    {
        // Statistik utama
        $totalPatients = User::where('role', 'patient')->count();

        $totalDoctors = Doctor::count();

        $totalPolyclinics = Polyclinic::count();

        $totalAppointments = Appointment::count();


        // Statistik status booking
        $totalBooked = Appointment::where('status', 'booked')->count();

        $totalCalled = Appointment::where('status', 'called')->count();

        $totalServing = Appointment::where('status', 'serving')->count();

        $totalCompleted = Appointment::where('status', 'completed')->count();


        // Data booking terbaru
        $appointments = Appointment::with([
            'patient',
            'doctorSchedule.doctor',
            'doctorSchedule.doctor.polyclinic',
        ])
        ->latest('appointment_date')
        ->latest()
        ->get();


        return view(
            'admin.reports.index',
            compact(
                'totalPatients',
                'totalDoctors',
                'totalPolyclinics',
                'totalAppointments',
                'totalBooked',
                'totalCalled',
                'totalServing',
                'totalCompleted',
                'appointments'
            )
        );
    }
}