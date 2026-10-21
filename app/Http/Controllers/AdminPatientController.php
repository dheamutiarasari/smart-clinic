<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminPatientController extends Controller
{
    public function index()
    {
        $patients = User::where('role', 'patient')
            ->latest()
            ->get();

        return view(
            'admin.patients.index',
            compact('patients')
        );
    }
}