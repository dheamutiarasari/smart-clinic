<?php

namespace App\Http\Controllers;

use App\Models\Appointment;

class AdminQueueController extends Controller
{
    public function index()
    {
        $appointments = Appointment::with([
            'patient',
            'doctorSchedule.doctor',
            'doctorSchedule.doctor.polyclinic',
        ])
        ->whereIn('status', [
            'booked',
            'called',
            'serving',
            'completed',
        ])
        ->orderBy('appointment_date')
        ->orderBy('queue_number')
        ->get();

        return view(
            'admin.queues.index',
            compact('appointments')
        );
    }
}