<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Konfirmasi Booking - Smart Clinic</title>

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
            --purple-light: #A78BFA;
            --lavender: #F3E8FF;
            --lavender-soft: #E9D5FF;

            --text: #2E1065;
            --muted: #7C6F91;

            --white: #FFFFFF;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;

            background: var(--lavender);

            color: var(--text);

            font-family:
                "Segoe UI",
                Arial,
                sans-serif;
        }


        /* ==============================
           SIDEBAR
        ============================== */

        .sidebar {
            position: fixed;

            top: 0;
            left: 0;

            width: 255px;
            height: 100vh;

            background:
                linear-gradient(
                    180deg,
                    #3B0764 0%,
                    #4C1D95 48%,
                    #6D28D9 100%
                );

            color: white;

            z-index: 1000;

            box-shadow:
                8px 0 30px rgba(59, 7, 100, .15);
        }


        .sidebar-brand {
            height: 80px;

            display: flex;
            align-items: center;

            padding: 0 25px;

            color: white;

            text-decoration: none;

            font-size: 21px;
            font-weight: 700;

            border-bottom:
                1px solid rgba(255,255,255,.12);
        }


        .sidebar-brand i {
            width: 42px;
            height: 42px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin-right: 11px;

            border-radius: 13px;

            background:
                rgba(255,255,255,.15);

            font-size: 23px;
        }


        .sidebar-content {
            padding: 25px 15px;
        }


        .sidebar-title {
            margin:
                10px 12px 12px;

            color:
                rgba(255,255,255,.55);

            font-size: 10px;
            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: 1px;
        }


        .sidebar-link {
            display: flex;
            align-items: center;

            padding: 13px 15px;

            margin-bottom: 7px;

            border-radius: 13px;

            color:
                rgba(255,255,255,.76);

            text-decoration: none;

            transition: .25s;
        }


        .sidebar-link i {
            width: 28px;

            margin-right: 10px;

            font-size: 18px;
        }


        .sidebar-link:hover {
            color: white;

            background:
                rgba(255,255,255,.11);

            transform:
                translateX(2px);
        }


        .sidebar-link.active {
            color: white;

            background:
                rgba(255,255,255,.18);

            box-shadow:
                0 8px 20px rgba(0,0,0,.12);
        }


        .logout-btn {
            font-family:
                "Segoe UI",
                Arial,
                sans-serif;

            cursor: pointer;
        }


        /* ==============================
           MAIN
        ============================== */

        .main {
            margin-left: 255px;

            min-height: 100vh;
        }


        /* ==============================
           TOPBAR
        ============================== */

        .topbar {
            height: 80px;

            padding: 0 32px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            background:
                linear-gradient(
                    90deg,
                    #6D28D9,
                    #7C3AED
                );

            color: white;

            box-shadow:
                0 5px 20px
                rgba(76,29,149,.16);
        }


        .topbar-title {
            margin: 0;

            font-size: 19px;
            font-weight: 700;
        }


        .topbar-subtitle {
            margin-top: 3px;

            color:
                rgba(255,255,255,.72);

            font-size: 12px;
        }


        .notification-btn {
            width: 43px;
            height: 43px;

            display: flex;
            align-items: center;
            justify-content: center;

            border:
                1px solid
                rgba(255,255,255,.2);

            border-radius: 13px;

            background:
                rgba(255,255,255,.13);

            color: white;

            text-decoration: none;

            transition: .2s;
        }


        .notification-btn:hover {
            background:
                rgba(255,255,255,.22);

            color: white;
        }


        .user-avatar {
            width: 43px;
            height: 43px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background:
                rgba(255,255,255,.18);

            color: white;

            font-size: 19px;
        }


        /* ==============================
           CONTENT
        ============================== */

        .content {
            padding: 30px;
        }


        /* ==============================
           PAGE HEADER
        ============================== */

        .page-header {
            position: relative;

            overflow: hidden;

            padding: 28px 30px;

            margin-bottom: 25px;

            border-radius: 22px;

            background:
                linear-gradient(
                    135deg,
                    #6D28D9,
                    #7C3AED,
                    #8B5CF6
                );

            color: white;

            box-shadow:
                0 12px 30px
                rgba(76,29,149,.16);
        }


        .page-header::after {
            content: "";

            position: absolute;

            width: 210px;
            height: 210px;

            right: -70px;
            top: -100px;

            border-radius: 50%;

            background:
                rgba(255,255,255,.09);
        }


        .page-icon {
            width: 58px;
            height: 58px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 17px;

            background:
                rgba(255,255,255,.16);

            color: white;

            font-size: 27px;
        }


        .page-header p {
            color:
                rgba(255,255,255,.75) !important;
        }


        /* ==============================
           BOOKING CARD
        ============================== */

        .booking-card {
            background: white;

            border:
                1px solid #E9D5FF;

            border-radius: 22px;

            padding: 30px;

            box-shadow:
                0 8px 28px
                rgba(76,29,149,.07);
        }


        /* ==============================
           DOCTOR
        ============================== */

        .doctor-header {
            display: flex;

            align-items: center;

            gap: 18px;

            padding: 22px;

            background:
                linear-gradient(
                    135deg,
                    #F3E8FF,
                    #EDE9FE
                );

            border:
                1px solid #DDD6FE;

            border-radius: 18px;

            margin-bottom: 28px;
        }


        .doctor-icon {
            width: 65px;
            height: 65px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 18px;

            background:
                linear-gradient(
                    135deg,
                    #DDD6FE,
                    #C4B5FD
                );

            color:
                var(--purple);

            font-size: 30px;

            flex-shrink: 0;
        }


        .doctor-label {
            color:
                var(--muted);

            font-size: 12px;

            margin-bottom: 4px;
        }


        .doctor-name {
            color:
                var(--text);

            font-size: 21px;

            font-weight: 700;

            margin-bottom: 4px;
        }


        .doctor-schedule {
            color:
                var(--muted);

            font-size: 13px;
        }


        /* ==============================
           SECTION
        ============================== */

        .section-title {
            margin-bottom: 7px;

            color:
                var(--text);

            font-size: 19px;

            font-weight: 700;
        }


        .section-subtitle {
            margin-bottom: 20px;

            color:
                var(--muted);

            font-size: 13px;
        }


        /* ==============================
           INFO CARD
        ============================== */

        .info-card {
            height: 100%;

            padding: 22px;

            background:
                #FAF7FF;

            border:
                1px solid #E9D5FF;

            border-radius: 18px;

            transition: .2s;
        }


        .info-card:hover {
            transform:
                translateY(-3px);

            box-shadow:
                0 10px 25px
                rgba(76,29,149,.07);
        }


        .info-icon {
            width: 48px;
            height: 48px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 14px;

            background:
                #E9D5FF;

            color:
                var(--purple);

            font-size: 21px;

            margin-bottom: 15px;
        }


        .info-label {
            color:
                var(--muted);

            font-size: 11px;

            margin-bottom: 5px;

            text-transform: uppercase;

            font-weight: 700;

            letter-spacing: .4px;
        }


        .info-value {
            color:
                var(--text);

            font-size: 16px;

            font-weight: 700;
        }


        /* ==============================
           DATE
        ============================== */

        .date-card {
            margin-top: 25px;

            padding: 25px;

            background:
                linear-gradient(
                    135deg,
                    #F3E8FF,
                    #FAF7FF
                );

            border:
                1px solid #DDD6FE;

            border-radius: 18px;
        }


        .date-title {
            display: flex;

            align-items: center;

            gap: 12px;

            margin-bottom: 20px;
        }


        .date-title-icon {
            width: 48px;
            height: 48px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 14px;

            background: white;

            color:
                var(--purple);

            font-size: 22px;

            box-shadow:
                0 5px 15px
                rgba(76,29,149,.06);
        }


        .date-title h5 {
            margin: 0 0 3px;

            color:
                var(--text);

            font-size: 17px;

            font-weight: 700;
        }


        .date-title p {
            margin: 0;

            color:
                var(--muted);

            font-size: 12px;
        }


        .form-label {
            color:
                var(--text);

            font-size: 13px;

            font-weight: 700;

            margin-bottom: 8px;
        }


        .form-control {
            min-height: 50px;

            border:
                1px solid #C4B5FD;

            border-radius: 12px;

            font-size: 13px;
        }


        .form-control:focus {
            border-color:
                var(--purple);

            box-shadow:
                0 0 0 .2rem
                rgba(124,58,237,.12);
        }


        .form-text {
            color:
                var(--muted);

            font-size: 11px;
        }


        /* ==============================
           BUTTON AREA
        ============================== */

        .button-area {
            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-top: 25px;

            padding-top: 22px;

            border-top:
                1px solid #DDD6FE;
        }


        .btn-back {
            padding: 10px 20px;

            border:
                1px solid #C4B5FD;

            border-radius: 12px;

            background: white;

            color:
                var(--purple-dark);

            text-decoration: none;

            font-size: 13px;

            font-weight: 600;

            transition: .2s;
        }


        .btn-back:hover {
            background:
                #EDE9FE;

            color:
                var(--purple-dark);
        }


        .btn-purple {
            padding: 11px 23px;

            border: none;

            border-radius: 12px;

            background:
                linear-gradient(
                    135deg,
                    #6D28D9,
                    #7C3AED
                );

            color: white;

            font-size: 13px;

            font-weight: 600;

            transition: .2s;

            box-shadow:
                0 7px 18px
                rgba(124,58,237,.18);
        }


        .btn-purple:hover {
            background:
                linear-gradient(
                    135deg,
                    #5B21B6,
                    #6D28D9
                );

            color: white;

            transform:
                translateY(-2px);
        }


        /* ==============================
           ALERT
        ============================== */

        .alert {
            border: none;

            border-radius: 13px;

            font-size: 13px;
        }


        /* ==============================
           FOOTER
        ============================== */

        .footer {
            padding:
                28px 0 10px;

            text-align: center;

            color:
                #8B7FA0;

            font-size: 12px;
        }


        /* ==============================
           MOBILE
        ============================== */

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

                padding: 13px;
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

            .booking-card {
                padding: 20px;
            }

            .doctor-header {
                padding: 18px;
            }

            .button-area {
                flex-direction: column;

                gap: 12px;

                align-items: stretch;
            }

            .btn-back,
            .btn-purple {
                width: 100%;

                text-align: center;
            }
        }

    </style>

