<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PolyclinicController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorScheduleController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\QueueController;
use App\Http\Controllers\MedicalRecordController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\PatientHistoryController;
use App\Http\Controllers\PatientQrController;
use App\Http\Controllers\PatientQueueController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminPatientController;
use App\Http\Controllers\AdminAppointmentController;
use App\Http\Controllers\AdminQueueController;
use App\Http\Controllers\AdminReportController;
use App\Http\Controllers\NotificationController;

/*
|--------------------------------------------------------------------------
| HALAMAN UTAMA
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {

    if (auth()->user()->role === 'admin') {
        return redirect()->route('admin.dashboard');
    }

    if (auth()->user()->role === 'doctor') {
        return redirect()->route('doctor.dashboard');
    }

    return redirect()->route('patient.dashboard');

})->middleware('auth')->name('dashboard');

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:admin'])->group(function () {

    // Dashboard Admin
    Route::get('/admin/dashboard', function () {
        return app(AdminDashboardController::class)->index();
    })->name('admin.dashboard');

    // Kelola Pasien
    Route::get('/admin/patients', [AdminPatientController::class, 'index'])
        ->name('admin.patients.index');

    // Kelola Booking
    Route::get('/admin/appointments', [AdminAppointmentController::class, 'index'])
        ->name('admin.appointments.index');

    // Kelola Antrean
    Route::get('/admin/queues', [AdminQueueController::class, 'index'])
        ->name('admin.queues.index');

    // Laporan
    Route::get('/admin/reports', [AdminReportController::class, 'index'])
        ->name('admin.reports.index');

    // Kelola Poli
    Route::resource('polyclinics', PolyclinicController::class)
        ->only(['index', 'create', 'store'])
        ->names('admin.polyclinics');

    // Kelola Dokter
    Route::resource('doctors', DoctorController::class)
        ->only(['index', 'create', 'store'])
        ->names('admin.doctors');

    // Kelola Jadwal Dokter
    Route::resource('doctor-schedules', DoctorScheduleController::class)
        ->only(['index', 'create', 'store'])
        ->names('admin.doctor-schedules');

});

/*
|--------------------------------------------------------------------------
| DOCTOR
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:doctor'])->group(function () {

    // Dashboard Dokter
    Route::get('/doctor/dashboard', function () {
        return view('dashboard.doctor');
    })->name('doctor.dashboard');

    // Data Pasien
    Route::get('/doctor/patients', [QueueController::class, 'patients'])
        ->name('doctor.patients.index');

    // Antrean Pasien
    Route::get('/doctor/queues', [QueueController::class, 'index'])
        ->name('doctor.queues.index');

    // Panggil Pasien
    Route::post(
        '/doctor/queues/{appointment}/call',
        [QueueController::class, 'call']
    )->name('doctor.queues.call');

    // Mulai Melayani
    Route::post(
        '/doctor/queues/{appointment}/serve',
        [QueueController::class, 'serve']
    )->name('doctor.queues.serve');

    // Selesai Melayani
    Route::post(
        '/doctor/queues/{appointment}/complete',
        [QueueController::class, 'complete']
    )->name('doctor.queues.complete');

    // Pemeriksaan
    Route::get(
        '/doctor/examinations',
        [QueueController::class, 'examinations']
    )->name('doctor.examinations.index');

    // Jadwal Praktik Dokter
    Route::get(
        '/doctor/schedules',
        [DoctorScheduleController::class, 'doctorIndex']
    )->name('doctor.schedules.index');

    // Form Rekam Medis
    Route::get(
        '/doctor/medical-records/{appointment}/create',
        [MedicalRecordController::class, 'create']
    )->name('doctor.medical-records.create');

    // Simpan Rekam Medis
    Route::post(
        '/doctor/medical-records/{appointment}',
        [MedicalRecordController::class, 'store']
    )->name('doctor.medical-records.store');

    // Form Resep
    Route::get(
        '/doctor/prescriptions/{medicalRecord}/create',
        [PrescriptionController::class, 'create']
    )->name('doctor.prescriptions.create');

    // Simpan Resep
    Route::post(
        '/doctor/prescriptions/{medicalRecord}',
        [PrescriptionController::class, 'store']
    )->name('doctor.prescriptions.store');

});

/*
|--------------------------------------------------------------------------
| PATIENT
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:patient'])->group(function () {

    // Dashboard Pasien
    Route::get('/patient/dashboard', function () {
        return view('dashboard.patient');
    })->name('patient.dashboard');

    // QR Code
    Route::get('/patient/qr', [PatientQrController::class, 'show'])
        ->name('patient.qr');

    // Riwayat Pemeriksaan
    Route::get('/patient/history', [PatientHistoryController::class, 'index'])
        ->name('patient.history.index');

    // Status Antrean
    Route::get('/patient/queue', [PatientQueueController::class, 'index'])
        ->name('patient.queue.index');

    // Daftar Booking
    Route::get('/patient/appointments', [AppointmentController::class, 'index'])
        ->name('patient.appointments.index');

    // Form Booking
    Route::get(
        '/patient/appointments/create/{doctorSchedule}',
        [AppointmentController::class, 'create']
    )->name('patient.appointments.create');

    // Simpan Booking
    Route::post(
        '/patient/appointments',
        [AppointmentController::class, 'store']
    )->name('patient.appointments.store');

});

/*
|--------------------------------------------------------------------------
| NOTIFICATIONS
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    // Daftar Notifikasi
    Route::get('/notifications', [NotificationController::class, 'index'])
        ->name('notifications.index');

    // Tandai satu notifikasi sudah dibaca
    Route::post(
        '/notifications/{notification}/read',
        [NotificationController::class, 'read']
    )->name('notifications.read');

    // Tandai semua sudah dibaca
    Route::post(
        '/notifications/read-all',
        [NotificationController::class, 'readAll']
    )->name('notifications.readAll');

});

/*
|--------------------------------------------------------------------------
| AUTHENTICATION
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';