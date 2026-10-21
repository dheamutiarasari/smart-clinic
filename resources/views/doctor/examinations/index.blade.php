<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Smart Clinic - Pemeriksaan Pasien</title>

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
            color: var(--text);
            font-family: "Segoe UI", Arial, sans-serif;
        }

        /* ================= SIDEBAR ================= */

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
            box-shadow: 5px 0 20px rgba(76, 29, 149, .25);

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

            box-shadow:
                0 7px 18px rgba(124,58,237,.25);
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

        /* ================= MAIN ================= */

        .main {
            margin-left: 250px;
            min-height: 100vh;
        }

        /* ================= TOPBAR ================= */

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

            box-shadow:
                0 5px 20px rgba(76,29,149,.20);
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

        /* ================= CONTENT ================= */

        .content {
            padding: 30px;
        }

        /* ================= WELCOME ================= */

        .welcome-card {
            position: relative;
            overflow: hidden;

            background: linear-gradient(
                135deg,
                var(--purple-deep),
                #6D28D9,
                var(--purple-light)
            );

            border-radius: 22px;

            padding: 30px;

            color: white;

            margin-bottom: 25px;

            box-shadow:
                0 12px 30px rgba(124,58,237,.25);
        }

        .welcome-card::before {
            content: "";

            position: absolute;

            width: 180px;
            height: 180px;

            border-radius: 50%;

            background: rgba(255,255,255,.07);

            right: -60px;
            top: -70px;
        }

        .welcome-card::after {
            content: "";

            position: absolute;

            width: 100px;
            height: 100px;

            border-radius: 50%;

            background: rgba(255,255,255,.06);

            right: 100px;
            bottom: -50px;
        }

        .welcome-content {
            position: relative;
            z-index: 2;
        }

        .welcome-icon {
            width: 70px;
            height: 70px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 20px;

            background: rgba(255,255,255,.15);

            font-size: 32px;

            margin-bottom: 18px;
        }

        .welcome-card h1 {
            font-size: 28px;
            font-weight: bold;

            margin-bottom: 8px;
        }

        .welcome-card p {
            margin: 0;

            color: #E9D5FF;

            font-size: 14px;
        }

        /* ================= SECTION ================= */

        .section-header {
            margin-bottom: 18px;
        }

        .section-title {
            font-size: 20px;

            font-weight: bold;

            color: var(--purple-deep);

            margin-bottom: 4px;
        }

        .section-subtitle {
            color: var(--muted);

            font-size: 13px;
        }

        /* ================= EXAMINATION CARD ================= */

        .examination-grid {
            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 20px;
        }

        .examination-card {
            background: linear-gradient(
                135deg,
                #FFFFFF,
                #F5F3FF
            );

            border: 1px solid #DDD6FE;

            border-radius: 18px;

            padding: 24px;

            min-height: 215px;

            box-shadow:
                0 7px 20px rgba(76,29,149,.10);

            transition: .2s;
        }

        .examination-card:hover {
            transform: translateY(-5px);

            box-shadow:
                0 14px 28px rgba(76,29,149,.16);
        }

        .patient-header {
            display: flex;
            align-items: center;
            justify-content: space-between;

            margin-bottom: 18px;
        }

        .patient-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .patient-icon {
            width: 55px;
            height: 55px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 16px;

            background: linear-gradient(
                135deg,
                var(--lavender),
                #C4B5FD
            );

            color: var(--purple-deep);

            font-size: 24px;
        }

        .patient-name {
            color: var(--purple-deep);

            font-size: 17px;

            font-weight: bold;

            margin-bottom: 3px;
        }

        .patient-id {
            color: var(--muted);

            font-size: 12px;
        }

        .queue-number {
            min-width: 48px;

            text-align: center;

            background: var(--lavender);

            color: var(--purple-deep);

            padding: 8px 10px;

            border-radius: 11px;

            font-size: 16px;

            font-weight: bold;
        }

        .patient-details {
            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 10px;

            margin-bottom: 18px;
        }

        .detail-box {
            background: #F5F3FF;

            border: 1px solid #E9D5FF;

            border-radius: 11px;

            padding: 10px 12px;
        }

        .detail-label {
            color: var(--muted);

            font-size: 10px;

            margin-bottom: 3px;
        }

        .detail-value {
            color: var(--purple-deep);

            font-size: 12px;

            font-weight: 600;
        }

        /* ================= STATUS ================= */

        .status {
            display: inline-flex;

            align-items: center;

            gap: 6px;

            padding: 6px 10px;

            border-radius: 10px;

            font-size: 11px;

            font-weight: 600;
        }

        .status-called {
            background: #FEF3C7;
            color: #92400E;
        }

        .status-serving {
            background: #DCFCE7;
            color: #166534;
        }

        /* ================= BUTTON ================= */

        .btn-purple {
            display: inline-flex;

            align-items: center;

            gap: 7px;

            background: linear-gradient(
                90deg,
                #6D28D9,
                #8B5CF6
            );

            color: white;

            border: none;

            padding: 9px 15px;

            border-radius: 11px;

            text-decoration: none;

            font-size: 13px;

            transition: .2s;
        }

        .btn-purple:hover {
            color: white;

            transform: translateY(-1px);

            box-shadow:
                0 6px 15px rgba(124,58,237,.25);
        }

        .btn-green {
            display: inline-flex;

            align-items: center;

            gap: 7px;

            background: #DCFCE7;

            color: #166534;

            border: none;

            padding: 9px 15px;

            border-radius: 11px;

            font-size: 13px;

            text-decoration: none;

            transition: .2s;
        }

        .btn-green:hover {
            background: #BBF7D0;

            color: #166534;
        }

        .action-buttons {
            display: flex;

            gap: 8px;

            flex-wrap: wrap;
        }

        /* ================= EMPTY ================= */

        .empty-card {
            background: linear-gradient(
                135deg,
                #FFFFFF,
                #F5F3FF
            );

            border: 1px solid #DDD6FE;

            border-radius: 18px;

            padding: 45px 25px;

            text-align: center;

            box-shadow:
                0 7px 20px rgba(76,29,149,.10);
        }

        .empty-icon {
            width: 65px;
            height: 65px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 18px;

            background: linear-gradient(
                135deg,
                var(--lavender),
                #C4B5FD
            );

            color: var(--purple-deep);

            font-size: 28px;

            margin: 0 auto 15px;
        }

        .empty-title {
            color: var(--purple-deep);

            font-size: 18px;

            font-weight: bold;

            margin-bottom: 5px;
        }

        .empty-text {
            color: var(--muted);

            font-size: 13px;
        }

        /* ================= ALERT ================= */

        .success-alert {
            background: #DCFCE7;

            border: 1px solid #BBF7D0;

            color: #166534;

            border-radius: 12px;

            padding: 12px 15px;

            font-size: 13px;

            margin-bottom: 20px;
        }

        /* ================= RESPONSIVE ================= */

        @media (max-width: 1100px) {

            .examination-grid {
                grid-template-columns:
                    repeat(2, 1fr);
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
                padding: 0 15px;
            }

            .topbar-title {
                font-size: 16px;
            }

            .topbar-subtitle {
                display: none;
            }

            .doctor-name {
                display: none;
            }

            .content {
                padding: 20px 15px;
            }

            .welcome-card {
                padding: 24px;
            }

            .welcome-icon {
                display: none;
            }

            .welcome-card h1 {
                font-size: 23px;
            }

            .examination-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 500px) {

            .patient-header {
                align-items: flex-start;
            }

            .patient-details {
                grid-template-columns: 1fr;
            }

            .action-buttons {
                flex-direction: column;
            }

            .action-buttons form,
            .action-buttons a {
                width: 100%;
            }

            .action-buttons button,
            .action-buttons a {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>

<body>

<!-- ================= SIDEBAR ================= -->

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
           class="sidebar-link">

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
           class="sidebar-link active">

            <i class="bi bi-clipboard2-pulse-fill"></i>

            <span>Pemeriksaan</span>

        </a>



        <!-- JADWAL PRAKTIK -->

        <a href="{{ route('doctor.schedules.index') }}"
           class="sidebar-link">

            <i class="bi bi-calendar-week-fill"></i>

            <span>Jadwal Praktik</span>

        </a>


        <div class="sidebar-title"
             style="margin-top:25px;">

            Akun

        </div>


        <!-- LOGOUT -->

        <form method="POST"
              action="{{ route('logout') }}"
              class="logout-form">

            @csrf

            <button type="submit"
                    class="logout-btn">

                <i class="bi bi-box-arrow-right"></i>

                <span>Keluar</span>

            </button>

        </form>

    </div>

</aside>


<!-- ================= MAIN ================= -->

<main class="main">


    <!-- TOPBAR -->

    <div class="topbar">

        <div>

            <div class="topbar-title">
                Pemeriksaan Pasien
            </div>

            <div class="topbar-subtitle">
                Smart Clinic — Panel Pelayanan Dokter
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


        <!-- WELCOME -->

        <div class="welcome-card">

            <div class="welcome-content">

                <div class="welcome-icon">
                    <i class="bi bi-clipboard2-pulse-fill"></i>
                </div>

                <h1>
                    Pemeriksaan Pasien
                </h1>

                <p>
                    Kelola proses pemeriksaan pasien dengan mudah
                    melalui Smart Clinic.
                </p>

            </div>

        </div>


        <!-- SECTION -->

        <div class="section-header">

            <div class="section-title">
                Daftar Pemeriksaan
            </div>

            <div class="section-subtitle">
                Pasien yang sudah dipanggil atau sedang dalam proses pemeriksaan.
            </div>

        </div>


        @if(session('success'))

            <div class="success-alert">

                <i class="bi bi-check-circle-fill"></i>

                {{ session('success') }}

            </div>

        @endif


        @if($appointments->isEmpty())

            <!-- EMPTY -->

            <div class="empty-card">

                <div class="empty-icon">

                    <i class="bi bi-clipboard2-pulse-fill"></i>

                </div>

                <div class="empty-title">
                    Belum Ada Pemeriksaan
                </div>

                <div class="empty-text">
                    Belum ada pasien yang sedang menunggu
                    atau menjalani pemeriksaan.
                </div>

            </div>

        @else

            <!-- EXAMINATION LIST -->

            <div class="examination-grid">

                @foreach($appointments as $appointment)

                    <div class="examination-card">


                        <!-- PATIENT HEADER -->

                        <div class="patient-header">

                            <div class="patient-info">

                                <div class="patient-icon">

                                    <i class="bi bi-person-fill"></i>

                                </div>

                                <div>

                                    <div class="patient-name">

                                        {{ $appointment->patient->name ?? 'Nama Pasien' }}

                                    </div>

                                    <div class="patient-id">

                                        Pasien #{{ $appointment->patient->id ?? '-' }}

                                    </div>

                                </div>

                            </div>


                            <div class="queue-number">

                                #{{ $appointment->queue_number }}

                            </div>

                        </div>


                        <!-- DETAILS -->

                        <div class="patient-details">


                            <div class="detail-box">

                                <div class="detail-label">
                                    Tanggal
                                </div>

                                <div class="detail-value">

                                    {{ $appointment->appointment_date
                                        ? $appointment->appointment_date->format('d M Y')
                                        : '-'
                                    }}

                                </div>

                            </div>


                            <div class="detail-box">

                                <div class="detail-label">
                                    Dokter
                                </div>

                                <div class="detail-value">

                                    {{ $appointment->doctorSchedule->doctor->name ?? '-' }}

                                </div>

                            </div>


                            <div class="detail-box">

                                <div class="detail-label">
                                    Status
                                </div>

                                <div class="detail-value">

                                    @if($appointment->status === 'called')

                                        <span class="status status-called">

                                            <i class="bi bi-clock-fill"></i>

                                            Menunggu Pemeriksaan

                                        </span>

                                    @elseif($appointment->status === 'serving')

                                        <span class="status status-serving">

                                            <i class="bi bi-activity"></i>

                                            Sedang Diperiksa

                                        </span>

                                    @endif

                                </div>

                            </div>


                            <div class="detail-box">

                                <div class="detail-label">
                                    Nomor Antrean
                                </div>

                                <div class="detail-value">

                                    #{{ $appointment->queue_number }}

                                </div>

                            </div>


                        </div>


                        <!-- ACTION -->

                        <div class="action-buttons">


                            @if($appointment->status === 'called')

                                <form method="POST"
                                      action="{{ route(
                                          'doctor.queues.serve',
                                          $appointment
                                      ) }}">

                                    @csrf

                                    <button type="submit"
                                            class="btn-purple">

                                        <i class="bi bi-play-circle-fill"></i>

                                        Mulai Pemeriksaan

                                    </button>

                                </form>

                            @endif


                            @if($appointment->status === 'serving')

                                <a href="{{ route(
                                    'doctor.medical-records.create',
                                    $appointment
                                ) }}"
                                   class="btn-purple">

                                    <i class="bi bi-file-medical-fill"></i>

                                    Buat Rekam Medis

                                </a>


                                <form method="POST"
                                      action="{{ route(
                                          'doctor.queues.complete',
                                          $appointment
                                      ) }}">

                                    @csrf

                                    <button type="submit"
                                            class="btn-green">

                                        <i class="bi bi-check-circle-fill"></i>

                                        Selesaikan

                                    </button>

                                </form>

                            @endif


                        </div>

                    </div>

                @endforeach

            </div>

        @endif

    </div>

</main>

</body>
</html>