</head>


<body>


<!-- =====================================================
     SIDEBAR
===================================================== -->

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


        <!-- DASHBOARD -->

        <a
            href="{{ route('patient.dashboard') }}"
            class="sidebar-link">

            <i class="bi bi-grid-1x2-fill"></i>

            <span>
                Dashboard
            </span>

        </a>


        <!-- BOOKING -->

        <a
            href="{{ route('patient.appointments.index') }}"
            class="sidebar-link active">

            <i class="bi bi-calendar-check-fill"></i>

            <span>
                Booking Konsultasi
            </span>

        </a>


        <!-- ANTREAN -->

        <a
            href="{{ route('patient.queue.index') }}"
            class="sidebar-link">

            <i class="bi bi-people-fill"></i>

            <span>
                Antrean Saya
            </span>

        </a>


        <!-- RIWAYAT -->

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


        <!-- QR -->

        <a
            href="{{ route('patient.qr') }}"
            class="sidebar-link">

            <i class="bi bi-qr-code"></i>

            <span>
                QR Antrean
            </span>

        </a>


        <!-- NOTIFIKASI -->

        <a
            href="{{ route('notifications.index') }}"
            class="sidebar-link">

            <i class="bi bi-bell-fill"></i>

            <span>
                Notifikasi
            </span>

        </a>


        <div class="sidebar-title">
            Akun
        </div>


        <!-- LOGOUT -->

        <form
            method="POST"
            action="{{ route('logout') }}">

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



