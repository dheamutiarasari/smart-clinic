<?php

namespace App\Http\Controllers;

use App\Models\MedicalRecord;

class PatientHistoryController extends Controller
{
    public function index()
    {
        $medicalRecords = MedicalRecord::with(
            'doctor',
            'appointment',
            'prescriptions'
        )
        ->where('patient_id', auth()->id())
        ->latest()
        ->get();

        return view(
            'patient.history.index',
            compact('medicalRecords')
        );
    }
}