<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Pasien - Smart Clinic</title>

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
                    var(--purple-dark),
                    var(--purple-deep)
                );
            color: white;
            z-index: 1000;
            box-shadow: 8px 0 25px rgba(59, 7, 100, .15);
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
            padding: 12px 15px;
            margin-bottom: 6px;
            border-radius: 12px;
            color: #E9D5FF;
            text-decoration: none;
            border: none;
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
            background: linear-gradient(
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
            background: rgba(255,255,255,.10) !important;
            color: white !important;
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
            font-size: 13px;
            color: #E9D5FF;
        }

        .notification-btn {
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;

            border: 1px solid rgba(255,255,255,.25);
            border-radius: 12px;

            background: rgba(255,255,255,.14);
            color: white;

            text-decoration: none;
            transition: .2s;
        }

        .notification-btn:hover {
            background: rgba(255,255,255,.23);
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

            border: 1px solid rgba(255,255,255,.2);
        }

        /* CONTENT */

        .content {
            padding: 30px;
        }

        /* WELCOME */

        .welcome-card {
            position: relative;
            overflow: hidden;

            padding: 30px;
            margin-bottom: 25px;

            border-radius: 22px;

            background:
                linear-gradient(
                    135deg,
                    #4C1D95,
                    #6D28D9,
                    #8B5CF6
                );

            color: white;

            box-shadow:
                0 15px 35px rgba(76,29,149,.25);
        }

        .welcome-card::before {
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

        .welcome-card::after {
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

        .welcome-content {
            position: relative;
            z-index: 2;
        }

        .welcome-card h2 {
            font-weight: 700;
        }

        .welcome-card p {
            margin-bottom: 0;
            color: #E9D5FF;
        }

        .welcome-icon {
            position: relative;
            z-index: 2;

            width: 90px;
            height: 90px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 25px;

            background:
                rgba(255,255,255,.15);

            border:
                1px solid rgba(255,255,255,.15);

            font-size: 42px;
        }

        /* STATISTICS */

        .stat-card {
            height: 100%;
            padding: 22px;

            background:
                linear-gradient(
                    145deg,
                    #FFFFFF,
                    #F5F3FF
                );

            border:
                1px solid #DDD6FE;

            border-radius: 18px;

            transition: .25s;

            box-shadow:
                0 5px 18px rgba(76,29,149,.06);
        }

        .stat-card:hover {
            transform: translateY(-4px);

            border-color:
                #A78BFA;

            box-shadow:
                0 14px 28px rgba(76,29,149,.12);
        }

        .stat-icon {
            width: 48px;
            height: 48px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 14px;

            background:
                linear-gradient(
                    135deg,
                    #E9D5FF,
                    #DDD6FE
                );

            color: var(--purple);

            font-size: 22px;
        }

        .stat-label {
            margin-top: 18px;

            color: var(--muted);

            font-size: 13px;
        }

        .stat-value {
            margin-top: 3px;

            font-size: 24px;
            font-weight: 800;

            color: var(--purple-dark);
        }

        /* SECTION */

        .section-title {
            margin-top: 32px;
            margin-bottom: 6px;

            font-size: 20px;
            font-weight: 800;

            color: var(--purple-dark);
        }

        .section-subtitle {
            margin-bottom: 20px;

            color: var(--muted);
            font-size: 13px;
        }

        /* SERVICES */

        .service-card {
            height: 100%;
            padding: 24px;

            display: block;

            background:
                linear-gradient(
                    145deg,
                    #FFFFFF,
                    #F5F3FF
                );

            border:
                1px solid #DDD6FE;

            border-radius: 18px;

            text-decoration: none;

            color: var(--text);

            transition: .25s;

            box-shadow:
                0 5px 18px rgba(76,29,149,.05);
        }

        .service-card:hover {
            transform: translateY(-5px);

            border-color:
                #A78BFA;

            box-shadow:
                0 15px 30px rgba(76,29,149,.12);

            color: var(--text);
        }

        .service-icon {
            width: 55px;
            height: 55px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 16px;

            background:
                linear-gradient(
                    135deg,
                    #E9D5FF,
                    #C4B5FD
                );

            color: var(--purple-dark);

            font-size: 25px;

            margin-bottom: 18px;
        }

        .service-card h5 {
            font-size: 16px;
            font-weight: 700;

            margin-bottom: 7px;

            color: var(--purple-dark);
        }

        .service-card p {
            margin: 0;

            color: var(--muted);

            font-size: 13px;
            line-height: 1.6;
        }

        .service-arrow {
            margin-top: 18px;

            color: var(--purple);

            font-size: 18px;
        }

        /* BOOKING */

        .booking-card {
            margin-top: 25px;

            padding: 25px;

            background:
                linear-gradient(
                    135deg,
                    #E9D5FF,
                    #DDD6FE
                );

            border:
                1px solid #C4B5FD;

            border-radius: 18px;
        }

        .booking-icon {
            width: 55px;
            height: 55px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 15px;

            background:
                #7C3AED;

            color: white;

            font-size: 25px;

            box-shadow:
                0 8px 18px rgba(124,58,237,.20);
        }

        .btn-purple {
            display: inline-block;

            padding: 11px 20px;

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

            font-weight: 700;

            box-shadow:
                0 7px 16px rgba(109,40,217,.20);

            transition: .2s;
        }

        .btn-purple:hover {
            background:
                linear-gradient(
                    135deg,
                    #5B21B6,
                    #7C3AED
                );

            color: white;

            transform: translateY(-2px);
        }

        /* FOOTER */

        .footer {
            padding: 30px 0 10px;

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

            .welcome-card {
                padding: 24px;
            }

            .welcome-icon {
                display: none;
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
            class="sidebar-link active">

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
            class="sidebar-link">

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
                class="sidebar-link logout-btn bg-transparent w-100 text-start">

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
                Dashboard Pasien
            </h5>

            <div class="topbar-subtitle">
                Selamat datang kembali di Smart Clinic
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
                class="notification-btn position-relative">

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

                    <small style="color:#E9D5FF;">
                        Pasien
                    </small>

                </div>

            </div>

        </div>

    </header>


    <!-- CONTENT -->

    <section class="content">

        <!-- WELCOME -->

        <div class="welcome-card">

            <div class="row align-items-center">

                <div class="col-md-9 welcome-content">

                    <h2 class="mb-2">
                        Halo, {{ auth()->user()->name }}! 👋
                    </h2>

                    <p>
                        Selamat datang di
                        <strong>Smart Clinic</strong>.
                        Kelola booking, antrean,
                        dan riwayat pemeriksaan
                        Anda dengan mudah.
                    </p>

                </div>

                <div class="col-md-3 d-flex justify-content-end">

                    <div class="welcome-icon">

                        <i class="bi bi-heart-pulse"></i>

                    </div>

                </div>

            </div>

        </div>


        <!-- STATISTICS -->

        <div class="row g-4">

            <div class="col-md-4">

                <div class="stat-card">

                    <div class="stat-icon">
                        <i class="bi bi-calendar-check"></i>
                    </div>

                    <div class="stat-label">
                        Booking Aktif
                    </div>

                    <div class="stat-value">

                        @php
                            $activeAppointments =
                                \App\Models\Appointment::where(
                                    'patient_id',
                                    auth()->id()
                                )
                                ->whereIn(
                                    'status',
                                    [
                                        'booked',
                                        'called',
                                        'serving'
                                    ]
                                )
                                ->count();
                        @endphp

                        {{ $activeAppointments }}

                    </div>

                </div>

            </div>


            <div class="col-md-4">

                <div class="stat-card">

                    <div class="stat-icon">
                        <i class="bi bi-bell"></i>
                    </div>

                    <div class="stat-label">
                        Notifikasi Belum Dibaca
                    </div>

                    <div class="stat-value">
                        {{ $unreadNotifications }}
                    </div>

                </div>

            </div>


            <div class="col-md-4">

                <div class="stat-card">

                    <div class="stat-icon">
                        <i class="bi bi-clock-history"></i>
                    </div>

                    <div class="stat-label">
                        Riwayat Pemeriksaan
                    </div>

                    <div class="stat-value">

                        @php
                            $historyCount =
                                \App\Models\MedicalRecord::where(
                                    'patient_id',
                                    auth()->id()
                                )
                                ->count();
                        @endphp

                        {{ $historyCount }}

                    </div>

                </div>

            </div>

        </div>


        <!-- SERVICES -->

        <h4 class="section-title">
            Layanan Smart Clinic
        </h4>

        <p class="section-subtitle">
            Akses fitur kesehatan Anda dengan cepat.
        </p>

        <div class="row g-4">

            <div class="col-md-6 col-xl-4">

                <a
                    href="{{ route('patient.appointments.index') }}"
                    class="service-card">

                    <div class="service-icon">
                        <i class="bi bi-calendar2-plus"></i>
                    </div>

                    <h5>
                        Booking Konsultasi
                    </h5>

                    <p>
                        Pilih dokter dan jadwal
                        konsultasi yang tersedia.
                    </p>

                    <div class="service-arrow">
                        <i class="bi bi-arrow-right"></i>
                    </div>

                </a>

            </div>


            <div class="col-md-6 col-xl-4">

                <a
                    href="{{ route('patient.queue.index') }}"
                    class="service-card">

                    <div class="service-icon">
                        <i class="bi bi-people"></i>
                    </div>

                    <h5>
                        Antrean Saya
                    </h5>

                    <p>
                        Lihat nomor antrean dan
                        status pemeriksaan Anda.
                    </p>

                    <div class="service-arrow">
                        <i class="bi bi-arrow-right"></i>
                    </div>

                </a>

            </div>


            <div class="col-md-6 col-xl-4">

                <a
                    href="{{ route('patient.history.index') }}"
                    class="service-card">

                    <div class="service-icon">
                        <i class="bi bi-journal-medical"></i>
                    </div>

                    <h5>
                        Riwayat Pemeriksaan
                    </h5>

                    <p>
                        Lihat riwayat diagnosis,
                        pemeriksaan, dan resep.
                    </p>

                    <div class="service-arrow">
                        <i class="bi bi-arrow-right"></i>
                    </div>

                </a>

            </div>


            <div class="col-md-6 col-xl-4">

                <a
                    href="{{ route('patient.qr') }}"
                    class="service-card">

                    <div class="service-icon">
                        <i class="bi bi-qr-code"></i>
                    </div>

                    <h5>
                        QR Antrean
                    </h5>

                    <p>
                        Tampilkan QR Code
                        untuk antrean Anda.
                    </p>

                    <div class="service-arrow">
                        <i class="bi bi-arrow-right"></i>
                    </div>

                </a>

            </div>


            <div class="col-md-6 col-xl-4">

                <a
                    href="{{ route('notifications.index') }}"
                    class="service-card">

                    <div class="service-icon">
                        <i class="bi bi-bell"></i>
                    </div>

                    <h5>
                        Notifikasi
                    </h5>

                    <p>
                        Lihat informasi dan
                        pemberitahuan terbaru.
                    </p>

                    <div class="service-arrow">
                        <i class="bi bi-arrow-right"></i>
                    </div>

                </a>

            </div>


            <div class="col-md-6 col-xl-4">

                <div class="service-card">

                    <div class="service-icon">
                        <i class="bi bi-person-circle"></i>
                    </div>

                    <h5>
                        Akun Saya
                    </h5>

                    <p>
                        Anda login sebagai
                        <strong>
                            {{ auth()->user()->name }}
                        </strong>.
                    </p>

                    <div class="service-arrow">
                        <i class="bi bi-person-check"></i>
                    </div>

                </div>

            </div>

        </div>


        <!-- QUICK BOOKING -->

        <div class="booking-card">

            <div class="row align-items-center">

                <div class="col-md-8">

                    <div class="d-flex align-items-center">

                        <div class="booking-icon">
                            <i class="bi bi-calendar-heart"></i>
                        </div>

                        <div class="ms-3">

                            <h5 class="fw-bold mb-1">
                                Ingin melakukan pemeriksaan?
                            </h5>

                            <p class="text-muted mb-0">
                                Booking jadwal dokter
                                sekarang dengan mudah.
                            </p>

                        </div>

                    </div>

                </div>

                <div
                    class="col-md-4 text-md-end mt-3 mt-md-0">

                    <a
                        href="{{ route('patient.appointments.index') }}"
                        class="btn-purple">

                        <i class="bi bi-calendar-plus me-1"></i>

                        Buat Booking

                    </a>

                </div>

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