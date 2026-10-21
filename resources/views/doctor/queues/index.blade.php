<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Antrean Pasien - Smart Clinic</title>

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

        /* SIDEBAR */

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 250px;
            height: 100vh;
            overflow-y: auto;
            background: linear-gradient(
                180deg,
                var(--purple-dark),
                var(--purple-deep)
            );
            color: white;
            box-shadow: 5px 0 20px rgba(76,29,149,.25);
            z-index: 1000;
        }

        .sidebar-brand {
            height: 75px;
            padding: 0 25px;
            display: flex;
            align-items: center;
            border-bottom: 1px solid rgba(255,255,255,.08);
        }

        .brand-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            background: rgba(255,255,255,.15);
            margin-right: 10px;
            font-size: 20px;
        }

        .brand-text {
            font-size: 18px;
            font-weight: bold;
        }

        .brand-text small {
            display: block;
            font-size: 10px;
            font-weight: normal;
            color: #DDD6FE;
            margin-top: 2px;
        }

        .sidebar-content {
            padding: 22px 15px;
        }

        .sidebar-title {
            font-size: 10px;
            font-weight: bold;
            color: #C4B5FD;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin: 0 10px 10px;
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
            box-shadow: 0 7px 18px rgba(124,58,237,.25);
        }

        .logout-form {
            margin-top: 25px;
        }

        .logout-btn {
            width: 100%;
            border: none;
            background: rgba(255,255,255,.10);
            color: #E9D5FF;
            padding: 12px 15px;
            border-radius: 12px;
            text-align: left;
            transition: .2s;
        }

        .logout-btn:hover {
            background: rgba(255,255,255,.18);
            color: white;
        }

        .logout-btn i {
            width: 22px;
            margin-right: 12px;
        }

        /* MAIN */

        .main {
            margin-left: 250px;
            min-height: 100vh;
        }

        /* TOPBAR */

        .topbar {
            min-height: 75px;
            padding: 12px 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            background: linear-gradient(
                90deg,
                #6D28D9,
                #7C3AED,
                #8B5CF6
            );
            color: white;
            box-shadow: 0 5px 20px rgba(76,29,149,.20);
        }

        .topbar-title {
            font-size: 18px;
            font-weight: bold;
        }

        .topbar-subtitle {
            color: #E9D5FF;
            font-size: 12px;
            margin-top: 2px;
        }

        .doctor-profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .doctor-avatar {
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(255,255,255,.18);
            font-size: 20px;
        }

        .doctor-name {
            font-size: 14px;
            font-weight: 600;
        }

        /* CONTENT */

        .content {
            padding: 30px;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 22px;
        }

        .page-title {
            font-size: 26px;
            font-weight: bold;
            color: var(--purple-deep);
            margin-bottom: 5px;
        }

        .page-subtitle {
            color: var(--muted);
            font-size: 14px;
        }

        .queue-icon {
            width: 58px;
            height: 58px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            border-radius: 17px;
            background: linear-gradient(
                135deg,
                var(--lavender),
                #C4B5FD
            );
            color: var(--purple);
            font-size: 26px;
        }

        /* ALERT */

        .success-alert {
            border: none;
            border-radius: 15px;
            background: linear-gradient(
                135deg,
                #DCFCE7,
                #F0FDF4
            );
            color: #166534;
            box-shadow: 0 5px 15px rgba(22,101,52,.08);
            padding: 15px 18px;
        }

        /* QUEUE CARD */

        .queue-card {
            background: linear-gradient(
                135deg,
                #FFFFFF,
                #F5F3FF
            );
            border: 1px solid #DDD6FE;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 8px 22px rgba(76,29,149,.10);
            overflow: hidden;
        }

        /* TABLE */

        .queue-table {
            margin: 0;
            border-collapse: separate;
            border-spacing: 0 8px;
        }

        .queue-table thead th {
            border: none;
            color: var(--muted);
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .4px;
            padding: 12px 15px;
            background: #F5F3FF;
        }

        .queue-table thead th:first-child {
            border-radius: 10px 0 0 10px;
        }

        .queue-table thead th:last-child {
            border-radius: 0 10px 10px 0;
        }

        .queue-table tbody tr {
            background: white;
            box-shadow: 0 3px 10px rgba(76,29,149,.06);
        }

        .queue-table tbody td {
            border: none;
            padding: 15px;
            vertical-align: middle;
            color: var(--text);
            font-size: 14px;
        }

        .queue-table tbody tr td:first-child {
            border-radius: 12px 0 0 12px;
        }

        .queue-table tbody tr td:last-child {
            border-radius: 0 12px 12px 0;
        }

        .queue-number {
            width: 42px;
            height: 42px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 13px;
            background: linear-gradient(
                135deg,
                var(--purple),
                var(--purple-light)
            );
            color: white;
            font-size: 16px;
            font-weight: bold;
            box-shadow: 0 5px 12px rgba(124,58,237,.20);
        }

        .patient-name {
            font-weight: 600;
            color: var(--purple-deep);
        }

        .doctor-text {
            color: var(--muted);
        }

        .date-text {
            font-size: 13px;
            color: var(--muted);
        }

        /* STATUS */

        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 7px 11px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
        }

        .status-waiting {
            background: #FEF3C7;
            color: #92400E;
        }

        .status-called {
            background: #E9D5FF;
            color: var(--purple-deep);
        }

        .status-serving {
            background: #DCFCE7;
            color: #166534;
        }

        /* ACTION */

        .action-group {
            display: flex;
            gap: 7px;
            flex-wrap: wrap;
        }

        .btn-action {
            border: none;
            border-radius: 10px;
            padding: 8px 12px;
            font-size: 12px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: .2s;
        }

        .btn-action:hover {
            transform: translateY(-1px);
        }

        .btn-call {
            background: linear-gradient(
                90deg,
                #6D28D9,
                #8B5CF6
            );
            color: white;
        }

        .btn-call:hover {
            color: white;
            box-shadow: 0 5px 12px rgba(124,58,237,.25);
        }

        .btn-serve {
            background: #DCFCE7;
            color: #166534;
        }

        .btn-complete {
            background: #E5E7EB;
            color: #4B5563;
        }

        /* EMPTY STATE */

        .empty-state {
            text-align: center;
            padding: 55px 20px;
        }

        .empty-icon {
            width: 75px;
            height: 75px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 18px;
            border-radius: 22px;
            background: var(--lavender);
            color: var(--purple);
            font-size: 32px;
        }

        .empty-state h4 {
            color: var(--purple-deep);
            font-weight: bold;
            margin-bottom: 7px;
        }

        .empty-state p {
            color: var(--muted);
            font-size: 14px;
        }

        /* BACK BUTTON */

        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            margin-top: 20px;
            padding: 10px 16px;
            border-radius: 11px;
            background: linear-gradient(
                90deg,
                #6D28D9,
                #8B5CF6
            );
            color: white;
            text-decoration: none;
            font-size: 13px;
            transition: .2s;
        }

        .back-btn:hover {
            color: white;
            transform: translateY(-1px);
            box-shadow: 0 6px 15px rgba(124,58,237,.25);
        }

        /* MOBILE */

        @media (max-width: 900px) {
            .queue-card {
                overflow-x: auto;
            }

            .queue-table {
                min-width: 850px;
            }
        }

        @media (max-width: 700px) {
            .sidebar {
                width: 72px;
            }

            .sidebar-brand {
                justify-content: center;
                padding: 0;
            }

            .brand-text {
                display: none;
            }

            .brand-icon {
                margin: 0;
            }

            .sidebar-content {
                padding: 22px 10px;
            }

            .sidebar-title,
            .sidebar-link span {
                display: none;
            }

            .sidebar-link {
                justify-content: center;
                padding: 12px;
            }

            .sidebar-link i {
                width: auto;
            }

            .logout-btn {
                text-align: center;
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
                padding: 12px 15px;
            }

            .topbar-title {
                font-size: 16px;
            }

            .topbar-subtitle,
            .doctor-name {
                display: none;
            }

            .content {
                padding: 20px 15px;
            }

            .page-title {
                font-size: 22px;
            }

            .queue-icon {
                width: 48px;
                height: 48px;
                font-size: 21px;
            }
        }
    </style>
