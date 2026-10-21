<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kelola Pasien - Smart Clinic</title>

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

        /* =========================
           SIDEBAR
        ========================= */

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

            box-shadow: 5px 0 25px rgba(59, 7, 100, .25);

            z-index: 1000;

            overflow-y: auto;
        }

        .sidebar-brand {
            height: 75px;

            display: flex;
            align-items: center;

            padding: 0 25px;

            border-bottom: 1px solid rgba(255,255,255,.08);
        }

        .brand-icon {
            width: 42px;
            height: 42px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 13px;

            background: rgba(255,255,255,.15);

            margin-right: 12px;

            font-size: 21px;
        }

        .brand-text {
            font-size: 18px;
            font-weight: bold;
        }

        .brand-subtitle {
            display: block;

            font-size: 10px;

            color: #C4B5FD;

            margin-top: 2px;
        }

        .sidebar-content {
            padding: 22px 15px;
        }

        .sidebar-title {
            color: #C4B5FD;

            font-size: 10px;

            font-weight: bold;

            text-transform: uppercase;

            letter-spacing: 1px;

            margin: 18px 10px 10px;
        }

        .sidebar-link {
            display: flex;
            align-items: center;

            gap: 12px;

            color: #F5F3FF;

            text-decoration: none;

            padding: 12px 15px;

            margin-bottom: 6px;

            border-radius: 12px;

            transition: .2s;
        }

        .sidebar-link i {
            width: 22px;
            font-size: 18px;
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

            box-shadow:
                0 7px 18px rgba(124,58,237,.30);
        }

        .logout-btn {
            width: 100%;

            border: 1px solid rgba(255,255,255,.10);

            background: rgba(255,255,255,.08);

            color: white;

            padding: 12px 15px;

            border-radius: 12px;

            margin-top: 12px;

            text-align: left;

            transition: .2s;
        }

        .logout-btn:hover {
            background: rgba(255,255,255,.16);
        }

        .logout-btn i {
            margin-right: 10px;
        }


        /* =========================
           MAIN
        ========================= */

        .main {
            margin-left: 250px;
            min-height: 100vh;
        }


        /* =========================
           TOPBAR
        ========================= */

        .topbar {
            height: 75px;

            padding: 0 30px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            color: white;

            background: linear-gradient(
                90deg,
                #6D28D9,
                #7C3AED,
                #8B5CF6
            );

            box-shadow:
                0 5px 20px rgba(76,29,149,.20);
        }

        .topbar-title {
            font-size: 18px;
            font-weight: bold;
        }

        .topbar-subtitle {
            font-size: 12px;
            color: #E9D5FF;
            margin-top: 2px;
        }

        .admin-profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .admin-avatar {
            width: 42px;
            height: 42px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background: rgba(255,255,255,.18);

            font-size: 19px;
        }

        .admin-name {
            font-size: 14px;
            font-weight: 600;
        }

        .admin-role {
            font-size: 10px;
            color: #E9D5FF;
        }


        /* =========================
           CONTENT
        ========================= */

        .content {
            padding: 30px;
        }


        /* =========================
           PAGE HEADER
        ========================= */

        .page-header {
            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 20px;

            margin-bottom: 25px;
        }

        .page-title {
            color: var(--purple-deep);

            font-size: 25px;

            font-weight: bold;

            margin: 0;
        }

        .page-subtitle {
            color: var(--muted);

            font-size: 13px;

            margin-top: 5px;
        }

        .page-title i {
            color: var(--purple);
            margin-right: 7px;
        }

        .btn-back {
            display: inline-flex;

            align-items: center;

            gap: 7px;

            background: linear-gradient(
                135deg,
                #6D28D9,
                #8B5CF6
            );

            color: white;

            border: none;

            padding: 10px 16px;

            border-radius: 11px;

            text-decoration: none;

            font-size: 13px;

            font-weight: 600;

            transition: .2s;
        }

        .btn-back:hover {
            color: white;

            transform: translateY(-2px);

            box-shadow:
                0 7px 15px rgba(124,58,237,.25);
        }


        /* =========================
           SUCCESS
        ========================= */

        .success-alert {
            border: 1px solid #C4B5FD;

            border-left: 5px solid var(--purple);

            background: linear-gradient(
                135deg,
                #E9D5FF,
                #F5F3FF
            );

            color: var(--purple-deep);

            border-radius: 13px;

            padding: 14px 18px;
        }


        /* =========================
           PATIENT CARD
        ========================= */

        .patient-card {
            background: linear-gradient(
                135deg,
                #FFFFFF,
                #F5F3FF
            );

            border: 1px solid #DDD6FE;

            border-radius: 20px;

            overflow: hidden;

            box-shadow:
                0 8px 25px rgba(76,29,149,.12);
        }

        .card-header-custom {
            padding: 20px 24px;

            background: linear-gradient(
                135deg,
                var(--purple-deep),
                var(--purple),
                var(--purple-light)
            );

            color: white;
        }

        .card-header-custom h5 {
            margin: 0;

            font-weight: bold;

            font-size: 17px;
        }

        .card-header-custom p {
            margin: 5px 0 0;

            color: #E9D5FF;

            font-size: 12px;
        }

        .table-container {
            padding: 20px;
        }


        /* =========================
           TABLE
        ========================= */

        .patient-table {
            margin: 0;

            vertical-align: middle;
        }

        .patient-table thead th {
            background: #E9D5FF;

            color: var(--purple-deep);

            border: none;

            padding: 14px;

            font-size: 12px;

            font-weight: bold;

            white-space: nowrap;
        }

        .patient-table tbody td {
            padding: 15px 14px;

            border-color: #EDE9FE;

            color: var(--purple-deep);

            font-size: 13px;
        }

        .patient-table tbody tr {
            transition: .2s;
        }

        .patient-table tbody tr:hover {
            background: #FAF5FF;
        }


        /* =========================
           NUMBER
        ========================= */

        .number-box {
            width: 38px;
            height: 38px;

            display: inline-flex;

            align-items: center;
            justify-content: center;

            border-radius: 11px;

            background: linear-gradient(
                135deg,
                #E9D5FF,
                #DDD6FE
            );

            color: var(--purple);

            font-weight: bold;
        }


        /* =========================
           PATIENT NAME
        ========================= */

        .patient-name {
            display: flex;

            align-items: center;

            gap: 10px;

            font-weight: 600;

            color: var(--purple-deep);
        }

        .patient-icon {
            width: 38px;
            height: 38px;

            display: inline-flex;

            align-items: center;
            justify-content: center;

            border-radius: 11px;

            background: linear-gradient(
                135deg,
                #E9D5FF,
                #C4B5FD
            );

            color: var(--purple-deep);
        }


        /* =========================
           INFO BADGES
        ========================= */

        .email-box,
        .date-box,
        .role-badge {
            display: inline-flex;

            align-items: center;

            gap: 7px;

            padding: 7px 10px;

            border-radius: 9px;

            background: #F3E8FF;

            color: var(--purple);

            font-size: 12px;

            white-space: nowrap;
        }

        .role-badge {
            background: #E9D5FF;

            color: var(--purple-deep);

            font-weight: 600;
        }


        /* =========================
           EMPTY
        ========================= */

        .empty-state {
            padding: 55px 20px !important;

            text-align: center;
        }

        .empty-icon {
            width: 65px;
            height: 65px;

            display: flex;

            align-items: center;
            justify-content: center;

            margin: 0 auto 15px;

            border-radius: 18px;

            background: linear-gradient(
                135deg,
                #E9D5FF,
                #DDD6FE
            );

            color: var(--purple);

            font-size: 28px;
        }

        .empty-state strong {
            display: block;

            color: var(--purple-deep);

            margin-bottom: 5px;
        }

        .empty-state span {
            color: var(--muted);

            font-size: 13px;
        }


        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 700px) {

            .sidebar {
                width: 72px;
                padding: 0 10px;
            }

            .sidebar-brand {
                justify-content: center;
                padding: 0;
            }

            .brand-text,
            .brand-subtitle,
            .sidebar-title,
            .sidebar-link span {
                display: none;
            }

            .brand-icon {
                margin: 0;
            }

            .sidebar-content {
                padding: 18px 0;
            }

            .sidebar-link {
                justify-content: center;
                padding: 12px;
            }

            .logout-btn {
                text-align: center;
                padding: 12px;
            }

            .logout-btn span {
                display: none;
            }

            .logout-btn i {
                margin: 0;
            }

            .main {
                margin-left: 72px;
            }

            .topbar {
                padding: 0 15px;
            }

            .topbar-subtitle,
            .admin-name,
            .admin-role {
                display: none;
            }

            .content {
                padding: 20px 15px;
            }

            .page-header {
                align-items: flex-start;
                flex-direction: column;
            }

            .page-title {
                font-size: 23px;
            }

            .btn-back {
                width: 100%;
                justify-content: center;
            }

            .table-container {
                padding: 12px;
            }

        }

    </style>

