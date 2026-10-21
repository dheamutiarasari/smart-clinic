<?php

namespace App\Http\Controllers;

use App\Models\Appointment;

class AdminAppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::with([
            'patient',
            'doctorSchedule.doctor',
            'doctorSchedule.doctor.polyclinic',
        ])
        ->latest('appointment_date')
        ->latest('queue_number')
        ->get();

        return view(
            'admin.appointments.index',
            compact('appointments')
        );
    }
}