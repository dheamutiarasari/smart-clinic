<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Pasien - Smart Clinic</title>

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
            overflow-y: auto;
            background: linear-gradient(
                180deg,
                var(--purple-dark),
                var(--purple-deep)
            );
            color: white;
            box-shadow: 4px 0 20px rgba(59, 7, 100, .18);
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
            cursor: pointer;
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

        .logout-button {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 15px;
            margin-bottom: 6px;
            border-radius: 12px;
            color: #E9D5FF;
            transition: .2s;
            cursor: pointer;
        }

        .logout-button:hover {
            background: rgba(255,255,255,.10);
            color: white;
        }

        .logout-button i {
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
            min-height: 75px;
            padding: 12px 30px;
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
            gap: 12px;
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
        }

        /* CONTENT */

        .content {
            padding: 30px;
        }

        .page-header {
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

        /* STAT CARD */

        .stat-card {
            background: linear-gradient(
                135deg,
                #FFFFFF,
                #F5F3FF
            );
            border: 1px solid #DDD6FE;
            border-radius: 18px;
            padding: 22px;
            box-shadow: 0 8px 22px rgba(76,29,149,.08);
            margin-bottom: 25px;
        }

        .stat-content {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .stat-icon {
            width: 52px;
            height: 52px;
            flex-shrink: 0;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(
                135deg,
                #E9D5FF,
                #C4B5FD
            );
            color: var(--purple-deep);
            font-size: 23px;
        }

        .stat-label {
            color: var(--muted);
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 2px;
        }

        .stat-number {
            color: var(--purple-deep);
            font-size: 25px;
            font-weight: 700;
        }

        /* TABLE */

        .table-card {
            background: linear-gradient(
                135deg,
                #FFFFFF,
                #F5F3FF
            );
            border: 1px solid #DDD6FE;
            border-radius: 18px;
            padding: 25px;
            box-shadow: 0 8px 22px rgba(76,29,149,.08);
        }

        .table-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            margin-bottom: 20px;
        }

        .table-title {
            color: var(--purple-deep);
            font-size: 19px;
            font-weight: 700;
        }

        .patient-count {
            background: #E9D5FF;
            color: var(--purple-deep);
            padding: 7px 13px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 700;
        }

        .table-responsive {
            border-radius: 14px;
            overflow-x: auto;
        }

        .table {
            margin-bottom: 0;
            min-width: 850px;
        }

        .table thead th {
            background: var(--purple-deep);
            color: white;
            border: none;
            padding: 14px;
            font-size: 13px;
            white-space: nowrap;
        }

        .table tbody td {
            padding: 14px;
            vertical-align: middle;
            border-color: #E9D5FF;
            color: var(--text);
        }

        .table tbody tr:hover {
            background: #F5F3FF;
        }

        /* PATIENT */

        .patient-avatar {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(
                135deg,
                #E9D5FF,
                #C4B5FD
            );
            color: var(--purple-deep);
            margin-right: 10px;
            flex-shrink: 0;
        }

        .patient-name {
            color: var(--purple-deep);
            font-weight: 700;
        }

        .patient-info {
            color: var(--muted);
            font-size: 12px;
        }

        /* QUEUE */

        .queue-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 40px;
            height: 32px;
            padding: 0 10px;
            border-radius: 10px;
            background: #E9D5FF;
            color: var(--purple-deep);
            font-weight: 700;
        }

        /* STATUS */

        .status-badge {
            display: inline-flex;
            align-items: center;
            padding: 6px 11px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
            white-space: nowrap;
        }

        .status-booked {
            background: #EDE9FE;
            color: #6D28D9;
        }

        .status-called {
            background: #FDE68A;
            color: #92400E;
        }

        .status-serving {
            background: #D1FAE5;
            color: #065F46;
        }

        .status-completed {
            background: #DDD6FE;
            color: #5B21B6;
        }

        /* EMPTY */

        .empty-state {
            text-align: center;
            padding: 55px 20px;
        }

        .empty-icon {
            width: 75px;
            height: 75px;
            margin: 0 auto 18px;
            border-radius: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #E9D5FF;
            color: var(--purple);
            font-size: 32px;
        }

        .empty-state h5 {
            color: var(--purple-deep);
            font-weight: 700;
        }

        .empty-state p {
            color: var(--muted);
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

            .sidebar-link,
            .logout-button {
                justify-content: center;
                padding: 13px 10px;
            }

            .sidebar-link span,
            .logout-button span {
                display: none;
            }

            .main {
                margin-left: 72px;
            }

            .topbar {
                padding: 12px 15px;
            }

            .topbar-subtitle {
                display: none;
            }

            .content {
                padding: 20px 15px;
            }

            .table-card {
                padding: 18px;
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
            Menu Utama
        </div>

        <a href="{{ route('doctor.dashboard') }}"
           class="sidebar-link">
            <i class="bi bi-grid-1x2-fill"></i>
            <span>Dashboard</span>
        </a>

        <a href="{{ route('doctor.queues.index') }}"
           class="sidebar-link">
            <i class="bi bi-ticket-perforated-fill"></i>
            <span>Antrean Pasien</span>
        </a>

        <a href="{{ route('doctor.patients.index') }}"
           class="sidebar-link active">
            <i class="bi bi-people-fill"></i>
            <span>Data Pasien</span>
        </a>

        <a href="{{ route('doctor.examinations.index') }}"
           class="sidebar-link">
            <i class="bi bi-heart-pulse-fill"></i>
            <span>Pemeriksaan</span>
        </a>

        <a href="{{ route('doctor.schedules.index') }}"
           class="sidebar-link">
            <i class="bi bi-calendar-week-fill"></i>
            <span>Jadwal Praktik</span>
        </a>

        <div class="sidebar-title mt-4">
            Sistem
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit"
                    class="logout-button w-100 border-0"
                    style="background: transparent;">
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
                Data Pasien
            </div>

            <div class="topbar-subtitle">
                Daftar pasien yang terdaftar pada Smart Clinic
            </div>
        </div>

        <div class="topbar-right">

            <a href="{{ route('notifications.index') }}"
               class="notification-btn">
                <i class="bi bi-bell-fill"></i>
            </a>

            <div class="user-avatar">
                <i class="bi bi-person-badge-fill"></i>
            </div>

        </div>
    </div>

    <!-- CONTENT -->

    <div class="content">

        <div class="page-header">

            <div class="page-title">
                <i class="bi bi-people-fill me-2"></i>
                Data Pasien
            </div>

            <p class="page-subtitle">
                Lihat daftar pasien yang melakukan booking pada jadwal praktik Anda.
            </p>

        </div>

        <!-- TOTAL PASIEN -->

        <div class="stat-card">

            <div class="stat-content">

                <div class="stat-icon">
                    <i class="bi bi-people-fill"></i>
                </div>

                <div>
                    <div class="stat-label">
                        Total Pasien
                    </div>

                    <div class="stat-number">
                        {{ $appointments->count() }}
                    </div>
                </div>

            </div>
        </div>

        <!-- DAFTAR PASIEN -->

        <div class="table-card">

            <div class="table-header">

                <div class="table-title">
                    <i class="bi bi-list-ul me-2"></i>
                    Daftar Pasien
                </div>

                <div class="patient-count">
                    {{ $appointments->count() }} Pasien
                </div>

            </div>

            @if($appointments->isEmpty())

                <div class="empty-state">

                    <div class="empty-icon">
                        <i class="bi bi-person-x-fill"></i>
                    </div>

                    <h5>Belum Ada Data Pasien</h5>

                    <p>
                        Belum ada pasien yang melakukan booking
                        pada jadwal praktik Anda.
                    </p>

                </div>

            @else

                <div class="table-responsive">

                    <table class="table align-middle">

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Pasien</th>
                                <th>No. Antrean</th>
                                <th>Tanggal Kunjungan</th>
                                <th>Hari</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($appointments as $appointment)

                                <tr>

                                    <td>
                                        {{ $loop->iteration }}
                                    </td>

                                    <td>

                                        <div class="d-flex align-items-center">

                                            <div class="patient-avatar">
                                                <i class="bi bi-person-fill"></i>
                                            </div>

                                            <div>
                                                <div class="patient-name">
                                                    {{ $appointment->patient->name ?? 'Tidak diketahui' }}
                                                </div>

                                                <div class="patient-info">
                                                    Pasien Smart Clinic
                                                </div>
                                            </div>

                                        </div>

                                    </td>

                                    <td>
                                        <span class="queue-badge">
                                            {{ $appointment->queue_number ?? '-' }}
                                        </span>
                                    </td>

                                    <td>
                                        {{ $appointment->appointment_date
                                            ? $appointment->appointment_date->format('d M Y')
                                            : '-' }}
                                    </td>

                                    <td>
                                        {{ $appointment->doctorSchedule->day ?? '-' }}
                                    </td>

                                    <td>

                                        @if($appointment->status === 'booked')

                                            <span class="status-badge status-booked">
                                                <i class="bi bi-clock me-1"></i>
                                                Menunggu
                                            </span>

                                        @elseif($appointment->status === 'called')

                                            <span class="status-badge status-called">
                                                <i class="bi bi-megaphone me-1"></i>
                                                Dipanggil
                                            </span>

                                        @elseif($appointment->status === 'serving')

                                            <span class="status-badge status-serving">
                                                <i class="bi bi-heart-pulse me-1"></i>
                                                Sedang Diperiksa
                                            </span>

                                        @elseif($appointment->status === 'completed')

                                            <span class="status-badge status-completed">
                                                <i class="bi bi-check-circle me-1"></i>
                                                Selesai
                                            </span>

                                        @else

                                            <span class="status-badge status-booked">
                                                {{ ucfirst($appointment->status) }}
                                            </span>

                                        @endif

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            @endif

        </div>

        <div class="footer">
            <small>Smart Clinic — Data Pasien Dokter</small>
        </div>

    </div>
</div>

</body>
</html>