</head>

<body>

<!-- SIDEBAR -->

<aside class="sidebar">

    <div class="sidebar-brand">
        <div class="brand-icon">
            <i class="bi bi-heart-pulse-fill"></i>
        </div>

        <div class="brand-text">
            Smart Clinic
            <small>Panel Dokter</small>
        </div>
    </div>

    <div class="sidebar-content">

        <div class="sidebar-title">
            Menu Utama
        </div>

        <!-- DASHBOARD -->
        <a href="{{ route('doctor.dashboard') }}"
           class="sidebar-link">
            <i class="bi bi-grid-1x2-fill"></i>
            <span>Dashboard</span>
        </a>

        <!-- ANTREAN -->
        <a href="{{ route('doctor.queues.index') }}"
           class="sidebar-link active">
            <i class="bi bi-people-fill"></i>
            <span>Antrean Pasien</span>
        </a>

        <!-- DATA PASIEN -->
        <a href="{{ route('doctor.patients.index') }}"
           class="sidebar-link">
            <i class="bi bi-person-vcard-fill"></i>
            <span>Data Pasien</span>
        </a>

        <!-- PEMERIKSAAN -->
        <a href="{{ route('doctor.examinations.index') }}"
           class="sidebar-link">
            <i class="bi bi-clipboard2-pulse-fill"></i>
            <span>Pemeriksaan</span>
        </a>

        <!-- JADWAL PRAKTIK -->
        <a href="{{ route('doctor.schedules.index') }}"
           class="sidebar-link">
            <i class="bi bi-calendar-week-fill"></i>
            <span>Jadwal Praktik</span>
        </a>

        <!-- AKUN -->
        <div class="sidebar-title" style="margin-top:25px;">
            Akun
        </div>

        <!-- LOGOUT -->
        <form method="POST"
              action="{{ route('logout') }}"
              class="logout-form">

            @csrf

            <button type="submit" class="logout-btn">
                <i class="bi bi-box-arrow-right"></i>
                <span>Keluar</span>
            </button>
        </form>

    </div>
