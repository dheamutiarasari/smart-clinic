<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>QR Antrean - Smart Clinic</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
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

        /* SIDEBAR */

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;

            width: 250px;
            height: 100vh;

            background:
                linear-gradient(
                    180deg,
                    #3B0764,
                    #4C1D95
                );

            color: white;

            z-index: 1000;

            box-shadow:
                8px 0 25px rgba(59, 7, 100, .15);
        }

        .sidebar-brand {
            height: 75px;

            display: flex;
            align-items: center;

            padding: 0 25px;

            text-decoration: none;

            color: white;

            font-size: 20px;
            font-weight: 700;

            border-bottom:
                1px solid rgba(255,255,255,.12);
        }

        .sidebar-brand i {
            font-size: 27px;
            margin-right: 10px;
        }

        .sidebar-content {
            padding: 22px 15px;
        }

        .sidebar-title {
            margin: 18px 10px 10px;

            color: #C4B5FD;

            font-size: 10px;
            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: 1px;
        }

        .sidebar-link {
            display: flex;
            align-items: center;

            width: 100%;

            padding: 12px 15px;
            margin-bottom: 6px;

            border: none;
            border-radius: 12px;

            color: #E9D5FF;

            text-decoration: none;

            transition: .25s;
        }

        .sidebar-link i {
            width: 25px;

            margin-right: 10px;

            font-size: 18px;
        }

        .sidebar-link:hover {
            background: rgba(255,255,255,.12);
            color: white;
        }

        .sidebar-link.active {
            background:
                linear-gradient(
                    135deg,
                    #A78BFA,
                    #7C3AED
                );

            color: white;

            box-shadow:
                0 8px 20px rgba(0,0,0,.18);
        }

        .logout-btn {
            color: #DDD6FE;
        }

        .logout-btn:hover {
            background: rgba(255,255,255,.10);
            color: white;
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

            background:
                linear-gradient(
                    90deg,
                    #6D28D9,
                    #7C3AED,
                    #8B5CF6
                );

            color: white;

            box-shadow:
                0 5px 20px rgba(76,29,149,.18);
        }

        .topbar-title {
            margin: 0;

            font-size: 18px;
            font-weight: 700;
        }

        .topbar-subtitle {
            margin-top: 3px;

            color: #E9D5FF;

            font-size: 13px;
        }

        .notification-btn {
            position: relative;

            width: 42px;
            height: 42px;

            display: flex;
            align-items: center;
            justify-content: center;

            border:
                1px solid rgba(255,255,255,.25);

            border-radius: 12px;

            background:
                rgba(255,255,255,.14);

            color: white;

            text-decoration: none;
        }

        .notification-btn:hover {
            background:
                rgba(255,255,255,.23);

            color: white;
        }

        .notification-badge {
            position: absolute;

            top: -4px;
            right: -4px;

            min-width: 19px;
            height: 19px;

            padding: 0 5px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 20px;

            background: #EF4444;

            color: white;

            border: 2px solid #7C3AED;

            font-size: 10px;
            font-weight: 700;
        }

        .user-avatar {
            width: 42px;
            height: 42px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background:
                rgba(255,255,255,.18);

            color: white;

            font-size: 18px;
            font-weight: 700;
        }

        /* CONTENT */

        .content {
            padding: 30px;
        }

        /* PAGE HEADER */

        .page-header {
            position: relative;

            overflow: hidden;

            padding: 30px;

            margin-bottom: 25px;

            border-radius: 22px;

            color: white;

            background:
                linear-gradient(
                    135deg,
                    #4C1D95,
                    #6D28D9,
                    #8B5CF6
                );

            box-shadow:
                0 15px 35px rgba(76,29,149,.25);
        }

        .page-header::before {
            content: "";

            position: absolute;

            width: 230px;
            height: 230px;

            right: -80px;
            top: -100px;

            border-radius: 50%;

            background:
                rgba(255,255,255,.10);
        }

        .page-header::after {
            content: "";

            position: absolute;

            width: 130px;
            height: 130px;

            right: 120px;
            bottom: -80px;

            border-radius: 50%;

            background:
                rgba(255,255,255,.08);
        }

        .page-header-content {
            position: relative;
            z-index: 2;
        }

        .page-header h2 {
            margin-bottom: 8px;

            font-size: 22px;
            font-weight: 700;
        }

        .page-header p {
            margin: 0;

            color: #E9D5FF;

            font-size: 14px;
        }

        .page-header-icon {
            position: relative;

            z-index: 2;

            width: 80px;
            height: 80px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 22px;

            background:
                rgba(255,255,255,.15);

            border:
                1px solid rgba(255,255,255,.15);

            font-size: 36px;
        }

        /* QR CARD */

        .qr-card {
            max-width: 920px;

            margin: 0 auto;

            overflow: hidden;

            background:
                linear-gradient(
                    145deg,
                    #FFFFFF,
                    #F5F3FF
                );

            border:
                1px solid #DDD6FE;

            border-radius: 20px;

            box-shadow:
                0 6px 22px rgba(76,29,149,.07);
        }

        .qr-card-header {
            padding: 20px 24px;

            background:
                linear-gradient(
                    135deg,
                    #F5F3FF,
                    #E9D5FF
                );

            border-bottom:
                1px solid #DDD6FE;
        }

        .qr-card-body {
            padding: 28px;
        }

        /* QR PANEL */

        .qr-panel {
            padding: 28px 20px;

            text-align: center;

            background:
                linear-gradient(
                    145deg,
                    #F5F3FF,
                    #E9D5FF
                );

            border:
                1px solid #DDD6FE;

            border-radius: 18px;
        }

        .queue-label {
            color: var(--muted);

            font-size: 11px;
            font-weight: 700;

            letter-spacing: 1px;
        }

        .queue-number {
            margin: 8px 0 10px;

            color: var(--purple);

            font-size: 60px;
            line-height: 1;

            font-weight: 800;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;

            padding: 8px 14px;

            border-radius: 20px;

            background: #DDD6FE;

            color: var(--purple-dark);

            font-size: 12px;
            font-weight: 700;
        }

        .qr-image {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            margin-top: 10px;

            padding: 15px;

            background: white;

            border:
                1px solid #DDD6FE;

            border-radius: 16px;

            box-shadow:
                0 5px 15px rgba(76,29,149,.06);
        }

        .qr-image svg {
            display: block;

            max-width: 100%;
            height: auto;
        }

        .qr-caption {
            margin-top: 16px;

            color: var(--muted);

            font-size: 12px;
        }

        /* DETAILS */

        .detail-title {
            margin-bottom: 4px;

            color: var(--purple-dark);

            font-size: 18px;
            font-weight: 800;
        }

        .detail-subtitle {
            color: var(--muted);

            font-size: 13px;
        }

        .detail-item {
            display: flex;
            align-items: flex-start;

            padding: 14px 0;

            border-bottom:
                1px solid #DDD6FE;
        }

        .detail-item:last-child {
            border-bottom: none;
        }

        .detail-icon {
            width: 42px;
            height: 42px;

            flex-shrink: 0;

            display: flex;
            align-items: center;
            justify-content: center;

            margin-right: 13px;

            border-radius: 12px;

            background:
                linear-gradient(
                    135deg,
                    #E9D5FF,
                    #C4B5FD
                );

            color: var(--purple-dark);

            font-size: 18px;
        }

        .detail-label {
            margin-bottom: 3px;

            color: var(--muted);

            font-size: 11px;
            font-weight: 700;

            text-transform: uppercase;
        }

        .detail-value {
            color: var(--text);

            font-size: 14px;
            font-weight: 600;

            overflow-wrap: anywhere;
        }

        /* INFO */

        .info-box {
            display: flex;
            align-items: flex-start;

            gap: 10px;

            padding: 16px 18px;

            margin-top: 22px;

            background:
                linear-gradient(
                    135deg,
                    #E9D5FF,
                    #DDD6FE
                );

            border:
                1px solid #C4B5FD;

            border-radius: 14px;

            color: var(--purple-dark);

            font-size: 13px;

            line-height: 1.6;
        }

        .info-box i {
            flex-shrink: 0;

            font-size: 17px;

            margin-top: 2px;
        }

        /* BUTTON */

        .btn-purple {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            padding: 10px 17px;

            border: none;

            border-radius: 11px;

            background:
                linear-gradient(
                    135deg,
                    #6D28D9,
                    #8B5CF6
                );

            color: white;

            text-decoration: none;

            font-size: 13px;
            font-weight: 600;

            transition: .2s;
        }

        .btn-purple:hover {
            color: white;

            transform: translateY(-1px);

            box-shadow:
                0 6px 15px rgba(124,58,237,.25);
        }

        .btn-outline-purple {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            padding: 9px 16px;

            border:
                1px solid #C4B5FD;

            border-radius: 11px;

            background: #F5F3FF;

            color: var(--purple-dark);

            text-decoration: none;

            font-size: 13px;
            font-weight: 600;

            transition: .2s;
        }

        .btn-outline-purple:hover {
            background: #E9D5FF;

            color: var(--purple-dark);
        }

        /* EMPTY */

        .empty-card {
            max-width: 800px;

            margin: 0 auto;

            padding: 65px 25px;

            text-align: center;

            background:
                linear-gradient(
                    145deg,
                    #FFFFFF,
                    #F5F3FF
                );

            border:
                1px solid #DDD6FE;

            border-radius: 20px;

            box-shadow:
                0 6px 22px rgba(76,29,149,.06);
        }

        .empty-icon {
            width: 78px;
            height: 78px;

            margin: 0 auto;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 22px;

            background:
                linear-gradient(
                    135deg,
                    #E9D5FF,
                    #C4B5FD
                );

            color: var(--purple-dark);

            font-size: 34px;
        }

        .empty-card h3 {
            margin-top: 20px;

            color: var(--purple-dark);

            font-size: 20px;
        }

        .empty-card p {
            max-width: 480px;

            margin: 8px auto 22px;

            color: var(--muted);

            font-size: 14px;

            line-height: 1.7;
        }

        /* FOOTER */

        .page-footer {
            padding: 25px 0 8px;

            text-align: center;

            color: #80699D;

            font-size: 12px;
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

                padding: 13px 8px;
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

            .topbar-subtitle {
                display: none;
            }

            .content {
                padding: 20px 15px;
            }

            .page-header {
                padding: 24px;

                border-radius: 18px;
            }

            .page-header h2 {
                font-size: 19px;
            }

            .page-header-icon {
                display: none;
            }

            .qr-card-body {
                padding: 18px;
            }

            .qr-card-header {
                padding: 17px 18px;
            }

            .qr-panel {
                padding: 25px 15px;
            }

            .queue-number {
                font-size: 52px;
            }

            .qr-image {
                padding: 11px;
            }

            .btn-purple,
            .btn-outline-purple {
                width: 100%;
            }

            .no-print {
                display: flex;

                flex-direction: column;
            }

        }

        @media (max-width: 430px) {

            .sidebar {
                display: none;
            }

            .main {
                margin-left: 0;
            }

            .topbar {
                height: 68px;

                padding: 0 14px;
            }

            .content {
                padding: 14px;
            }

            .page-header {
                padding: 20px;
            }

            .qr-card {
                border-radius: 17px;
            }

            .qr-card-body {
                padding: 14px;
            }

            .queue-number {
                font-size: 48px;
            }

            .detail-item {
                padding: 12px 0;
            }

            .detail-icon {
                width: 38px;
                height: 38px;

                margin-right: 10px;
            }

        }

        /* PRINT */

        @media print {

            body {
                background: white;
            }

            .sidebar,
            .topbar,
            .page-header,
            .no-print,
            .page-footer {
                display: none !important;
            }

            .main {
                margin-left: 0;
            }

            .content {
                padding: 0;
            }

            .qr-card {
                max-width: 100%;

                border: 1px solid #ddd;

                box-shadow: none;
            }

            .qr-card-body {
                padding: 20px;
            }

        }

    </style>

