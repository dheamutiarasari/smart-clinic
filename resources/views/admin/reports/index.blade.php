<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laporan - Smart Clinic</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

        :root {
            --purple-dark: #3B0764;
            --purple-deep: #4C1D95;
            --purple: #7C3AED;
            --purple-light: #8B5CF6;
            --purple-soft: #A78BFA;
            --lavender: #E9D5FF;
            --background: #F3E8FF;
            --card: #FFFFFF;
            --text: #2E1065;
            --muted: #7E6A9B;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: var(--background);
            font-family: "Segoe UI", Arial, sans-serif;
            color: var(--text);
        }

        /* SIDEBAR */

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 250px;
            height: 100vh;
            background: linear-gradient(
                180deg,
                var(--purple-dark),
                var(--purple-deep)
            );
            color: white;
            box-shadow: 4px 0 20px rgba(59, 7, 100, 0.18);
            z-index: 1000;
        }

        .sidebar-brand {
            height: 75px;
            display: flex;
            align-items: center;
            padding: 0 25px;
            border-bottom: 1px solid rgba(255,255,255,.12);
        }

        .sidebar-brand i {
            font-size: 28px;
            margin-right: 10px;
        }

        .sidebar-brand strong {
            font-size: 18px;
        }

        .sidebar-content {
            padding: 22px 15px;
        }

        .sidebar-title {
            color: #C4B5FD;
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin: 10px 15px 12px;
        }

        .sidebar-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 15px;
            margin-bottom: 6px;
            border-radius: 12px;
            color: #E9D5FF;
            text-decoration: none;
            transition: .2s;
        }

        .sidebar-link:hover {
            background: rgba(255,255,255,.10);
            color: white;
        }

        .sidebar-link.active {
            background: linear-gradient(
                135deg,
                var(--purple-soft),
                var(--purple)
            );
            color: white;
            box-shadow: 0 6px 15px rgba(124,58,237,.3);
        }

        .sidebar-link i {
            font-size: 18px;
            width: 22px;
            text-align: center;
        }

        /* MAIN */

        .main {
            margin-left: 250px;
            min-height: 100vh;
        }

        /* TOPBAR */

        .topbar {
            height: 75px;
            padding: 0 30px;
            background: linear-gradient(
                90deg,
                #6D28D9,
                #7C3AED,
                #8B5CF6
            );
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 4px 15px rgba(76,29,149,.2);
        }

        .topbar-title {
            font-size: 18px;
            font-weight: 700;
        }

        .topbar-subtitle {
            color: #E9D5FF;
            font-size: 13px;
        }

        .topbar-right {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .notification-btn {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            background: rgba(255,255,255,.14);
            border: 1px solid rgba(255,255,255,.15);
        }

        .user-avatar {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255,255,255,.18);
            color: white;
            font-weight: 700;
        }

        /* CONTENT */

        .content {
            padding: 30px;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .page-title {
            color: var(--purple-deep);
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .page-subtitle {
            color: var(--muted);
            margin: 0;
        }

        .btn-purple {
            border: none;
            background: linear-gradient(
                135deg,
                #6D28D9,
                #8B5CF6
            );
            color: white;
            border-radius: 11px;
            padding: 10px 17px;
            text-decoration: none;
            font-weight: 600;
            box-shadow: 0 5px 12px rgba(124,58,237,.2);
        }

        .btn-purple:hover {
            color: white;
            transform: translateY(-1px);
        }

        /* STAT CARD */

        .stat-card {
            height: 100%;
            background: linear-gradient(
                135deg,
                #FFFFFF,
                #F5F3FF
            );
            border: 1px solid #DDD6FE;
            border-radius: 18px;
            padding: 22px;
            box-shadow: 0 6px 18px rgba(76,29,149,.08);
            transition: .2s;
        }

        .stat-card:hover {
            transform: translateY(-3px);
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(
                135deg,
                #E9D5FF,
                #DDD6FE
            );
            color: var(--purple);
            font-size: 22px;
            margin-bottom: 14px;
        }

        .stat-label {
            color: var(--muted);
            font-size: 14px;
            margin-bottom: 3px;
        }

        .stat-number {
            color: var(--purple-deep);
            font-size: 28px;
            font-weight: 700;
        }

        /* SECTION */

        .section-card {
            background: linear-gradient(
                135deg,
                #FFFFFF,
                #F5F3FF
            );
            border: 1px solid #DDD6FE;
            border-radius: 18px;
            box-shadow: 0 6px 18px rgba(76,29,149,.08);
            overflow: hidden;
        }

        .section-header {
            padding: 20px 24px;
            background: linear-gradient(
                90deg,
                #4C1D95,
                #7C3AED
            );
            color: white;
        }

        .section-header h5 {
            margin: 0;
            font-weight: 700;
        }

        .section-body {
            padding: 24px;
        }

        /* QUEUE STATUS */

        .queue-card {
            background: #F5F3FF;
            border: 1px solid #DDD6FE;
            border-radius: 15px;
            padding: 18px;
            height: 100%;
        }

        .queue-label {
            color: var(--muted);
            font-size: 14px;
            margin-bottom: 5px;
        }

        .queue-number {
            color: var(--purple-deep);
            font-size: 28px;
            font-weight: 700;
        }

        /* TABLE */

        .table-wrapper {
            overflow-x: auto;
        }

        .table {
            margin-bottom: 0;
            min-width: 850px;
        }

        .table thead th {
            background: #E9D5FF;
            color: var(--purple-deep);
            border-bottom: 2px solid #C4B5FD;
            font-weight: 700;
            padding: 14px;
            white-space: nowrap;
        }

        .table tbody td {
            padding: 14px;
            border-color: #E9D5FF;
            vertical-align: middle;
        }

        .table tbody tr:hover {
            background: #F5F3FF;
        }

        .patient-name {
            color: var(--purple-deep);
            font-weight: 700;
        }

        .patient-email {
            color: var(--muted);
            font-size: 12px;
        }

        .queue-badge {
            display: inline-flex;
            min-width: 38px;
            height: 38px;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            background: linear-gradient(
                135deg,
                #6D28D9,
                #8B5CF6
            );
            color: white;
            font-weight: 700;
        }

        .status-badge {
            display: inline-block;
            padding: 7px 11px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
        }

        .status-booked {
            background: #FEF3C7;
            color: #92400E;
        }

        .status-called {
            background: #DDD6FE;
            color: #5B21B6;
        }

        .status-serving {
            background: #DCFCE7;
            color: #166534;
        }

        .status-completed {
            background: #E5E7EB;
            color: #374151;
        }

        .status-other {
            background: #EDE9FE;
            color: var(--purple-deep);
        }

        .empty-state {
            text-align: center;
            padding: 45px 20px;
            color: var(--muted);
        }

        .empty-state i {
            display: block;
            font-size: 45px;
            color: var(--purple-soft);
            margin-bottom: 10px;
        }

        /* FOOTER */

        .footer {
            text-align: center;
            color: #80699D;
            padding: 25px 0 10px;
        }

        /* MOBILE */

        @media (max-width: 768px) {

            .sidebar {
                width: 72px;
            }

            .sidebar-brand {
                justify-content: center;
                padding: 0;
            }

            .sidebar-brand strong {
                display: none;
            }

            .sidebar-brand i {
                margin: 0;
            }

            .sidebar-title {
                display: none;
            }

            .sidebar-link {
                justify-content: center;
                padding: 13px 10px;
            }

            .sidebar-link span {
                display: none;
            }

            .main {
                margin-left: 72px;
            }

            .topbar {
                padding: 0 15px;
            }

            .topbar-subtitle {
                display: none;
            }

            .content {
                padding: 20px 15px;
            }

            .page-header {
                align-items: flex-start;
                gap: 15px;
                flex-direction: column;
            }

            .page-title {
                font-size: 22px;
            }

            .section-body {
                padding: 15px;
            }
        }

    </style>
</head>

<body>

<!-- SIDEBAR -->

<div class="sidebar">

    <div class="sidebar-brand">

        <i class="bi bi-heart-pulse-fill"></i>

        <strong>Smart Clinic</strong>

    </div>


    <div class="sidebar-content">

        <div class="sidebar-title">
            Menu Admin
        </div>

        <a href="{{ route('admin.dashboard') }}"
           class="sidebar-link">

            <i class="bi bi-grid-1x2-fill"></i>
            <span>Dashboard</span>

        </a>


        <a href="{{ route('admin.patients.index') }}"
           class="sidebar-link">

            <i class="bi bi-people-fill"></i>
            <span>Pasien</span>

        </a>


        <a href="{{ route('admin.doctors.index') }}"
           class="sidebar-link">

            <i class="bi bi-person-badge-fill"></i>
            <span>Dokter</span>

        </a>


        <a href="{{ route('admin.polyclinics.index') }}"
           class="sidebar-link">

            <i class="bi bi-hospital-fill"></i>
            <span>Poli</span>

        </a>


        <a href="{{ route('admin.doctor-schedules.index') }}"
           class="sidebar-link">

            <i class="bi bi-calendar-week-fill"></i>
            <span>Jadwal Dokter</span>

        </a>


        <a href="{{ route('admin.appointments.index') }}"
           class="sidebar-link">

            <i class="bi bi-calendar-check-fill"></i>
            <span>Booking</span>

        </a>


        <a href="{{ route('admin.queues.index') }}"
           class="sidebar-link">

            <i class="bi bi-ticket-perforated-fill"></i>
            <span>Antrean</span>

        </a>


        <a href="{{ route('admin.reports.index') }}"
           class="sidebar-link active">

            <i class="bi bi-bar-chart-fill"></i>
            <span>Laporan</span>

        </a>


        <div class="sidebar-title mt-4">
            Sistem
        </div>


        <form method="POST"
              action="{{ route('logout') }}">

            @csrf

            <button type="submit"
                    class="sidebar-link w-100 border-0"
                    style="background:transparent;">

                <i class="bi bi-box-arrow-right"></i>

                <span>Logout</span>

            </button>

        </form>

    </div>

</div>


<!-- MAIN -->

<div class="main">

    <!-- TOPBAR -->

    <div class="topbar">

        <div>

            <div class="topbar-title">
                Laporan Smart Clinic
            </div>

            <div class="topbar-subtitle">
                Ringkasan data dan aktivitas klinik
            </div>

        </div>


        <div class="topbar-right">

            <a href="{{ route('notifications.index') }}"
               class="notification-btn">

                <i class="bi bi-bell-fill"></i>

            </a>


            <div class="user-avatar">

                <i class="bi bi-person-fill"></i>

            </div>

        </div>

    </div>


    <!-- CONTENT -->

    <div class="content">

        <!-- HEADER -->

        <div class="page-header">

            <div>

                <div class="page-title">
                    <i class="bi bi-bar-chart-fill me-2"></i>
                    Laporan Smart Clinic
                </div>

                <p class="page-subtitle">
                    Ringkasan data dan aktivitas Smart Clinic.
                </p>

            </div>


            <a href="{{ route('admin.dashboard') }}"
               class="btn-purple">

                <i class="bi bi-arrow-left me-1"></i>

                Kembali

            </a>

        </div>


        <!-- STATISTIK -->

        <div class="row g-4">

            <!-- Pasien -->

            <div class="col-xl-3 col-md-6">

                <div class="stat-card">

                    <div class="stat-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>

                    <div class="stat-label">
                        Pasien Terdaftar
                    </div>

                    <div class="stat-number">
                        {{ $totalPatients }}
                    </div>

                </div>

            </div>


            <!-- Dokter -->

            <div class="col-xl-3 col-md-6">

                <div class="stat-card">

                    <div class="stat-icon">
                        <i class="bi bi-person-badge-fill"></i>
                    </div>

                    <div class="stat-label">
                        Dokter Terdaftar
                    </div>

                    <div class="stat-number">
                        {{ $totalDoctors }}
                    </div>

                </div>

            </div>


            <!-- Poli -->

            <div class="col-xl-3 col-md-6">

                <div class="stat-card">

                    <div class="stat-icon">
                        <i class="bi bi-hospital-fill"></i>
                    </div>

                    <div class="stat-label">
                        Poli Tersedia
                    </div>

                    <div class="stat-number">
                        {{ $totalPolyclinics }}
                    </div>

                </div>

            </div>


            <!-- Booking -->

            <div class="col-xl-3 col-md-6">

                <div class="stat-card">

                    <div class="stat-icon">
                        <i class="bi bi-calendar-check-fill"></i>
                    </div>

                    <div class="stat-label">
                        Total Booking
                    </div>

                    <div class="stat-number">
                        {{ $totalAppointments }}
                    </div>

                </div>

            </div>

        </div>


        <!-- STATUS ANTREAN -->

        <div class="section-card mt-4">

            <div class="section-header">

                <h5>
                    <i class="bi bi-ticket-perforated-fill me-2"></i>
                    Status Antrean
                </h5>

            </div>


            <div class="section-body">

                <div class="row g-3">

                    <!-- Menunggu -->

                    <div class="col-xl-3 col-md-6">

                        <div class="queue-card">

                            <div class="queue-label">
                                Menunggu
                            </div>

                            <div class="queue-number">
                                {{ $totalBooked }}
                            </div>

                        </div>

                    </div>


                    <!-- Dipanggil -->

                    <div class="col-xl-3 col-md-6">

                        <div class="queue-card">

                            <div class="queue-label">
                                Dipanggil
                            </div>

                            <div class="queue-number">
                                {{ $totalCalled }}
                            </div>

                        </div>

                    </div>


                    <!-- Sedang Dilayani -->

                    <div class="col-xl-3 col-md-6">

                        <div class="queue-card">

                            <div class="queue-label">
                                Sedang Dilayani
                            </div>

                            <div class="queue-number">
                                {{ $totalServing }}
                            </div>

                        </div>

                    </div>


                    <!-- Selesai -->

                    <div class="col-xl-3 col-md-6">

                        <div class="queue-card">

                            <div class="queue-label">
                                Selesai
                            </div>

                            <div class="queue-number">
                                {{ $totalCompleted }}
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- DATA BOOKING -->

        <div class="section-card mt-4">

            <div class="section-header">

                <h5>
                    <i class="bi bi-clipboard-data-fill me-2"></i>
                    Data Booking
                </h5>

            </div>


            <div class="section-body">

                <div class="table-wrapper">

                    <table class="table align-middle">

                        <thead>

                            <tr>

                                <th>No</th>

                                <th>Pasien</th>

                                <th>Dokter</th>

                                <th>Poli</th>

                                <th>Tanggal</th>

                                <th>Antrean</th>

                                <th>Status</th>

                            </tr>

                        </thead>


                        <tbody>

                            @forelse($appointments as $appointment)

                                <tr>

                                    <!-- No -->

                                    <td>
                                        {{ $loop->iteration }}
                                    </td>


                                    <!-- Pasien -->

                                    <td>

                                        <div class="patient-name">
                                            {{ $appointment->patient->name ?? '-' }}
                                        </div>

                                        <div class="patient-email">
                                            {{ $appointment->patient->email ?? '-' }}
                                        </div>

                                    </td>


                                    <!-- Dokter -->

                                    <td>

                                        {{ $appointment->doctorSchedule->doctor->name ?? '-' }}

                                    </td>


                                    <!-- Poli -->

                                    <td>

                                        {{ $appointment->doctorSchedule->doctor->polyclinic->name ?? '-' }}

                                    </td>


                                    <!-- Tanggal -->

                                    <td>

                                        {{ $appointment->appointment_date->format('d-m-Y') }}

                                    </td>


                                    <!-- Antrean -->

                                    <td>

                                        <span class="queue-badge">

                                            {{ $appointment->queue_number }}

                                        </span>

                                    </td>


                                    <!-- Status -->

                                    <td>

                                        @if($appointment->status === 'booked')

                                            <span class="status-badge status-booked">
                                                Menunggu
                                            </span>

                                        @elseif($appointment->status === 'called')

                                            <span class="status-badge status-called">
                                                Dipanggil
                                            </span>

                                        @elseif($appointment->status === 'serving')

                                            <span class="status-badge status-serving">
                                                Sedang Dilayani
                                            </span>

                                        @elseif($appointment->status === 'completed')

                                            <span class="status-badge status-completed">
                                                Selesai
                                            </span>

                                        @else

                                            <span class="status-badge status-other">
                                                {{ ucfirst($appointment->status) }}
                                            </span>

                                        @endif

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="7">

                                        <div class="empty-state">

                                            <i class="bi bi-clipboard-x"></i>

                                            <strong>
                                                Belum ada data booking
                                            </strong>

                                            <div>
                                                Data booking akan muncul di sini.
                                            </div>

                                        </div>

                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>


        <!-- FOOTER -->

        <div class="footer">

            <small>
                Smart Clinic — Laporan Administrasi
            </small>

        </div>

    </div>

</div>

</body>

</html>