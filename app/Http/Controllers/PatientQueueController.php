<?php

namespace App\Http\Controllers;

use App\Models\Appointment;

class PatientQueueController extends Controller
{
    public function index()
    {
        $appointment = Appointment::with(
            'doctorSchedule.doctor'
        )
        ->where('patient_id', auth()->id())
        ->whereIn('status', [
            'booked',
            'called',
            'serving'
        ])
        ->latest()
        ->first();

        return view(
            'patient.queue.index',
            compact('appointment')
        );
    }
}