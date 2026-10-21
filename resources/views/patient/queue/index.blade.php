<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Antrean Saya - Smart Clinic</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        rel="stylesheet">

    <style>
        :root {
            --purple: #7C3AED;
            --purple-dark: #4C1D95;
            --purple-deep: #3B0764;
            --purple-light: #E9D5FF;
            --lavender: #F3E8FF;
            --text: #2E1065;
            --muted: #81758F;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #F3E8FF;
            color: var(--text);
            font-family: "Segoe UI", Arial, sans-serif;
        }

        /* SIDEBAR */

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 255px;
            height: 100vh;
            background: linear-gradient(
                180deg,
                #3B0764,
                #4C1D95,
                #5B21B6
            );
            z-index: 1000;
            color: white;
            box-shadow: 8px 0 30px rgba(59, 7, 100, .15);
        }

        .sidebar-brand {
            height: 78px;
            display: flex;
            align-items: center;
            padding: 0 25px;
            text-decoration: none;
            color: white;
            font-size: 20px;
            font-weight: 700;
            border-bottom: 1px solid rgba(255,255,255,.12);
        }

        .sidebar-brand i {
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 11px;
            border-radius: 13px;
            background: rgba(255,255,255,.15);
            font-size: 21px;
        }

        .sidebar-content {
            padding: 22px 15px;
        }

        .sidebar-title {
            margin: 18px 10px 10px;
            color: rgba(255,255,255,.48);
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .sidebar-link {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            margin-bottom: 6px;
            border-radius: 13px;
            color: rgba(255,255,255,.72);
            text-decoration: none;
            transition: .25s;
        }

        .sidebar-link i {
            width: 26px;
            margin-right: 10px;
            font-size: 18px;
        }

        .sidebar-link:hover {
            background: rgba(255,255,255,.10);
            color: white;
        }

        .sidebar-link.active {
            background: rgba(255,255,255,.17);
            color: white;
            box-shadow: inset 3px 0 0 white;
        }

        .logout-btn {
            color: #F9A8D4 !important;
        }

        .logout-btn:hover {
            background: rgba(244,114,182,.12) !important;
            color: #FBCFE8 !important;
        }

        /* MAIN */

        .main {
            margin-left: 255px;
            min-height: 100vh;
        }

        /* TOPBAR */

        .topbar {
            height: 78px;
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
            box-shadow: 0 8px 25px rgba(76,29,149,.15);
        }

        .topbar-title {
            margin: 0;
            font-size: 18px;
            font-weight: 700;
        }

        .topbar-subtitle {
            margin-top: 3px;
            font-size: 12px;
            color: rgba(255,255,255,.75);
        }

        .notification-btn {
            position: relative;
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid rgba(255,255,255,.2);
            border-radius: 12px;
            background: rgba(255,255,255,.12);
            color: white;
            text-decoration: none;
        }

        .notification-btn:hover {
            background: rgba(255,255,255,.2);
            color: white;
        }

        .user-avatar {
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(255,255,255,.18);
            color: white;
            font-size: 18px;
        }

        /* CONTENT */

        .content {
            padding: 30px;
        }

        /* PAGE HEADER */

        .page-header {
            position: relative;
            overflow: hidden;
            padding: 28px 30px;
            margin-bottom: 25px;
            border-radius: 22px;
            background: linear-gradient(
                135deg,
                #6D28D9,
                #7C3AED,
                #A855F7
            );
            color: white;
            box-shadow: 0 15px 35px rgba(109,40,217,.22);
        }

        .page-header::after {
            content: "";
            position: absolute;
            width: 190px;
            height: 190px;
            right: -60px;
            top: -95px;
            border-radius: 50%;
            background: rgba(255,255,255,.10);
        }

        .page-header::before {
            content: "";
            position: absolute;
            width: 100px;
            height: 100px;
            right: 100px;
            bottom: -60px;
            border-radius: 50%;
            background: rgba(255,255,255,.07);
        }

        .page-icon {
            position: relative;
            z-index: 2;
            width: 58px;
            height: 58px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 17px;
            background: rgba(255,255,255,.16);
            font-size: 27px;
        }

        .page-header-content {
            position: relative;
            z-index: 2;
        }

        .page-header h2 {
            font-size: 23px;
        }

        .page-header p {
            color: rgba(255,255,255,.82);
            font-size: 13px;
        }

        /* QUEUE CARD */

        .queue-card {
            background: rgba(255,255,255,.88);
            border: 1px solid rgba(124,58,237,.12);
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 12px 30px rgba(76,29,149,.08);
        }

        .queue-header {
            padding: 22px 25px;
            border-bottom: 1px solid #E9D5FF;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: linear-gradient(
                90deg,
                #FFFFFF,
                #FAF5FF
            );
        }

        .queue-header-title {
            font-weight: 700;
            font-size: 17px;
            color: var(--text);
        }

        .queue-header small {
            font-size: 12px;
        }

        .status-badge {
            padding: 8px 14px;
            border-radius: 20px;
            background: #E9D5FF;
            color: #6D28D9;
            font-size: 12px;
            font-weight: 700;
        }

        .queue-body {
            padding: 30px 25px;
        }

        /* QUEUE NUMBER */

        .queue-number-box {
            height: 100%;
            min-height: 255px;
            padding: 30px;
            text-align: center;
            border-radius: 22px;
            background: linear-gradient(
                145deg,
                #4C1D95,
                #6D28D9,
                #8B5CF6
            );
            color: white;
            box-shadow: 0 15px 30px rgba(76,29,149,.25);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .queue-number-box::after {
            content: "";
            position: absolute;
            width: 160px;
            height: 160px;
            right: -70px;
            top: -70px;
            border-radius: 50%;
            background: rgba(255,255,255,.10);
        }

        .queue-label {
            position: relative;
            z-index: 2;
            font-size: 12px;
            opacity: .85;
            letter-spacing: 1px;
        }

        .queue-number {
            position: relative;
            z-index: 2;
            margin: 9px 0;
            font-size: 68px;
            line-height: 1;
            font-weight: 800;
        }

        .queue-caption {
            position: relative;
            z-index: 2;
            max-width: 230px;
            font-size: 12px;
            line-height: 1.5;
            opacity: .82;
        }

        /* INFORMATION */

        .info-box {
            height: 100%;
            padding: 22px;
            background: #FAF5FF;
            border: 1px solid #E9D5FF;
            border-radius: 20px;
        }

        .info-title {
            margin-bottom: 20px;
            font-weight: 700;
            font-size: 15px;
        }

        .info-row {
            display: flex;
            align-items: center;
            margin-bottom: 17px;
        }

        .info-row:last-child {
            margin-bottom: 0;
        }

        .info-icon {
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            margin-right: 12px;
            border-radius: 12px;
            background: #E9D5FF;
            color: #6D28D9;
            font-size: 17px;
        }

        .info-label {
            font-size: 10px;
            color: #91869E;
            font-weight: 700;
        }

        .info-value {
            margin-top: 3px;
            font-size: 14px;
            font-weight: 600;
            color: var(--text);
        }

        /* STATUS */

        .status-area {
            margin-top: 25px;
            padding: 20px;
            border-radius: 18px;
            background: #F3E8FF;
            border: 1px solid #DDD6FE;
        }

        .status-icon {
            width: 47px;
            height: 47px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 14px;
            background: white;
            color: #7C3AED;
            font-size: 21px;
            flex-shrink: 0;
            box-shadow: 0 5px 15px rgba(76,29,149,.08);
        }

        /* BUTTON */

        .btn-purple {
            padding: 11px 19px;
            border: none;
            border-radius: 12px;
            background: linear-gradient(
                135deg,
                #6D28D9,
                #7C3AED
            );
            color: white;
            text-decoration: none;
            font-weight: 600;
            font-size: 13px;
            transition: .2s;
            box-shadow: 0 7px 18px rgba(109,40,217,.18);
        }

        .btn-purple:hover {
            background: linear-gradient(
                135deg,
                #4C1D95,
                #6D28D9
            );
            color: white;
            transform: translateY(-1px);
        }

        .btn-outline-purple {
            padding: 10px 18px;
            border: 1px solid #C4B5FD;
            border-radius: 12px;
            background: rgba(255,255,255,.8);
            color: #6D28D9;
            text-decoration: none;
            font-weight: 600;
            font-size: 13px;
            transition: .2s;
        }

        .btn-outline-purple:hover {
            background: #E9D5FF;
            color: #4C1D95;
        }

        /* EMPTY */

        .empty-card {
            padding: 70px 25px;
            text-align: center;
            background: rgba(255,255,255,.88);
            border: 1px solid #E9D5FF;
            border-radius: 22px;
            box-shadow: 0 12px 30px rgba(76,29,149,.07);
        }

        .empty-icon {
            width: 78px;
            height: 78px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 23px;
            background: #E9D5FF;
            color: #7C3AED;
            font-size: 34px;
        }

        .empty-card h3 {
            font-size: 21px;
            color: var(--text);
        }

        .empty-card p {
            max-width: 500px;
            margin: 0 auto 22px;
            font-size: 13px;
            line-height: 1.7;
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

            .content {
                padding: 20px 15px;
            }

            .topbar {
                padding: 0 15px;
            }

            .page-header {
                padding: 22px;
            }

            .page-icon {
                width: 50px;
                height: 50px;
                font-size: 22px;
            }

            .queue-header {
                padding: 18px;
            }

            .queue-body {
                padding: 20px 18px;
            }

            .queue-number-box {
                min-height: 220px;
            }

            .queue-number {
                font-size: 55px;
            }
        }
    </style>
</head>

<body>

<!-- SIDEBAR -->
<aside class="sidebar">

    <a href="{{ route('patient.dashboard') }}" class="sidebar-brand">
        <i class="bi bi-hospital"></i>
        <span>Smart Clinic</span>
    </a>

    <div class="sidebar-content">

        <div class="sidebar-title">
            Menu Utama
        </div>

        <a href="{{ route('patient.dashboard') }}" class="sidebar-link">
            <i class="bi bi-grid-1x2"></i>
            <span>Dashboard</span>
        </a>

        <a href="{{ route('patient.appointments.index') }}" class="sidebar-link">
            <i class="bi bi-calendar-check"></i>
            <span>Booking Konsultasi</span>
        </a>

        <a href="{{ route('patient.queue.index') }}" class="sidebar-link active">
            <i class="bi bi-people"></i>
            <span>Antrean Saya</span>
        </a>

        <a href="{{ route('patient.history.index') }}" class="sidebar-link">
            <i class="bi bi-clock-history"></i>
            <span>Riwayat Pemeriksaan</span>
        </a>

        <div class="sidebar-title">
            Layanan
        </div>

        <a href="{{ route('patient.qr') }}" class="sidebar-link">
            <i class="bi bi-qr-code"></i>
            <span>QR Antrean</span>
        </a>

        <a href="{{ route('notifications.index') }}" class="sidebar-link">
            <i class="bi bi-bell"></i>
            <span>Notifikasi</span>
        </a>

        <div class="sidebar-title">
            Akun
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button
                type="submit"
                class="sidebar-link logout-btn border-0 bg-transparent w-100 text-start">

                <i class="bi bi-box-arrow-right"></i>

                <span>
                    Keluar
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
                Antrean Saya
            </h5>

            <div class="topbar-subtitle">
                Pantau status antrean pemeriksaan Anda
            </div>
        </div>

        <div class="d-flex align-items-center gap-3">

            @php
                $unreadNotifications =
                    \App\Models\Notification::where(
                        'user_id',
                        auth()->id()
                    )
                    ->where(
                        'is_read',
                        false
                    )
                    ->count();
            @endphp

            <a
                href="{{ route('notifications.index') }}"
                class="notification-btn">

                <i class="bi bi-bell"></i>

                @if($unreadNotifications > 0)

                    <span
                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">

                        {{ $unreadNotifications }}

                    </span>

                @endif

            </a>

            <div class="d-flex align-items-center">

                <div class="user-avatar">
                    <i class="bi bi-person"></i>
                </div>

                <div class="ms-2 d-none d-md-block">

                    <div class="fw-semibold">
                        {{ auth()->user()->name }}
                    </div>

                    <small style="color:rgba(255,255,255,.7);">
                        Pasien
                    </small>

                </div>

            </div>

        </div>

    </header>


    <!-- CONTENT -->
    <section class="content">

        <div class="page-header">

            <div class="d-flex align-items-center">

                <div class="page-icon">
                    <i class="bi bi-people"></i>
                </div>

                <div class="ms-3 page-header-content">

                    <h2 class="fw-bold mb-1">
                        Antrean Saya
                    </h2>

                    <p class="mb-0">
                        Pantau nomor dan status antrean
                        pemeriksaan Anda secara langsung.
                    </p>

                </div>

            </div>

        </div>


        @if(session('success'))

            <div class="alert alert-success border-0 shadow-sm">

                <i class="bi bi-check-circle-fill me-2"></i>

                {{ session('success') }}

            </div>

        @endif


        @if($appointment)

            <div class="queue-card">

                <div class="queue-header">

                    <div>
                        <div class="queue-header-title">
                            Antrean Pemeriksaan
                        </div>

                        <small class="text-muted">
                            Detail antrean Anda
                        </small>
                    </div>


                    @if($appointment->status === 'booked')

                        <span class="status-badge">
                            <i class="bi bi-hourglass-split me-1"></i>
                            Menunggu
                        </span>

                    @elseif($appointment->status === 'called')

                        <span
                            class="status-badge"
                            style="background:#DCFCE7;color:#15803D;">

                            <i class="bi bi-megaphone me-1"></i>
                            Dipanggil

                        </span>

                    @elseif($appointment->status === 'serving')

                        <span
                            class="status-badge"
                            style="background:#FEF3C7;color:#92400E;">

                            <i class="bi bi-person-video3 me-1"></i>
                            Sedang Dilayani

                        </span>

                    @endif

                </div>


                <div class="queue-body">

                    <div class="row g-4">

                        <!-- NOMOR ANTREAN -->
                        <div class="col-md-5">

                            <div class="queue-number-box">

                                <div class="queue-label">
                                    NOMOR ANTREAN
                                </div>

                                <div class="queue-number">
                                    {{ $appointment->queue_number }}
                                </div>

                                <div class="queue-caption">
                                    Harap menunggu hingga
                                    nomor Anda dipanggil.
                                </div>

                            </div>

                        </div>


                        <!-- INFORMASI -->
                        <div class="col-md-7">

                            <div class="info-box">

                                <div class="info-title">

                                    <i
                                        class="bi bi-clipboard2-pulse me-2"
                                        style="color:#7C3AED;">
                                    </i>

                                    Informasi Pemeriksaan

                                </div>


                                <div class="info-row">

                                    <div class="info-icon">
                                        <i class="bi bi-person-badge"></i>
                                    </div>

                                    <div>

                                        <div class="info-label">
                                            DOKTER
                                        </div>

                                        <div class="info-value">
                                            {{ $appointment->doctorSchedule->doctor->name }}
                                        </div>

                                    </div>

                                </div>


                                <div class="info-row">

                                    <div class="info-icon">
                                        <i class="bi bi-calendar3"></i>
                                    </div>

                                    <div>

                                        <div class="info-label">
                                            TANGGAL
                                        </div>

                                        <div class="info-value">
                                            {{ $appointment->appointment_date->format('d F Y') }}
                                        </div>

                                    </div>

                                </div>


                                <div class="info-row">

                                    <div class="info-icon">
                                        <i class="bi bi-calendar-week"></i>
                                    </div>

                                    <div>

                                        <div class="info-label">
                                            HARI PRAKTIK
                                        </div>

                                        <div class="info-value">
                                            {{ $appointment->doctorSchedule->day }}
                                        </div>

                                    </div>

                                </div>


                                <div class="info-row">

                                    <div class="info-icon">
                                        <i class="bi bi-clock"></i>
                                    </div>

                                    <div>

                                        <div class="info-label">
                                            JAM PRAKTIK
                                        </div>

                                        <div class="info-value">

                                            {{ \Carbon\Carbon::parse($appointment->doctorSchedule->start_time)->format('H:i') }}

                                            -

                                            {{ \Carbon\Carbon::parse($appointment->doctorSchedule->end_time)->format('H:i') }}

                                            WIB

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- STATUS -->
                    <div class="status-area">

                        <div class="d-flex align-items-center">

                            <div class="status-icon">

                                @if($appointment->status === 'booked')

                                    <i class="bi bi-hourglass-split"></i>

                                @elseif($appointment->status === 'called')

                                    <i class="bi bi-megaphone"></i>

                                @else

                                    <i class="bi bi-person-check"></i>

                                @endif

                            </div>


                            <div class="ms-3">

                                @if($appointment->status === 'booked')

                                    <div class="fw-bold">
                                        Anda sedang menunggu.
                                    </div>

                                    <small class="text-muted">
                                        Silakan menunggu sampai
                                        dokter memanggil nomor antrean Anda.
                                    </small>

                                @elseif($appointment->status === 'called')

                                    <div class="fw-bold text-success">
                                        Nomor Anda sudah dipanggil!
                                    </div>

                                    <small class="text-muted">
                                        Silakan segera menuju
                                        ruang dokter.
                                    </small>

                                @elseif($appointment->status === 'serving')

                                    <div class="fw-bold">
                                        Anda sedang dilayani dokter.
                                    </div>

                                    <small class="text-muted">
                                        Pemeriksaan Anda sedang berlangsung.
                                    </small>

                                @endif

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <div class="d-flex flex-wrap gap-2 mt-4">

                <a
                    href="{{ route('patient.qr') }}"
                    class="btn-purple">

                    <i class="bi bi-qr-code me-1"></i>

                    Lihat QR Antrean

                </a>

                <a
                    href="{{ route('patient.dashboard') }}"
                    class="btn-outline-purple">

                    <i class="bi bi-arrow-left me-1"></i>

                    Dashboard

                </a>

            </div>


        @else

            <div class="empty-card">

                <div class="empty-icon">
                    <i class="bi bi-ticket-perforated"></i>
                </div>

                <h3 class="fw-bold mt-4">
                    Belum Ada Antrean
                </h3>

                <p class="text-muted">

                    Anda belum memiliki antrean pemeriksaan aktif.
                    Silakan melakukan booking terlebih dahulu.

                </p>

                <a
                    href="{{ route('patient.appointments.index') }}"
                    class="btn-purple">

                    <i class="bi bi-calendar-plus me-1"></i>

                    Buat Booking

                </a>

            </div>

        @endif

    </section>

</main>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>