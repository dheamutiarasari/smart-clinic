<?php

namespace App\Http\Controllers;

use App\Models\Appointment;

class PatientQrController extends Controller
{
    public function show()
    {
        $appointment = Appointment::with(
            'doctorSchedule.doctor'
        )
        ->where('patient_id', auth()->id())
        ->whereIn('status', ['booked', 'called', 'serving'])
        ->latest()
        ->first();

        return view(
            'patient.qr.index',
            compact('appointment')
        );
    }
}