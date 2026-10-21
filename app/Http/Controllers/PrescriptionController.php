<?php

namespace App\Http\Controllers;

use App\Models\MedicalRecord;
use App\Models\Prescription;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    public function create(MedicalRecord $medicalRecord)
    {
        $medicalRecord->load(
            'patient',
            'doctor',
            'appointment'
        );

        return view(
            'doctor.prescriptions.create',
            compact('medicalRecord')
        );
    }

    public function store(
        Request $request,
        MedicalRecord $medicalRecord
    ) {
        $request->validate([
            'medicine_name' => 'required|string|max:255',
            'dosage' => 'nullable|string|max:255',
            'usage' => 'nullable|string|max:255',
            'quantity' => 'nullable|integer|min:1',
            'notes' => 'nullable|string',
        ]);

        Prescription::create([
            'medical_record_id' => $medicalRecord->id,
            'medicine_name' => $request->medicine_name,
            'dosage' => $request->dosage,
            'usage' => $request->usage,
            'quantity' => $request->quantity,
            'notes' => $request->notes,
        ]);

        return redirect()
            ->route('doctor.queues.index')
            ->with('success', 'Resep berhasil disimpan.');
    }
}