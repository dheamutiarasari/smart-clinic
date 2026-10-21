<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\MedicalRecord;
use Illuminate\Http\Request;

class MedicalRecordController extends Controller
{
    public function create(Appointment $appointment)
    {
        $appointment->load(
            'patient',
            'doctorSchedule.doctor'
        );

        return view(
            'doctor.medical_records.create',
            compact('appointment')
        );
    }

    public function store(
        Request $request,
        Appointment $appointment
    ) {
        $request->validate([
            'complaint' => 'nullable|string',
            'diagnosis' => 'nullable|string',
            'blood_pressure' => 'nullable|string|max:20',
            'notes' => 'nullable|string',
        ]);

        $medicalRecord = MedicalRecord::create([
            'appointment_id' => $appointment->id,
            'patient_id' => $appointment->patient_id,
            'doctor_id' => $appointment->doctorSchedule->doctor_id,
            'complaint' => $request->complaint,
            'diagnosis' => $request->diagnosis,
            'blood_pressure' => $request->blood_pressure,
            'notes' => $request->notes,
        ]);

        return redirect()
            ->route(
                'doctor.prescriptions.create',
                $medicalRecord->id
            )
            ->with(
                'success',
                'Rekam medis berhasil disimpan. Silakan masukkan resep.'
            );
    }
}