</head>

<body>


<!-- =========================
     SIDEBAR
========================= -->

<aside class="sidebar">

    <div class="sidebar-brand">

        <div class="brand-icon">
            <i class="bi bi-hospital-fill"></i>
        </div>

        <div>

            <div class="brand-text">
                Smart Clinic
            </div>

            <span class="brand-subtitle">
                Panel Administrator
            </span>

        </div>

    </div>


    <div class="sidebar-content">

        <div class="sidebar-title">
            Menu Utama
        </div>


        <a href="{{ route('admin.dashboard') }}"
           class="sidebar-link">

            <i class="bi bi-grid-1x2-fill"></i>

            <span>Dashboard</span>

        </a>


        <a href="{{ route('admin.patients.index') }}"
           class="sidebar-link active">

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
           class="sidebar-link">

            <i class="bi bi-bar-chart-fill"></i>

            <span>Laporan</span>

        </a>


        <div class="sidebar-title">
            Akun
        </div>


        <form method="POST"
              action="{{ route('logout') }}">

            @csrf

            <button type="submit"
                    class="logout-btn">

                <i class="bi bi-box-arrow-right"></i>

                <span>Keluar</span>

            </button>

        </form>

    </div>

</aside>


<!-- =========================
     MAIN
========================= -->

<main class="main">


    <!-- TOPBAR -->

    <div class="topbar">

        <div>

            <div class="topbar-title">
                Kelola Pasien
            </div>

            <div class="topbar-subtitle">
                Data pasien Smart Clinic
            </div>

        </div>


        <div class="admin-profile">

            <div class="admin-avatar">
                <i class="bi bi-person-fill"></i>
            </div>

            <div>

                <div class="admin-name">
                    {{ auth()->user()->name }}
                </div>

                <div class="admin-role">
                    Administrator
                </div>

            </div>

        </div>

    </div>


    <!-- CONTENT -->

    <div class="content">


        <!-- PAGE HEADER -->

        <div class="page-header">

            <div>

                <h1 class="page-title">

                    <i class="bi bi-people-fill"></i>

                    Kelola Pasien

                </h1>

                <div class="page-subtitle">
                    Daftar pasien yang terdaftar di Smart Clinic
                </div>

            </div>


            <a href="{{ route('admin.dashboard') }}"
               class="btn-back">

                <i class="bi bi-arrow-left"></i>

                Kembali

            </a>

        </div>


        <!-- SUCCESS -->

        @if(session('success'))

            <div class="alert success-alert mb-4">

                <i class="bi bi-check-circle-fill me-2"></i>

                {{ session('success') }}

            </div>

        @endif


        <!-- PATIENT CARD -->

        <div class="patient-card">


            <div class="card-header-custom">

                <h5>

                    <i class="bi bi-person-vcard-fill me-2"></i>

                    Daftar Pasien

                </h5>

                <p>
                    Informasi pasien yang terdaftar di Smart Clinic
                </p>

            </div>


            <div class="table-container">

                <div class="table-responsive">

                    <table class="table patient-table">

                        <thead>

                            <tr>

                                <th width="70">
                                    No
                                </th>

                                <th>
                                    Nama Pasien
                                </th>

                                <th>
                                    Email
                                </th>

                                <th>
                                    Role
                                </th>

                                <th>
                                    Tanggal Terdaftar
                                </th>

                            </tr>

                        </thead>


                        <tbody>


                            @forelse($patients as $patient)

                                <tr>

                                    <td>

                                        <span class="number-box">

                                            {{ $loop->iteration }}

                                        </span>

                                    </td>


                                    <td>

                                        <div class="patient-name">

                                            <span class="patient-icon">

                                                <i class="bi bi-person-fill"></i>

                                            </span>

                                            {{ $patient->name }}

                                        </div>

                                    </td>


                                    <td>

                                        <span class="email-box">

                                            <i class="bi bi-envelope-fill"></i>

                                            {{ $patient->email }}

                                        </span>

                                    </td>


                                    <td>

                                        <span class="role-badge">

                                            <i class="bi bi-shield-check"></i>

                                            {{ ucfirst($patient->role) }}

                                        </span>

                                    </td>


                                    <td>

                                        <span class="date-box">

                                            <i class="bi bi-calendar3"></i>

                                            {{ $patient->created_at->format('d-m-Y H:i') }}

                                        </span>

                                    </td>

                                </tr>


                            @empty


                                <tr>

                                    <td colspan="5"
                                        class="empty-state">

                                        <div class="empty-icon">

                                            <i class="bi bi-person-x"></i>

                                        </div>

                                        <strong>
                                            Belum ada pasien
                                        </strong>

                                        <span>
                                            Belum ada pasien yang terdaftar di Smart Clinic.
                                        </span>

                                    </td>

                                </tr>


                            @endforelse


                        </tbody>

                    </table>

                </div>

            </div>

        </div>


    </div>

</main>


</body>
</html>