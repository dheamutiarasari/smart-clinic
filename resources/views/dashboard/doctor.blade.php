<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Smart Clinic - Dashboard Dokter</title>

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

        /* WELCOME */
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
            box-shadow: 0 12px 30px rgba(124,58,237,.25);
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

        /* STATISTICS */
        .stats {
            display: grid;
            grid-template-columns: repeat(3,1fr);
            gap: 18px;
            margin-bottom: 30px;
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
            box-shadow: 0 7px 20px rgba(76,29,149,.10);
            transition: .2s;
        }

        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 25px rgba(76,29,149,.15);
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
            font-size: 22px;
            margin-bottom: 12px;
        }

        .stat-title {
            font-size: 13px;
            color: var(--muted);
            margin-bottom: 3px;
        }

        .stat-value {
            font-size: 28px;
            font-weight: bold;
            color: var(--purple-deep);
        }

        /* MENU */
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

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(3,1fr);
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
            min-height: 215px;
            box-shadow: 0 7px 20px rgba(76,29,149,.10);
            transition: .2s;
        }

        .menu-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 14px 28px rgba(76,29,149,.16);
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
                var(--lavender),
                #C4B5FD
            );
            color: var(--purple-deep);
            font-size: 24px;
            margin-bottom: 16px;
        }

        .menu-card h5 {
            color: var(--purple-deep);
            font-weight: bold;
            margin-bottom: 7px;
        }

        .menu-card p {
            color: var(--muted);
            font-size: 13px;
            line-height: 1.6;
            min-height: 42px;
            margin-bottom: 15px;
        }

        /* BUTTON */
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
            box-shadow: 0 6px 15px rgba(124,58,237,.25);
        }

        .btn-disabled {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            background: #E9D5FF;
            color: #80699D;
            padding: 9px 15px;
            border-radius: 11px;
            font-size: 13px;
        }

        /* RESPONSIVE */
        @media (max-width:1100px) {
            .stats {
                grid-template-columns: repeat(2,1fr);
            }

            .menu-grid {
                grid-template-columns: repeat(2,1fr);
            }
        }

        @media (max-width:700px) {
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

            .stats,
            .menu-grid {
                grid-template-columns: 1fr;
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
           class="sidebar-link active">
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
           class="sidebar-link">
            <i class="bi bi-clipboard2-pulse-fill"></i>
            <span>Pemeriksaan</span>
        </a>

        <!-- JADWAL -->
        <a href="#"
           class="sidebar-link">
            <i class="bi bi-calendar-week-fill"></i>
            <span>Jadwal Praktik</span>
        </a>

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
                Dashboard Dokter
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
                    <i class="bi bi-heart-pulse-fill"></i>
                </div>

                <h1>
                    Selamat Datang, Dr. {{ auth()->user()->name }}
                </h1>

                <p>
                    Kelola pelayanan pasien dengan mudah
                    melalui Smart Clinic.
                </p>

            </div>
        </div>

        <!-- STATISTICS -->
        <div class="stats">

            <div class="stat-card">
                <div class="stat-icon">
                    <i class="bi bi-people-fill"></i>
                </div>

                <div class="stat-title">
                    Pasien Hari Ini
                </div>

                <div class="stat-value">
                    0
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <i class="bi bi-hourglass-split"></i>
                </div>

                <div class="stat-title">
                    Menunggu
                </div>

                <div class="stat-value">
                    0
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <i class="bi bi-check-circle-fill"></i>
                </div>

                <div class="stat-title">
                    Selesai
                </div>

                <div class="stat-value">
                    0
                </div>
            </div>

        </div>

        <!-- SECTION -->
        <div class="section-header">
            <div class="section-title">
                Menu Pelayanan
            </div>

            <div class="section-subtitle">
                Akses fitur pelayanan dokter melalui menu berikut.
            </div>
        </div>

        <!-- MENU -->
        <div class="menu-grid">

            <!-- ANTREAN -->
            <div class="menu-card">
                <div class="menu-icon">
                    <i class="bi bi-people-fill"></i>
                </div>

                <h5>Antrean Pasien</h5>

                <p>
                    Kelola dan panggil pasien
                    sesuai nomor antrean.
                </p>

                <a href="{{ route('doctor.queues.index') }}"
                   class="btn-purple">
                    <i class="bi bi-arrow-right-circle-fill"></i>
                    Buka Antrean
                </a>
            </div>

            <!-- DATA PASIEN -->
            <div class="menu-card">
                <div class="menu-icon">
                    <i class="bi bi-person-vcard-fill"></i>
                </div>

                <h5>Data Pasien</h5>

                <p>
                    Lihat daftar pasien yang
                    terdaftar pada pelayanan dokter.
                </p>

                <a href="{{ route('doctor.patients.index') }}"
                   class="btn-purple">
                    <i class="bi bi-arrow-right-circle-fill"></i>
                    Lihat Pasien
                </a>
            </div>

            <!-- PEMERIKSAAN -->
            <div class="menu-card">
                <div class="menu-icon">
                    <i class="bi bi-clipboard2-pulse-fill"></i>
                </div>

                <h5>Pemeriksaan</h5>

                <p>
                    Kelola pasien yang sudah
                    dipanggil atau sedang diperiksa.
                </p>

                <a href="{{ route('doctor.examinations.index') }}"
                   class="btn-purple">
                    <i class="bi bi-arrow-right-circle-fill"></i>
                    Buka Pemeriksaan
                </a>
            </div>

            <!-- JADWAL -->
            <div class="menu-card">
                <div class="menu-icon">
                    <i class="bi bi-calendar-week-fill"></i>
                </div>

                <h5>Jadwal Praktik</h5>

                <p>
                    Lihat jadwal praktik dokter
                    yang tersedia di Smart Clinic.
                </p>

                <span class="btn-disabled">
                    <i class="bi bi-clock-fill"></i>
                    Segera
                </span>
            </div>

        </div>
    </div>
</main>

</body>
</html>