<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\DoctorSchedule;
use App\Models\Notification;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Daftar Jadwal Dokter
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $schedules = DoctorSchedule::with('doctor')
            ->where('is_active', true)
            ->orderBy('day')
            ->orderBy('start_time')
            ->get();

        return view(
            'patient.appointments.index',
            compact('schedules')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Form Booking
    |--------------------------------------------------------------------------
    */

    public function create(DoctorSchedule $doctorSchedule)
    {
        $doctorSchedule->load('doctor');

        return view(
            'patient.appointments.create',
            compact('doctorSchedule')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Simpan Booking
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        // Validasi data booking
        $request->validate([
            'doctor_schedule_id' => 'required|exists:doctor_schedules,id',
            'appointment_date' => 'required|date|after_or_equal:today',
        ]);


        // Ambil jadwal dokter
        $schedule = DoctorSchedule::findOrFail(
            $request->doctor_schedule_id
        );


        // Cek apakah pasien sudah booking
        // pada jadwal dan tanggal yang sama
        $alreadyBooked = Appointment::where(
                'patient_id',
                auth()->id()
            )
            ->where(
                'doctor_schedule_id',
                $schedule->id
            )
            ->where(
                'appointment_date',
                $request->appointment_date
            )
            ->exists();


        // Jika sudah booking
        if ($alreadyBooked) {

            return back()
                ->withErrors([
                    'appointment_date' =>
                        'Anda sudah memiliki booking pada jadwal tersebut.'
                ])
                ->withInput();
        }


        // Cari nomor antrean terakhir
        $lastQueue = Appointment::where(
                'doctor_schedule_id',
                $schedule->id
            )
            ->where(
                'appointment_date',
                $request->appointment_date
            )
            ->max('queue_number');


        // Tentukan nomor antrean berikutnya
        $queueNumber = $lastQueue
            ? $lastQueue + 1
            : 1;


        // Simpan booking
        Appointment::create([
            'patient_id' => auth()->id(),
            'doctor_schedule_id' => $schedule->id,
            'appointment_date' => $request->appointment_date,
            'queue_number' => $queueNumber,
            'status' => 'booked',
        ]);


        // Buat notifikasi untuk pasien
        Notification::create([
            'user_id' => auth()->id(),
            'title' => 'Booking Berhasil',
            'message' =>
                "Booking berhasil. Nomor antrean Anda adalah {$queueNumber}.",
            'is_read' => false,
        ]);


        // Kembali ke halaman booking
        return redirect()
            ->route('patient.appointments.index')
            ->with(
                'success',
                "Booking berhasil! Nomor antrean Anda: {$queueNumber}"
            );
    }
}