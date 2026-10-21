<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Notification;
use Illuminate\Http\Request;

class QueueController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Daftar Data Pasien Dokter
    |--------------------------------------------------------------------------
    */

    public function patients()
    {
        $appointments = Appointment::with(
            'patient',
            'doctorSchedule.doctor'
        )
        ->whereHas('doctorSchedule', function ($query) {
            $query->where('doctor_id', auth()->id());
        })
        ->orderBy('appointment_date', 'desc')
        ->orderBy('queue_number')
        ->get();

        return view(
            'doctor.patients.index',
            compact('appointments')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Daftar Antrean
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $appointments = Appointment::with(
            'patient',
            'doctorSchedule.doctor'
        )
        ->whereIn('status', ['booked', 'called', 'serving'])
        ->orderBy('appointment_date')
        ->orderBy('queue_number')
        ->get();

        return view(
            'doctor.queues.index',
            compact('appointments')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Daftar Pemeriksaan
    |--------------------------------------------------------------------------
    */

    public function examinations()
    {
        $appointments = Appointment::with(
            'patient',
            'doctorSchedule.doctor'
        )
        ->whereIn('status', ['called', 'serving'])
        ->orderBy('appointment_date')
        ->orderBy('queue_number')
        ->get();

        return view(
            'doctor.examinations.index',
            compact('appointments')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Panggil Pasien
    |--------------------------------------------------------------------------
    */

    public function call(Appointment $appointment)
    {
        // Ubah status menjadi dipanggil
        $appointment->update([
            'status' => 'called',
        ]);

        // Kirim notifikasi kepada pasien
        Notification::create([
            'user_id' => $appointment->patient_id,
            'title' => 'Giliran Anda Dipanggil',
            'message' =>
                "Nomor antrean Anda adalah {$appointment->queue_number}. Silakan menuju ruang dokter.",
            'is_read' => false,
        ]);

        return redirect()
            ->route('doctor.queues.index')
            ->with(
                'success',
                'Pasien berhasil dipanggil dan notifikasi telah dikirim.'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | Mulai Melayani
    |--------------------------------------------------------------------------
    */

    public function serve(Appointment $appointment)
    {
        // Ubah status menjadi sedang dilayani
        $appointment->update([
            'status' => 'serving',
        ]);

        // Kirim notifikasi kepada pasien
        Notification::create([
            'user_id' => $appointment->patient_id,
            'title' => 'Pemeriksaan Dimulai',
            'message' =>
                'Dokter sudah mulai melayani Anda.',
            'is_read' => false,
        ]);

        return redirect()
            ->route('doctor.queues.index')
            ->with(
                'success',
                'Pasien mulai dilayani dan notifikasi telah dikirim.'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | Selesai Melayani
    |--------------------------------------------------------------------------
    */

    public function complete(Appointment $appointment)
    {
        // Ubah status menjadi selesai
        $appointment->update([
            'status' => 'completed',
        ]);

        return redirect()
            ->route('doctor.queues.index')
            ->with(
                'success',
                'Pemeriksaan pasien selesai.'
            );
    }
}