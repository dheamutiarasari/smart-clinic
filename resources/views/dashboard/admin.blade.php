<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Smart Clinic - Admin</title>

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

            color: white;

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
           WELCOME
        ========================= */

        .welcome-card {
            position: relative;

            overflow: hidden;

            background: linear-gradient(
                135deg,
                var(--purple-deep),
                #6D28D9,
                var(--purple-light)
            );

            color: white;

            border-radius: 22px;

            padding: 30px;

            margin-bottom: 28px;

            box-shadow:
                0 12px 30px rgba(124,58,237,.25);
        }

        .welcome-card::before {
            content: "";

            position: absolute;

            width: 180px;
            height: 180px;

            border-radius: 50%;

            background: rgba(255,255,255,.08);

            right: -50px;
            top: -70px;
        }

        .welcome-card::after {
            content: "";

            position: absolute;

            width: 110px;
            height: 110px;

            border-radius: 50%;

            background: rgba(255,255,255,.06);

            right: 100px;
            bottom: -60px;
        }

        .welcome-content {
            position: relative;

            z-index: 2;
        }

        .welcome-icon {
            width: 65px;
            height: 65px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 18px;

            background: rgba(255,255,255,.15);

            font-size: 30px;

            margin-bottom: 18px;
        }

        .welcome-card h1 {
            font-size: 28px;

            margin-bottom: 8px;

            font-weight: bold;
        }

        .welcome-card p {
            margin: 0;

            color: #E9D5FF;

            font-size: 14px;
        }


        /* =========================
           STATISTICS
        ========================= */

        .stats-grid {
            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 18px;

            margin-bottom: 35px;
        }

        .stat-card {
            background: linear-gradient(
                135deg,
                #FFFFFF,
                #F5F3FF
            );

            border: 1px solid #DDD6FE;

            border-radius: 18px;

            padding: 22px;

            box-shadow:
                0 7px 20px rgba(76,29,149,.10);

            transition: .2s;
        }

        .stat-card:hover {
            transform: translateY(-4px);

            box-shadow:
                0 12px 25px rgba(76,29,149,.16);
        }

        .stat-icon {
            width: 48px;
            height: 48px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 14px;

            background: linear-gradient(
                135deg,
                var(--lavender),
                #DDD6FE
            );

            color: var(--purple);

            font-size: 21px;

            margin-bottom: 14px;
        }

        .stat-title {
            color: var(--muted);

            font-size: 13px;
        }

        .stat-value {
            color: var(--purple-deep);

            font-size: 28px;

            font-weight: bold;

            margin-top: 3px;
        }


        /* =========================
           SECTION
        ========================= */

        .section-header {
            margin-bottom: 18px;
        }

        .section-title {
            color: var(--purple-deep);

            font-size: 20px;

            font-weight: bold;

            margin: 0;
        }

        .section-subtitle {
            color: var(--muted);

            font-size: 13px;

            margin-top: 4px;
        }


        /* =========================
           MENU CARD
        ========================= */

        .menu-grid {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 20px;
        }

        .menu-card {
            background: linear-gradient(
                135deg,
                #FFFFFF,
                #F5F3FF
            );

            border: 1px solid #DDD6FE;

            border-radius: 18px;

            padding: 24px;

            box-shadow:
                0 7px 20px rgba(76,29,149,.10);

            transition: .2s;
        }

        .menu-card:hover {
            transform: translateY(-5px);

            box-shadow:
                0 14px 28px rgba(76,29,149,.16);
        }

        .menu-icon {
            width: 55px;
            height: 55px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 16px;

            background: linear-gradient(
                135deg,
                #E9D5FF,
                #C4B5FD
            );

            color: var(--purple-deep);

            font-size: 24px;

            margin-bottom: 16px;
        }

        .menu-card h5 {
            color: var(--purple-deep);

            font-size: 17px;

            font-weight: bold;

            margin-bottom: 7px;
        }

        .menu-card p {
            color: var(--muted);

            font-size: 13px;

            line-height: 1.6;

            min-height: 42px;

            margin-bottom: 18px;
        }

        .btn-purple {
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

            padding: 9px 15px;

            border-radius: 11px;

            text-decoration: none;

            font-size: 13px;

            font-weight: 600;

            transition: .2s;
        }

        .btn-purple:hover {
            color: white;

            transform: translateY(-2px);

            box-shadow:
                0 7px 15px rgba(124,58,237,.25);
        }


        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 1100px) {

            .stats-grid {
                grid-template-columns:
                    repeat(2, 1fr);
            }

            .menu-grid {
                grid-template-columns:
                    repeat(2, 1fr);
            }
        }


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

            .sidebar-link i {
                margin: 0;
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

            .topbar-title {
                font-size: 16px;
            }

            .topbar-subtitle {
                display: none;
            }

            .admin-name,
            .admin-role {
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

            .stats-grid,
            .menu-grid {
                grid-template-columns: 1fr;
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
           class="sidebar-link active">

            <i class="bi bi-grid-1x2-fill"></i>

            <span>
                Dashboard
            </span>

        </a>


        <a href="{{ route('admin.patients.index') }}"
           class="sidebar-link">

            <i class="bi bi-people-fill"></i>

            <span>
                Pasien
            </span>

        </a>


        <a href="{{ route('admin.doctors.index') }}"
           class="sidebar-link">

            <i class="bi bi-person-badge-fill"></i>

            <span>
                Dokter
            </span>

        </a>


        <a href="{{ route('admin.polyclinics.index') }}"
           class="sidebar-link">

            <i class="bi bi-hospital-fill"></i>

            <span>
                Poli
            </span>

        </a>


        <a href="{{ route('admin.doctor-schedules.index') }}"
           class="sidebar-link">

            <i class="bi bi-calendar-week-fill"></i>

            <span>
                Jadwal Dokter
            </span>

        </a>


        <a href="{{ route('admin.appointments.index') }}"
           class="sidebar-link">

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
            Akun
        </div>


        <form method="POST"
              action="{{ route('logout') }}">

            @csrf

            <button type="submit"
                    class="logout-btn">

                <i class="bi bi-box-arrow-right"></i>

                <span>
                    Keluar
                </span>

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
                Dashboard Admin
            </div>

            <div class="topbar-subtitle">
                Kelola sistem Smart Clinic
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


        <!-- WELCOME -->

        <div class="welcome-card">

            <div class="welcome-content">

                <div class="welcome-icon">
                    <i class="bi bi-speedometer2"></i>
                </div>

                <h1>
                    Selamat datang,
                    {{ auth()->user()->name }} 👋
                </h1>

                <p>
                    Kelola seluruh sistem Smart Clinic
                    melalui panel administrator.
                </p>

            </div>

        </div>


        <!-- STATISTIK -->

        <div class="stats-grid">


            <div class="stat-card">

                <div class="stat-icon">
                    <i class="bi bi-people-fill"></i>
                </div>

                <div class="stat-title">
                    Total Pasien
                </div>

                <div class="stat-value">
                    {{ $totalPatients }}
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-icon">
                    <i class="bi bi-person-badge-fill"></i>
                </div>

                <div class="stat-title">
                    Total Dokter
                </div>

                <div class="stat-value">
                    {{ $totalDoctors }}
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-icon">
                    <i class="bi bi-hospital-fill"></i>
                </div>

                <div class="stat-title">
                    Total Poli
                </div>

                <div class="stat-value">
                    {{ $totalPolyclinics }}
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-icon">
                    <i class="bi bi-calendar-check-fill"></i>
                </div>

                <div class="stat-title">
                    Total Booking
                </div>

                <div class="stat-value">
                    {{ $totalAppointments }}
                </div>

            </div>


        </div>


        <!-- MENU ADMIN -->

        <div class="section-header">

            <h2 class="section-title">
                Menu Admin
            </h2>

            <div class="section-subtitle">
                Kelola berbagai bagian sistem Smart Clinic
            </div>

        </div>


        <div class="menu-grid">


            <!-- DOKTER -->

            <div class="menu-card">

                <div class="menu-icon">
                    <i class="bi bi-person-badge-fill"></i>
                </div>

                <h5>
                    Kelola Dokter
                </h5>

                <p>
                    Tambah dan lihat data dokter
                    yang terdaftar di Smart Clinic.
                </p>

                <a href="{{ route('admin.doctors.index') }}"
                   class="btn-purple">

                    <i class="bi bi-arrow-right"></i>

                    Kelola Dokter

                </a>

            </div>


            <!-- POLI -->

            <div class="menu-card">

                <div class="menu-icon">
                    <i class="bi bi-hospital-fill"></i>
                </div>

                <h5>
                    Kelola Poli
                </h5>

                <p>
                    Tambah dan lihat data poli
                    yang tersedia.
                </p>

                <a href="{{ route('admin.polyclinics.index') }}"
                   class="btn-purple">

                    <i class="bi bi-arrow-right"></i>

                    Kelola Poli

                </a>

            </div>


            <!-- JADWAL -->

            <div class="menu-card">

                <div class="menu-icon">
                    <i class="bi bi-calendar-week-fill"></i>
                </div>

                <h5>
                    Jadwal Dokter
                </h5>

                <p>
                    Atur jadwal praktik dokter
                    di setiap poli.
                </p>

                <a href="{{ route('admin.doctor-schedules.index') }}"
                   class="btn-purple">

                    <i class="bi bi-arrow-right"></i>

                    Kelola Jadwal

                </a>

            </div>


            <!-- PASIEN -->

            <div class="menu-card">

                <div class="menu-icon">
                    <i class="bi bi-people-fill"></i>
                </div>

                <h5>
                    Kelola Pasien
                </h5>

                <p>
                    Melihat dan mengelola
                    data pasien.
                </p>

                <a href="{{ route('admin.patients.index') }}"
                   class="btn-purple">

                    <i class="bi bi-arrow-right"></i>

                    Kelola Pasien

                </a>

            </div>


            <!-- BOOKING -->

            <div class="menu-card">

                <div class="menu-icon">
                    <i class="bi bi-calendar-check-fill"></i>
                </div>

                <h5>
                    Kelola Booking
                </h5>

                <p>
                    Melihat data booking
                    pasien.
                </p>

                <a href="{{ route('admin.appointments.index') }}"
                   class="btn-purple">

                    <i class="bi bi-arrow-right"></i>

                    Kelola Booking

                </a>

            </div>


            <!-- ANTREAN -->

            <div class="menu-card">

                <div class="menu-icon">
                    <i class="bi bi-ticket-perforated-fill"></i>
                </div>

                <h5>
                    Kelola Antrean
                </h5>

                <p>
                    Mengelola antrean pasien
                    yang sedang berjalan.
                </p>

                <a href="{{ route('admin.queues.index') }}"
                   class="btn-purple">

                    <i class="bi bi-arrow-right"></i>

                    Kelola Antrean

                </a>

            </div>


            <!-- LAPORAN -->

            <div class="menu-card">

                <div class="menu-icon">
                    <i class="bi bi-bar-chart-fill"></i>
                </div>

                <h5>
                    Laporan
                </h5>

                <p>
                    Melihat berbagai laporan
                    Smart Clinic.
                </p>

                <a href="{{ route('admin.reports.index') }}"
                   class="btn-purple">

                    <i class="bi bi-arrow-right"></i>

                    Lihat Laporan

                </a>

            </div>


        </div>

    </div>

</main>


</body>
</html>