</aside>

<!-- MAIN -->

<main class="main">

    <!-- TOPBAR -->
    <div class="topbar">

        <div>
            <div class="topbar-title">
                Antrean Pasien
            </div>

            <div class="topbar-subtitle">
                Smart Clinic — Kelola antrean dan pelayanan pasien
            </div>
        </div>

        <div class="doctor-profile">
            <div class="doctor-avatar">
                <i class="bi bi-person-fill"></i>
            </div>

            <div class="doctor-name">
                Dr. {{ auth()->user()->name }}
            </div>
        </div>

    </div>

    <!-- CONTENT -->
    <div class="content">

        <!-- HEADER -->
        <div class="page-header">

            <div>
                <div class="page-title">
                    Antrean Pasien
                </div>

                <div class="page-subtitle">
                    Daftar pasien yang sedang menunggu atau sedang dilayani.
                </div>
            </div>

            <div class="queue-icon">
                <i class="bi bi-people-fill"></i>
            </div>

        </div>

        <!-- SUCCESS MESSAGE -->
        @if(session('success'))
            <div class="alert success-alert alert-dismissible fade show"
                 role="alert">

                <i class="bi bi-check-circle-fill me-2"></i>
                {{ session('success') }}

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="alert">
                </button>
            </div>
        @endif

        <!-- QUEUE TABLE -->
        <div class="queue-card mt-3">

            @if($appointments->isEmpty())

                <div class="empty-state">

                    <div class="empty-icon">
                        <i class="bi bi-people"></i>
                    </div>

                    <h4>Belum Ada Pasien</h4>

                    <p>
                        Belum ada pasien dalam antrean saat ini.
                    </p>

                </div>

            @else

                <div class="table-responsive">

                    <table class="table queue-table align-middle">

                        <thead>
                            <tr>
                                <th>No. Antrean</th>
                                <th>Nama Pasien</th>
                                <th>Dokter</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($appointments as $appointment)

                                <tr>

                                    <td>
                                        <span class="queue-number">
                                            {{ $appointment->queue_number }}
                                        </span>
                                    </td>

                                    <td>
                                        <div class="patient-name">
                                            {{ $appointment->patient->name ?? '-' }}
                                        </div>
                                    </td>

                                    <td>
                                        <div class="doctor-text">
                                            <i class="bi bi-person-badge me-1"></i>
                                            {{ $appointment->doctorSchedule->doctor->name ?? '-' }}
                                        </div>
                                    </td>

                                    <td>
                                        <div class="date-text">
                                            <i class="bi bi-calendar3 me-1"></i>
                                            {{ $appointment->appointment_date->format('d-m-Y') }}
                                        </div>
                                    </td>

                                    <td>

                                        @if($appointment->status === 'booked')

                                            <span class="status-badge status-waiting">
                                                <i class="bi bi-clock"></i>
                                                Menunggu
                                            </span>

                                        @elseif($appointment->status === 'called')

                                            <span class="status-badge status-called">
                                                <i class="bi bi-megaphone-fill"></i>
                                                Dipanggil
                                            </span>

                                        @elseif($appointment->status === 'serving')

                                            <span class="status-badge status-serving">
                                                <i class="bi bi-heart-pulse-fill"></i>
                                                Sedang Dilayani
                                            </span>

                                        @endif

                                    </td>

                                    <td>

                                        <div class="action-group">

                                            @if($appointment->status === 'booked')

                                                <form method="POST"
                                                      action="{{ route('doctor.queues.call', $appointment->id) }}">

                                                    @csrf

                                                    <button type="submit"
                                                            class="btn-action btn-call">
                                                        <i class="bi bi-megaphone-fill"></i>
                                                        Panggil
                                                    </button>

                                                </form>

                                            @elseif($appointment->status === 'called')

                                                <form method="POST"
                                                      action="{{ route('doctor.queues.serve', $appointment->id) }}">

                                                    @csrf

                                                    <button type="submit"
                                                            class="btn-action btn-serve">
                                                        <i class="bi bi-play-fill"></i>
                                                        Mulai Melayani
                                                    </button>

                                                </form>

                                            @elseif($appointment->status === 'serving')

                                                <form method="POST"
                                                      action="{{ route('doctor.queues.complete', $appointment->id) }}">

                                                    @csrf

                                                    <button type="submit"
                                                            class="btn-action btn-complete">
                                                        <i class="bi bi-check-circle"></i>
                                                        Selesai
                                                    </button>

                                                </form>

                                            @endif

                                        </div>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            @endif

        </div>

        <!-- BACK TO DASHBOARD -->
        <a href="{{ route('doctor.dashboard') }}"
           class="back-btn">

            <i class="bi bi-arrow-left"></i>
            Kembali ke Dashboard

        </a>

    </div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>