</head>

<body>


<!-- SIDEBAR -->

<aside class="sidebar">

    <a
        href="{{ route('patient.dashboard') }}"
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


        <a
            href="{{ route('patient.dashboard') }}"
            class="sidebar-link">

            <i class="bi bi-grid-1x2"></i>

            <span>
                Dashboard
            </span>

        </a>


        <a
            href="{{ route('patient.appointments.index') }}"
            class="sidebar-link">

            <i class="bi bi-calendar-check"></i>

            <span>
                Booking Konsultasi
            </span>

        </a>


        <a
            href="{{ route('patient.queue.index') }}"
            class="sidebar-link">

            <i class="bi bi-people"></i>

            <span>
                Antrean Saya
            </span>

        </a>


        <a
            href="{{ route('patient.history.index') }}"
            class="sidebar-link">

            <i class="bi bi-clock-history"></i>

            <span>
                Riwayat Pemeriksaan
            </span>

        </a>


        <div class="sidebar-title">
            Layanan
        </div>


        <a
            href="{{ route('patient.qr') }}"
            class="sidebar-link active">

            <i class="bi bi-qr-code"></i>

            <span>
                QR Antrean
            </span>

        </a>


        <a
            href="{{ route('notifications.index') }}"
            class="sidebar-link">

            <i class="bi bi-bell"></i>

            <span>
                Notifikasi
            </span>

        </a>


        <div class="sidebar-title">
            Akun
        </div>


        <form
            method="POST"
            action="{{ route('logout') }}">

            @csrf

            <button
                type="submit"
                class="sidebar-link logout-btn bg-transparent text-start">

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
                QR Antrean
            </h5>

            <div class="topbar-subtitle">
                Kartu digital antrean pemeriksaan Anda
            </div>

        </div>


        <div class="d-flex align-items-center gap-3">

            @php

                $unreadNotifications =
                    \App\Models\Notification::where(
                        'user_id',
                        auth()->id()
                    )
                    ->where('is_read', false)
                    ->count();

            @endphp


            <a
                href="{{ route('notifications.index') }}"
                class="notification-btn">

                <i class="bi bi-bell"></i>

                @if($unreadNotifications > 0)

                    <span class="notification-badge">

                        {{ $unreadNotifications }}

                    </span>

                @endif

            </a>


            <div class="user-avatar">

                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

            </div>

        </div>

    </header>


    <!-- CONTENT -->

    <section class="content">


        <!-- PAGE HEADER -->

        <div class="page-header">

            <div class="row align-items-center">

                <div class="col-md-9 page-header-content">

                    <h2>

                        <i class="bi bi-qr-code me-2"></i>

                        QR Antrean

                    </h2>

                    <p>

                        Tunjukkan QR ini kepada petugas saat
                        melakukan pemeriksaan.

                    </p>

                </div>


                <div class="col-md-3 d-flex justify-content-end">

                    <div class="page-header-icon">

                        <i class="bi bi-qr-code"></i>

                    </div>

                </div>

            </div>

        </div>


        @if($appointment)


            <!-- QR CARD -->

            <div class="qr-card">


                <div class="qr-card-header">

                    <div class="d-flex align-items-center">

                        <i
                            class="bi bi-shield-check me-2 fs-4"
                            style="color:var(--purple);">
                        </i>

                        <div>

                            <div
                                class="fw-bold"
                                style="color:var(--purple-dark);">

                                Kartu Antrean Digital

                            </div>

                            <small style="color:var(--muted);">

                                Smart Clinic

                            </small>

                        </div>

                    </div>

                </div>


                <div class="qr-card-body">

                    <div class="row g-4 align-items-center">


                        <!-- QR -->

                        <div class="col-lg-5">

                            <div class="qr-panel">

                                <div class="queue-label">
                                    NOMOR ANTREAN
                                </div>


                                <div class="queue-number">

                                    {{ $appointment->queue_number }}

                                </div>


                                @if($appointment->status === 'booked')

                                    <span class="status-badge">

                                        <i
                                            class="bi bi-hourglass-split me-1">
                                        </i>

                                        Menunggu

                                    </span>

                                @elseif($appointment->status === 'called')

                                    <span
                                        class="status-badge"
                                        style="
                                            background:#DCFCE7;
                                            color:#15803D;
                                        ">

                                        <i
                                            class="bi bi-megaphone me-1">
                                        </i>

                                        Dipanggil

                                    </span>

                                @elseif($appointment->status === 'serving')

                                    <span
                                        class="status-badge"
                                        style="
                                            background:#FEF3C7;
                                            color:#92400E;
                                        ">

                                        <i
                                            class="bi bi-person-check me-1">
                                        </i>

                                        Sedang Dilayani

                                    </span>

                                @else

                                    <span class="status-badge">

                                        {{ ucfirst($appointment->status) }}

                                    </span>

                                @endif


                                <div class="qr-image">

                                    {!! QrCode::size(230)->generate(
                                        'SMART-CLINIC-APPOINTMENT-' .
                                        $appointment->id
                                    ) !!}

                                </div>


                                <div class="qr-caption">

                                    <i
                                        class="bi bi-qr-code me-1">
                                    </i>

                                    QR Code identitas booking Anda

                                </div>

                            </div>

                        </div>


                        <!-- DETAILS -->

                        <div class="col-lg-7">

                            <div class="detail-title">

                                Detail Booking

                            </div>

                            <div class="detail-subtitle mb-2">

                                Informasi jadwal pemeriksaan Anda

                            </div>


                            <!-- PATIENT -->

                            <div class="detail-item">

                                <div class="detail-icon">

                                    <i class="bi bi-person"></i>

                                </div>

                                <div>

                                    <div class="detail-label">

                                        Nama Pasien

                                    </div>

                                    <div class="detail-value">

                                        {{ auth()->user()->name }}

                                    </div>

                                </div>

                            </div>


                            <!-- DOCTOR -->

                            <div class="detail-item">

                                <div class="detail-icon">

                                    <i class="bi bi-person-badge"></i>

                                </div>

                                <div>

                                    <div class="detail-label">

                                        Dokter

                                    </div>

                                    <div class="detail-value">

                                        {{ $appointment->doctorSchedule->doctor->name ?? '-' }}

                                    </div>

                                </div>

                            </div>


                            <!-- DATE -->

                            <div class="detail-item">

                                <div class="detail-icon">

                                    <i class="bi bi-calendar3"></i>

                                </div>

                                <div>

                                    <div class="detail-label">

                                        Tanggal Pemeriksaan

                                    </div>

                                    <div class="detail-value">

                                        {{ $appointment->appointment_date->format('d-m-Y') }}

                                    </div>

                                </div>

                            </div>


                            <!-- DAY -->

                            <div class="detail-item">

                                <div class="detail-icon">

                                    <i class="bi bi-calendar-week"></i>

                                </div>

                                <div>

                                    <div class="detail-label">

                                        Hari Praktik

                                    </div>

                                    <div class="detail-value">

                                        {{ $appointment->doctorSchedule->day ?? '-' }}

                                    </div>

                                </div>

                            </div>


                            <!-- TIME -->

                            <div class="detail-item">

                                <div class="detail-icon">

                                    <i class="bi bi-clock"></i>

                                </div>

                                <div>

                                    <div class="detail-label">

                                        Jam Praktik

                                    </div>

                                    <div class="detail-value">

                                        {{
                                            \Carbon\Carbon::parse(
                                                $appointment
                                                    ->doctorSchedule
                                                    ->start_time
                                            )->format('H:i')
                                        }}

                                        -

                                        {{
                                            \Carbon\Carbon::parse(
                                                $appointment
                                                    ->doctorSchedule
                                                    ->end_time
                                            )->format('H:i')
                                        }}

                                        WIB

                                    </div>

                                </div>

                            </div>


                            <!-- BOOKING ID -->

                            <div class="detail-item">

                                <div class="detail-icon">

                                    <i
                                        class="bi bi-ticket-perforated">
                                    </i>

                                </div>

                                <div>

                                    <div class="detail-label">

                                        ID Booking

                                    </div>

                                    <div class="detail-value">

                                        SC-{{
                                            str_pad(
                                                $appointment->id,
                                                5,
                                                '0',
                                                STR_PAD_LEFT
                                            )
                                        }}

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- INFO -->

                    <div class="info-box">

                        <i class="bi bi-info-circle-fill"></i>

                        <div>

                            Simpan atau tunjukkan QR Code ini kepada
                            petugas klinik. QR ini merupakan identitas
                            booking, bukan bukti bahwa pemeriksaan
                            telah selesai.

                        </div>

                    </div>


                    <!-- BUTTONS -->

                    <div
                        class="d-flex flex-wrap gap-2 mt-4 no-print">

                        <button
                            type="button"
                            onclick="window.print()"
                            class="btn-purple">

                            <i class="bi bi-printer me-1"></i>

                            Cetak QR

                        </button>


                        <a
                            href="{{ route('patient.queue.index') }}"
                            class="btn-outline-purple">

                            <i class="bi bi-people me-1"></i>

                            Lihat Antrean

                        </a>


                        <a
                            href="{{ route('patient.dashboard') }}"
                            class="btn-outline-purple">

                            <i class="bi bi-arrow-left me-1"></i>

                            Dashboard

                        </a>

                    </div>

                </div>

            </div>


        @else


            <!-- EMPTY -->

            <div class="empty-card">

                <div class="empty-icon">

                    <i class="bi bi-qr-code"></i>

                </div>


                <h3 class="fw-bold">

                    Belum Ada QR Antrean

                </h3>


                <p>

                    Anda belum memiliki booking aktif.
                    Silakan buat booking terlebih dahulu
                    untuk mendapatkan QR antrean.

                </p>


                <a
                    href="{{ route('patient.appointments.index') }}"
                    class="btn-purple">

                    <i class="bi bi-calendar-plus me-1"></i>

                    Buat Booking

                </a>

            </div>

        @endif


        <!-- FOOTER -->

        <div class="page-footer">

            © {{ date('Y') }}

            <strong>
                Smart Clinic
            </strong>

            — Digital Healthcare & Queue System

        </div>


    </section>

</main>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>

</html>