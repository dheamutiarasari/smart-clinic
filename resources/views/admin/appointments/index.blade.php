<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kelola Booking - Smart Clinic</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
          rel="stylesheet">

    <style>
        :root {
            --purple-dark: #3B0764;
            --purple-deep: #4C1D95;
            --purple: #7C3AED;
            --purple-light: #8B5CF6;
            --purple-soft: #A78BFA;
            --lavender: #E9D5FF;
            --background: #F3E8FF;
            --text: #2E1065;
            --muted: #7E6A9B;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: var(--background);
            color: var(--text);
            font-family: "Segoe UI", Arial, sans-serif;
        }

        /* SIDEBAR */

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100vh;

            background: linear-gradient(
                180deg,
                var(--purple-dark),
                var(--purple-deep)
            );

            color: white;

            box-shadow: 5px 0 25px rgba(59, 7, 100, .18);

            z-index: 1000;
        }

        .sidebar-brand {
            height: 75px;

            display: flex;
            align-items: center;

            padding: 0 25px;

            color: white;

            text-decoration: none;

            font-size: 20px;
            font-weight: 700;

            border-bottom: 1px solid rgba(255,255,255,.12);
        }

        .sidebar-brand i {
            font-size: 27px;
            margin-right: 10px;
        }

        .sidebar-content {
            padding: 22px 15px;
        }

        .sidebar-title {
            color: #C4B5FD;

            font-size: 10px;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: .8px;

            margin: 15px 10px 10px;
        }

        .sidebar-link {
            display: flex;
            align-items: center;

            padding: 12px 15px;

            margin-bottom: 6px;

            border-radius: 12px;

            color: #E9D5FF;

            text-decoration: none;

            transition: .2s;
        }

        .sidebar-link i {
            width: 25px;

            font-size: 18px;

            margin-right: 10px;
        }

        .sidebar-link:hover {
            background: rgba(255,255,255,.12);
            color: white;
        }

        .sidebar-link.active {
            background: linear-gradient(
                135deg,
                var(--purple-soft),
                var(--purple)
            );

            color: white;

            box-shadow: 0 8px 20px rgba(124,58,237,.3);
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

            box-shadow: 0 5px 20px rgba(76,29,149,.18);
        }

        .topbar-title {
            margin: 0;

            font-size: 18px;

            font-weight: 700;
        }

        .topbar-subtitle {
            font-size: 13px;

            color: var(--lavender);
        }

        .notification-btn {
            width: 42px;
            height: 42px;

            border-radius: 12px;

            border: 1px solid rgba(255,255,255,.2);

            background: rgba(255,255,255,.14);

            color: white;

            display: flex;
            align-items: center;
            justify-content: center;

            text-decoration: none;
        }

        .notification-btn:hover {
            background: rgba(255,255,255,.23);
            color: white;
        }

        .user-avatar {
            width: 42px;
            height: 42px;

            border-radius: 50%;

            background: rgba(255,255,255,.18);

            color: white;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* CONTENT */

        .content {
            padding: 30px;
        }

        .page-header {
            background: linear-gradient(
                135deg,
                #4C1D95,
                #6D28D9,
                #8B5CF6
            );

            border-radius: 22px;

            padding: 28px 30px;

            color: white;

            margin-bottom: 25px;

            box-shadow: 0 12px 30px rgba(76,29,149,.2);
        }

        .page-icon {
            width: 62px;
            height: 62px;

            border-radius: 18px;

            background: rgba(255,255,255,.15);

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 28px;
        }

        .page-header h2 {
            font-weight: 700;
        }

        .page-header p {
            color: var(--lavender);
        }

        /* INFO CARDS */

        .stat-card {
            height: 100%;

            background: linear-gradient(
                135deg,
                #FFFFFF,
                #F5F3FF
            );

            border: 1px solid #DDD6FE;

            border-radius: 18px;

            padding: 20px;

            box-shadow: 0 8px 20px rgba(76,29,149,.06);

            transition: .2s;
        }

        .stat-card:hover {
            transform: translateY(-3px);
        }

        .stat-icon {
            width: 48px;
            height: 48px;

            border-radius: 14px;

            background: linear-gradient(
                135deg,
                #E9D5FF,
                #DDD6FE
            );

            color: var(--purple);

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 22px;
        }

        .stat-label {
            font-size: 12px;
            color: var(--muted);
        }

        .stat-value {
            font-size: 25px;

            font-weight: 700;

            color: var(--purple-deep);
        }

        /* TABLE */

        .table-card {
            margin-top: 25px;

            background: linear-gradient(
                135deg,
                #FFFFFF,
                #F5F3FF
            );

            border: 1px solid #DDD6FE;

            border-radius: 20px;

            overflow: hidden;

            box-shadow: 0 10px 25px rgba(76,29,149,.07);
        }

        .table-header {
            padding: 20px 25px;

            border-bottom: 1px solid #E9D5FF;
        }

        .table-header h5 {
            margin: 0;

            color: var(--purple-deep);

            font-weight: 700;
        }

        .table-header p {
            margin: 4px 0 0;

            color: var(--muted);

            font-size: 13px;
        }

        .table-wrapper {
            padding: 20px;
        }

        .table {
            margin-bottom: 0;

            vertical-align: middle;
        }

        .table thead th {
            background: #E9D5FF;

            color: var(--purple-deep);

            border: none;

            font-size: 12px;

            text-transform: uppercase;

            white-space: nowrap;

            padding: 14px 12px;
        }

        .table tbody td {
            border-color: #E9D5FF;

            padding: 15px 12px;

            color: #4C1D95;
        }

        .table tbody tr {
            transition: .2s;
        }

        .table tbody tr:hover {
            background: #F5F3FF;
        }

        .patient-name {
            font-weight: 700;

            color: var(--purple-deep);
        }

        .patient-email {
            font-size: 12px;

            color: var(--muted);
        }

        .queue-number {
            display: inline-flex;

            width: 42px;
            height: 42px;

            align-items: center;
            justify-content: center;

            border-radius: 12px;

            background: linear-gradient(
                135deg,
                #6D28D9,
                #8B5CF6
            );

            color: white;

            font-weight: 700;

            box-shadow: 0 5px 12px rgba(124,58,237,.2);
        }

        /* STATUS */

        .status-badge {
            display: inline-flex;

            align-items: center;

            gap: 5px;

            padding: 7px 11px;

            border-radius: 10px;

            font-size: 12px;

            font-weight: 600;

            white-space: nowrap;
        }

        .status-waiting {
            background: #FEF3C7;
            color: #92400E;
        }

        .status-called {
            background: #DDD6FE;
            color: #5B21B6;
        }

        .status-serving {
            background: #D1FAE5;
            color: #047857;
        }

        .status-completed {
            background: #E5E7EB;
            color: #4B5563;
        }

        .status-other {
            background: #EDE9FE;
            color: #4C1D95;
        }

        /* EMPTY */

        .empty-box {
            text-align: center;

            padding: 60px 20px;
        }

        .empty-icon {
            width: 75px;
            height: 75px;

            margin: 0 auto;

            border-radius: 22px;

            background: #E9D5FF;

            color: var(--purple);

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 34px;
        }

        .empty-box h5 {
            margin-top: 18px;

            color: var(--purple-deep);

            font-weight: 700;
        }

        .empty-box p {
            color: var(--muted);
        }

        .btn-purple {
            background: linear-gradient(
                135deg,
                #6D28D9,
                #8B5CF6
            );

            border: none;

            color: white;

            border-radius: 11px;

            padding: 10px 18px;
        }

        .btn-purple:hover {
            color: white;
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

            .sidebar-brand span,
            .sidebar-link span,
            .sidebar-title {
                display: none;
            }

            .sidebar-brand i {
                margin-right: 0;
            }

            .sidebar-link {
                justify-content: center;
                padding: 12px;
            }

            .sidebar-link i {
                margin-right: 0;
            }

            .main {
                margin-left: 72px;
            }

            .topbar {
                padding: 0 15px;
            }

            .content {
                padding: 20px 15px;
            }

            .page-header {
                padding: 24px;
            }

            .table-wrapper {
                padding: 12px;
            }
        }
    </style>
</head>

<body>

<!-- SIDEBAR -->

<aside class="sidebar">

    <a href="{{ route('admin.dashboard') }}"
       class="sidebar-brand">

        <i class="bi bi-hospital"></i>

        <span>
            Smart Clinic
        </span>

    </a>

    <div class="sidebar-content">

        <div class="sidebar-title">
            Menu Utama
        </div>

        <a href="{{ route('admin.dashboard') }}"
           class="sidebar-link">

            <i class="bi bi-grid-1x2-fill"></i>

            <span>
                Dashboard
            </span>

        </a>

        <a href="{{ route('admin.patients.index') }}"
           class="sidebar-link">

            <i class="bi bi-people-fill"></i>

            <span>
                Kelola Pasien
            </span>

        </a>

        <a href="{{ route('admin.doctors.index') }}"
           class="sidebar-link">

            <i class="bi bi-person-badge-fill"></i>

            <span>
                Kelola Dokter
            </span>

        </a>

        <a href="{{ route('admin.polyclinics.index') }}"
           class="sidebar-link">

            <i class="bi bi-hospital"></i>

            <span>
                Kelola Poli
            </span>

        </a>

        <a href="{{ route('admin.doctor-schedules.index') }}"
           class="sidebar-link">

            <i class="bi bi-calendar-week"></i>

            <span>
                Jadwal Dokter
            </span>

        </a>

        <a href="{{ route('admin.appointments.index') }}"
           class="sidebar-link active">

            <i class="bi bi-calendar-check-fill"></i>

            <span>
                Booking
            </span>

        </a>

        <a href="{{ route('admin.queues.index') }}"
           class="sidebar-link">

            <i class="bi bi-ticket-perforated-fill"></i>

            <span>
                Antrean
            </span>

        </a>

        <a href="{{ route('admin.reports.index') }}"
           class="sidebar-link">

            <i class="bi bi-bar-chart-fill"></i>

            <span>
                Laporan
            </span>

        </a>

        <div class="sidebar-title">
            Sistem
        </div>

        <form method="POST" action="{{ route('logout') }}">

            @csrf

            <button type="submit"
                    class="sidebar-link w-100 border-0 bg-transparent text-start">

                <i class="bi bi-box-arrow-right"></i>

                <span>
                    Logout
                </span>

            </button>

        </form>

    </div>

</aside>


<!-- MAIN -->

<main class="main">

    <!-- TOPBAR -->

    <header class="topbar">

        <div>

            <h5 class="topbar-title">
                Kelola Booking
            </h5>

            <div class="topbar-subtitle">
                Pantau seluruh booking konsultasi pasien
            </div>

        </div>

        <div class="d-flex align-items-center gap-3">

            <a href="{{ route('notifications.index') }}"
               class="notification-btn">

                <i class="bi bi-bell"></i>

            </a>

            <div class="user-avatar">

                <i class="bi bi-person-fill"></i>

            </div>

            <div class="d-none d-md-block">

                <div class="fw-semibold">
                    {{ auth()->user()->name }}
                </div>

                <small style="color:#E9D5FF;">
                    Administrator
                </small>

            </div>

        </div>

    </header>


    <!-- CONTENT -->

    <section class="content">

        <!-- PAGE HEADER -->

        <div class="page-header">

            <div class="d-flex align-items-center">

                <div class="page-icon">

                    <i class="bi bi-calendar-check"></i>

                </div>

                <div class="ms-3">

                    <h2 class="mb-1">
                        Kelola Booking
                    </h2>

                    <p class="mb-0">
                        Pantau dan lihat seluruh booking konsultasi pasien.
                    </p>

                </div>

            </div>

        </div>


        <!-- STATISTICS -->

        <div class="row g-4">

            <div class="col-md-4">

                <div class="stat-card">

                    <div class="d-flex align-items-center">

                        <div class="stat-icon">

                            <i class="bi bi-calendar-check"></i>

                        </div>

                        <div class="ms-3">

                            <div class="stat-label">
                                TOTAL BOOKING
                            </div>

                            <div class="stat-value">
                                {{ $appointments->count() }}
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <div class="col-md-4">

                <div class="stat-card">

                    <div class="d-flex align-items-center">

                        <div class="stat-icon">

                            <i class="bi bi-hourglass-split"></i>

                        </div>

                        <div class="ms-3">

                            <div class="stat-label">
                                MENUNGGU
                            </div>

                            <div class="stat-value">
                                {{ $appointments->where('status', 'booked')->count() }}
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <div class="col-md-4">

                <div class="stat-card">

                    <div class="d-flex align-items-center">

                        <div class="stat-icon">

                            <i class="bi bi-check-circle"></i>

                        </div>

                        <div class="ms-3">

                            <div class="stat-label">
                                SELESAI
                            </div>

                            <div class="stat-value">
                                {{ $appointments->where('status', 'completed')->count() }}
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- SUCCESS -->

        @if(session('success'))

            <div class="alert alert-success border-0 shadow-sm mt-4">

                <i class="bi bi-check-circle-fill me-2"></i>

                {{ session('success') }}

            </div>

        @endif


        <!-- BOOKING TABLE -->

        <div class="table-card">

            <div class="table-header">

                <h5>

                    <i class="bi bi-list-ul me-2"></i>

                    Daftar Booking Pasien

                </h5>

                <p>
                    Informasi booking konsultasi yang terdaftar di Smart Clinic.
                </p>

            </div>

            <div class="table-wrapper">

                <div class="table-responsive">

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

                                    <td>
                                        <strong>
                                            {{ $loop->iteration }}
                                        </strong>
                                    </td>

                                    <td>

                                        <div class="patient-name">
                                            {{ $appointment->patient->name ?? '-' }}
                                        </div>

                                        <div class="patient-email">
                                            {{ $appointment->patient->email ?? '-' }}
                                        </div>

                                    </td>

                                    <td>

                                        <i class="bi bi-person-badge me-1"></i>

                                        {{ $appointment->doctorSchedule->doctor->name ?? '-' }}

                                    </td>

                                    <td>

                                        <i class="bi bi-hospital me-1"></i>

                                        {{ $appointment->doctorSchedule->doctor->polyclinic->name ?? '-' }}

                                    </td>

                                    <td>

                                        <i class="bi bi-calendar3 me-1"></i>

                                        {{ $appointment->appointment_date->format('d-m-Y') }}

                                    </td>

                                    <td>

                                        <span class="queue-number">
                                            {{ $appointment->queue_number }}
                                        </span>

                                    </td>

                                    <td>

                                        @if($appointment->status === 'booked')

                                            <span class="status-badge status-waiting">

                                                <i class="bi bi-hourglass-split"></i>

                                                Menunggu

                                            </span>

                                        @elseif($appointment->status === 'called')

                                            <span class="status-badge status-called">

                                                <i class="bi bi-megaphone"></i>

                                                Dipanggil

                                            </span>

                                        @elseif($appointment->status === 'serving')

                                            <span class="status-badge status-serving">

                                                <i class="bi bi-person-check"></i>

                                                Sedang Dilayani

                                            </span>

                                        @elseif($appointment->status === 'completed')

                                            <span class="status-badge status-completed">

                                                <i class="bi bi-check-circle"></i>

                                                Selesai

                                            </span>

                                        @else

                                            <span class="status-badge status-other">

                                                <i class="bi bi-info-circle"></i>

                                                {{ ucfirst($appointment->status) }}

                                            </span>

                                        @endif

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="7">

                                        <div class="empty-box">

                                            <div class="empty-icon">

                                                <i class="bi bi-calendar-x"></i>

                                            </div>

                                            <h5>
                                                Belum Ada Booking
                                            </h5>

                                            <p>
                                                Saat ini belum ada booking konsultasi pasien.
                                            </p>

                                            <a href="{{ route('admin.dashboard') }}"
                                               class="btn btn-purple">

                                                <i class="bi bi-arrow-left me-1"></i>

                                                Kembali ke Dashboard

                                            </a>

                                        </div>

                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </section>

</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>