<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Jadwal Dokter - Smart Clinic</title>

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
            font-size: 19px;
            font-weight: 700;
            border-bottom: 1px solid rgba(255,255,255,.1);
        }

        .sidebar-brand i {
            font-size: 25px;
            margin-right: 10px;
        }

        .sidebar-content {
            padding: 22px 15px;
        }

        .sidebar-title {
            color: #C4B5FD;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            padding: 0 15px;
            margin-bottom: 10px;
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
            font-size: 14px;
            font-weight: 500;
            transition: .2s;
        }

        .sidebar-link i {
            width: 20px;
            text-align: center;
            font-size: 17px;
        }

        .sidebar-link:hover {
            background: rgba(255,255,255,.1);
            color: white;
        }

        .sidebar-link.active {
            background: linear-gradient(
                135deg,
                var(--purple-soft),
                var(--purple)
            );
            color: white;
            box-shadow: 0 6px 18px rgba(124,58,237,.3);
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
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: linear-gradient(
                90deg,
                #6D28D9,
                #7C3AED,
                #8B5CF6
            );
            color: white;
            box-shadow: 0 5px 20px rgba(76,29,149,.2);
        }

        .topbar-title {
            font-size: 18px;
            font-weight: 700;
        }

        .topbar-subtitle {
            font-size: 12px;
            color: #E9D5FF;
            margin-top: 2px;
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
            background: rgba(255,255,255,.14);
            border: 1px solid rgba(255,255,255,.15);
            text-decoration: none;
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
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 25px;
        }

        .page-title {
            margin: 0;
            color: var(--purple-deep);
            font-size: 28px;
            font-weight: 700;
        }

        .page-title i {
            color: var(--purple);
        }

        .page-subtitle {
            margin-top: 6px;
            color: var(--muted);
            font-size: 14px;
        }

        /* BUTTON */
        .btn-purple {
            border: none;
            color: white;
            padding: 12px 18px;
            border-radius: 11px;
            font-weight: 600;
            background: linear-gradient(
                135deg,
                #6D28D9,
                #8B5CF6
            );
            box-shadow: 0 6px 18px rgba(124,58,237,.25);
            transition: .2s;
        }

        .btn-purple:hover {
            color: white;
            transform: translateY(-2px);
        }

        /* ALERT */
        .success-alert {
            border: none;
            border-left: 5px solid var(--purple);
            background: #EDE9FE;
            color: var(--purple-deep);
            border-radius: 12px;
            padding: 14px 18px;
        }

        /* CARD */
        .schedule-card {
            background: linear-gradient(
                145deg,
                #FFFFFF,
                #F5F3FF
            );
            border: 1px solid #DDD6FE;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(76,29,149,.1);
        }

        .card-header-custom {
            padding: 22px 24px;
            background: linear-gradient(
                135deg,
                #4C1D95,
                #7C3AED
            );
            color: white;
        }

        .card-header-custom h5 {
            margin: 0;
            font-weight: 700;
            font-size: 17px;
        }

        .card-header-custom p {
            margin: 5px 0 0;
            color: #E9D5FF;
            font-size: 13px;
        }

        .table-container {
            padding: 20px;
        }

        /* TABLE */
        .schedule-table {
            margin: 0;
            vertical-align: middle;
        }

        .schedule-table thead th {
            background: #EDE9FE;
            color: var(--purple-deep);
            border: none;
            padding: 15px;
            font-size: 13px;
            white-space: nowrap;
        }

        .schedule-table tbody td {
            padding: 16px 15px;
            border-color: #EDE9FE;
            color: var(--text);
        }

        .schedule-table tbody tr {
            transition: .2s;
        }

        .schedule-table tbody tr:hover {
            background: #FAF5FF;
        }

        /* NUMBER */
        .number-box {
            width: 40px;
            height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 11px;
            background: #E9D5FF;
            color: var(--purple);
            font-weight: 700;
        }

        /* DOCTOR */
        .doctor-name {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 600;
            color: var(--purple-deep);
        }

        .doctor-icon {
            width: 40px;
            height: 40px;
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

        /* DAY */
        .day-badge {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 7px 11px;
            border-radius: 9px;
            background: #F3E8FF;
            color: var(--purple);
            font-size: 13px;
            font-weight: 600;
        }

        /* TIME */
        .time-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 7px 11px;
            border-radius: 9px;
            background: #EDE9FE;
            color: var(--purple-deep);
            font-size: 13px;
            font-weight: 600;
        }

        /* STATUS */
        .status-active,
        .status-inactive {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 7px 11px;
            border-radius: 9px;
            font-size: 13px;
            font-weight: 600;
        }

        .status-active {
            background: #EDE9FE;
            color: var(--purple);
        }

        .status-inactive {
            background: #E5E7EB;
            color: #4B5563;
        }

        /* EMPTY */
        .empty-state {
            padding: 55px 20px !important;
            text-align: center;
        }

        .empty-icon {
            width: 68px;
            height: 68px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            border-radius: 18px;
            background: #EDE9FE;
            color: var(--purple);
            font-size: 29px;
        }

        .empty-state strong {
            display: block;
            color: var(--purple-deep);
            margin-bottom: 6px;
        }

        .empty-state span {
            color: var(--muted);
            font-size: 14px;
        }

        /* BACK */
        .btn-back {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-top: 22px;
            border: none;
            background: var(--purple-deep);
            color: white;
            padding: 11px 18px;
            border-radius: 11px;
            font-weight: 600;
            text-decoration: none;
        }

        .btn-back:hover {
            background: var(--purple-dark);
            color: white;
        }

        /* FOOTER */
        .footer {
            margin-top: 30px;
            padding: 20px 0 5px;
            text-align: center;
            color: #80699D;
            font-size: 12px;
        }

        /* MOBILE */
        @media (max-width: 900px) {

            .sidebar {
                width: 72px;
            }

            .sidebar-brand {
                justify-content: center;
                padding: 0;
            }

            .sidebar-brand span,
            .sidebar-title,
            .sidebar-link span {
                display: none;
            }

            .sidebar-link {
                justify-content: center;
                padding: 13px;
            }

            .sidebar-link i {
                font-size: 19px;
            }

            .main {
                margin-left: 72px;
            }

            .topbar {
                padding: 0 20px;
            }

            .content {
                padding: 20px 15px;
            }

            .page-header {
                align-items: flex-start;
                flex-direction: column;
            }

            .btn-purple {
                width: 100%;
            }

            .topbar-subtitle {
                display: none;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="sidebar-brand">
            <i class="bi bi-hospital-fill"></i>
            <span>Smart Clinic</span>
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
                <span>Kelola Pasien</span>

            </a>

            <a href="{{ route('admin.doctors.index') }}"
               class="sidebar-link">

                <i class="bi bi-person-badge-fill"></i>
                <span>Kelola Dokter</span>

            </a>

            <a href="{{ route('admin.polyclinics.index') }}"
               class="sidebar-link">

                <i class="bi bi-hospital-fill"></i>
                <span>Kelola Poli</span>

            </a>

            <a href="{{ route('admin.doctor-schedules.index') }}"
               class="sidebar-link active">

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

                <i class="bi bi-list-ol"></i>
                <span>Antrean</span>

            </a>

            <a href="{{ route('admin.reports.index') }}"
               class="sidebar-link">

                <i class="bi bi-bar-chart-fill"></i>
                <span>Laporan</span>

            </a>

            <form method="POST"
                  action="{{ route('logout') }}"
                  class="mt-4">

                @csrf

                <button type="submit"
                        class="sidebar-link w-100 border-0"
                        style="background: transparent;">

                    <i class="bi bi-box-arrow-right"></i>
                    <span>Logout</span>

                </button>

            </form>

        </div>

    </aside>


    <!-- MAIN -->
    <main class="main">

        <!-- TOPBAR -->
        <header class="topbar">

            <div>

                <div class="topbar-title">
                    Jadwal Dokter
                </div>

                <div class="topbar-subtitle">
                    Manajemen jadwal praktik dokter Smart Clinic
                </div>

            </div>

            <div class="topbar-right">

                <a href="{{ route('notifications.index') }}"
                   class="notification-btn">

                    <i class="bi bi-bell-fill"></i>

                </a>

                <div class="user-avatar">
                    A
                </div>

            </div>

        </header>


        <!-- CONTENT -->
        <section class="content">

            <!-- HEADER -->
            <div class="page-header">

                <div>

                    <h1 class="page-title">

                        <i class="bi bi-calendar-week-fill me-2"></i>

                        Jadwal Dokter

                    </h1>

                    <div class="page-subtitle">
                        Kelola jadwal praktik dokter di Smart Clinic
                    </div>

                </div>

                <a href="{{ route('admin.doctor-schedules.create') }}"
                   class="btn btn-purple">

                    <i class="bi bi-plus-circle me-1"></i>

                    Tambah Jadwal

                </a>

            </div>


            <!-- SUCCESS -->
            @if(session('success'))

                <div class="alert success-alert mb-4">

                    <i class="bi bi-check-circle-fill me-2"></i>

                    {{ session('success') }}

                </div>

            @endif


            <!-- TABLE CARD -->
            <div class="schedule-card">

                <div class="card-header-custom">

                    <h5>

                        <i class="bi bi-calendar2-week-fill me-2"></i>

                        Daftar Jadwal Dokter

                    </h5>

                    <p>
                        Jadwal praktik dokter yang tersedia di Smart Clinic
                    </p>

                </div>


                <div class="table-container">

                    <div class="table-responsive">

                        <table class="table schedule-table">

                            <thead>

                                <tr>

                                    <th>No</th>
                                    <th>Dokter</th>
                                    <th>Hari</th>
                                    <th>Jam Mulai</th>
                                    <th>Jam Selesai</th>
                                    <th>Status</th>

                                </tr>

                            </thead>

                            <tbody>

                                @forelse($schedules as $schedule)

                                    <tr>

                                        <td>

                                            <span class="number-box">

                                                {{ $loop->iteration }}

                                            </span>

                                        </td>


                                        <td>

                                            <div class="doctor-name">

                                                <span class="doctor-icon">

                                                    <i class="bi bi-person-badge-fill"></i>

                                                </span>

                                                {{ $schedule->doctor->name ?? '-' }}

                                            </div>

                                        </td>


                                        <td>

                                            <span class="day-badge">

                                                <i class="bi bi-calendar3"></i>

                                                {{ $schedule->day }}

                                            </span>

                                        </td>


                                        <td>

                                            <span class="time-badge">

                                                <i class="bi bi-clock-fill"></i>

                                                {{ $schedule->start_time }}

                                            </span>

                                        </td>


                                        <td>

                                            <span class="time-badge">

                                                <i class="bi bi-clock-fill"></i>

                                                {{ $schedule->end_time }}

                                            </span>

                                        </td>


                                        <td>

                                            @if($schedule->is_active)

                                                <span class="status-active">

                                                    <i class="bi bi-check-circle-fill"></i>

                                                    Aktif

                                                </span>

                                            @else

                                                <span class="status-inactive">

                                                    <i class="bi bi-x-circle-fill"></i>

                                                    Tidak Aktif

                                                </span>

                                            @endif

                                        </td>

                                    </tr>

                                @empty

                                    <tr>

                                        <td colspan="6"
                                            class="empty-state">

                                            <div class="empty-icon">

                                                <i class="bi bi-calendar-x"></i>

                                            </div>

                                            <strong>
                                                Belum ada jadwal dokter
                                            </strong>

                                            <span>
                                                Silakan tambahkan jadwal dokter melalui tombol di atas.
                                            </span>

                                        </td>

                                    </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>


            <!-- BACK -->
            <a href="{{ route('admin.dashboard') }}"
               class="btn-back">

                <i class="bi bi-arrow-left"></i>

                Kembali ke Dashboard

            </a>


            <div class="footer">
                © {{ date('Y') }} Smart Clinic — Admin Panel
            </div>

        </section>

    </main>

</body>

</html>