<!-- =====================================================
     MAIN
===================================================== -->

<main class="main">


    <!-- TOPBAR -->

    <header class="topbar">


        <div>

            <h5 class="topbar-title">
                Konfirmasi Booking
            </h5>

            <div class="topbar-subtitle">
                Konfirmasi jadwal konsultasi Anda
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
                class="notification-btn position-relative">

                <i class="bi bi-bell-fill"></i>


                @if($unreadNotifications > 0)

                    <span
                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">

                        {{ $unreadNotifications }}

                    </span>

                @endif

            </a>


            <div class="d-flex align-items-center">


                <div class="user-avatar">

                    <i class="bi bi-person-fill"></i>

                </div>


                <div class="ms-2 d-none d-md-block">

                    <div class="fw-semibold text-white">

                        {{ auth()->user()->name }}

                    </div>

                    <small
                        style="color: rgba(255,255,255,.7);">

                        Pasien

                    </small>

                </div>

            </div>

        </div>

    </header>



    <!-- CONTENT -->

    <section class="content">


        <!-- PAGE HEADER -->

        <div class="page-header">

            <div class="d-flex align-items-center">

                <div class="page-icon">

                    <i class="bi bi-calendar-check-fill"></i>

                </div>


                <div class="ms-3">

                    <h2 class="fw-bold mb-1">

                        Konfirmasi Booking

                    </h2>


                    <p class="mb-0">

                        Pastikan dokter dan tanggal konsultasi
                        sudah sesuai sebelum melakukan booking.

                    </p>

                </div>

            </div>

        </div>



        @if($errors->any())

            <div class="alert alert-danger mb-4">

                <i class="bi bi-exclamation-circle-fill me-2"></i>

                {{ $errors->first() }}

            </div>

        @endif



        <!-- BOOKING CARD -->

        <div class="booking-card">


            <!-- DOCTOR -->

            <div class="doctor-header">


                <div class="doctor-icon">

                    <i class="bi bi-person-badge-fill"></i>

                </div>


                <div>

                    <div class="doctor-label">

                        Dokter yang dipilih

                    </div>


                    <div class="doctor-name">

                        {{ $doctorSchedule->doctor->name }}

                    </div>


                    <div class="doctor-schedule">

                        <i class="bi bi-calendar3 me-1"></i>

                        {{ $doctorSchedule->day }}

                        <span class="mx-2">
                            •
                        </span>

                        <i class="bi bi-clock-fill me-1"></i>

                        {{ \Carbon\Carbon::parse($doctorSchedule->start_time)->format('H:i') }}

                        -

                        {{ \Carbon\Carbon::parse($doctorSchedule->end_time)->format('H:i') }}

                        WIB

                    </div>

                </div>

            </div>



            <!-- INFORMATION -->

            <h4 class="section-title">

                Informasi Jadwal

            </h4>


            <p class="section-subtitle">

                Pastikan jadwal yang Anda pilih sudah sesuai.

            </p>



            <div class="row g-4">


                <!-- HARI -->

                <div class="col-md-6">

                    <div class="info-card">

                        <div class="info-icon">

                            <i class="bi bi-calendar3-fill"></i>

                        </div>


                        <div class="info-label">

                            Hari Praktik

                        </div>


                        <div class="info-value">

                            {{ $doctorSchedule->day }}

                        </div>

                    </div>

                </div>



                <!-- JAM -->

                <div class="col-md-6">

                    <div class="info-card">

                        <div class="info-icon">

                            <i class="bi bi-clock-fill"></i>

                        </div>


                        <div class="info-label">

                            Jam Praktik

                        </div>


                        <div class="info-value">

                            {{ \Carbon\Carbon::parse($doctorSchedule->start_time)->format('H:i') }}

                            -

                            {{ \Carbon\Carbon::parse($doctorSchedule->end_time)->format('H:i') }}

                            WIB

                        </div>

                    </div>

                </div>

            </div>



            <!-- DATE -->

            <div class="date-card">


                <div class="date-title">


                    <div class="date-title-icon">

                        <i class="bi bi-calendar-heart-fill"></i>

                    </div>


                    <div>

                        <h5>

                            Pilih Tanggal Konsultasi

                        </h5>


                        <p>

                            Pilih tanggal yang sesuai
                            dengan jadwal Anda.

                        </p>

                    </div>

                </div>



                <!-- FORM -->

                <form
                    method="POST"
                    action="{{ route('patient.appointments.store') }}">

                    @csrf


                    <input
                        type="hidden"
                        name="doctor_schedule_id"
                        value="{{ $doctorSchedule->id }}">


                    <label
                        for="appointment_date"
                        class="form-label">

                        Tanggal Konsultasi

                    </label>


                    <input
                        type="date"
                        id="appointment_date"
                        name="appointment_date"
                        class="form-control"
                        value="{{ old('appointment_date') }}"
                        min="{{ date('Y-m-d') }}"
                        required>


                    <div class="form-text mt-2">

                        <i class="bi bi-info-circle-fill me-1"></i>

                        Pilih tanggal konsultasi yang Anda inginkan.

                    </div>


                    @error('appointment_date')

                        <div class="text-danger mt-2 small">

                            {{ $message }}

                        </div>

                    @enderror



                    <!-- BUTTON -->

                    <div class="button-area">


                        <a
                            href="{{ route('patient.appointments.index') }}"
                            class="btn-back">

                            <i class="bi bi-arrow-left me-1"></i>

                            Kembali

                        </a>


                        <button
                            type="submit"
                            class="btn-purple">

                            <i class="bi bi-calendar-check-fill me-1"></i>

                            Konfirmasi Booking

                        </button>

                    </div>


                </form>

            </div>


        </div>



        <!-- FOOTER -->

        <div class="footer">

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