<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Poli - Smart Clinic</title>

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

        /* MAIN */

        .main {
            margin-left: 250px;
            min-height: 100vh;
        }

        /* TOPBAR */

        .topbar {
            height: 75px;
            padding: 0 30px;
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
            display: flex;
            justify-content: space-between;
            align-items: center;
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

        .btn-purple {
            border: none;
            background: linear-gradient(
                135deg,
                #6D28D9,
                #8B5CF6
            );
            color: white;
            border-radius: 11px;
            padding: 10px 17px;
            text-decoration: none;
            font-weight: 600;
        }

        .btn-purple:hover {
            color: white;
        }

        /* FORM */

        .form-card {
            max-width: 850px;
            background: linear-gradient(
                135deg,
                #FFFFFF,
                #F5F3FF
            );
            border: 1px solid #DDD6FE;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 8px 22px rgba(76,29,149,.08);
        }

        .form-icon {
            width: 60px;
            height: 60px;
            border-radius: 17px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(
                135deg,
                #E9D5FF,
                #C4B5FD
            );
            color: var(--purple-deep);
            font-size: 27px;
            margin-bottom: 18px;
        }

        .form-title {
            color: var(--purple-deep);
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .form-description {
            color: var(--muted);
            font-size: 14px;
            margin-bottom: 25px;
        }

        .form-label {
            color: var(--purple-deep);
            font-weight: 600;
            margin-bottom: 8px;
        }

        .form-control {
            border: 1px solid #D8B4FE;
            border-radius: 12px;
            padding: 12px 14px;
            background: #FAF8FF;
            color: var(--text);
        }

        .form-control:focus {
            border-color: var(--purple);
            box-shadow: 0 0 0 3px rgba(124,58,237,.12);
            background: white;
        }

        .form-control::placeholder {
            color: #A78BFA;
        }

        .error-message {
            color: #DC2626;
            font-size: 13px;
            margin-top: 6px;
        }

        .form-actions {
            display: flex;
            gap: 10px;
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid #E9D5FF;
        }

        .btn-save {
            border: none;
            background: linear-gradient(
                135deg,
                #6D28D9,
                #8B5CF6
            );
            color: white;
            border-radius: 11px;
            padding: 11px 20px;
            font-weight: 600;
        }

        .btn-save:hover {
            color: white;
        }

        .btn-cancel {
            border: 1px solid #C4B5FD;
            background: #F5F3FF;
            color: var(--purple-deep);
            border-radius: 11px;
            padding: 11px 20px;
            font-weight: 600;
            text-decoration: none;
        }

        .btn-cancel:hover {
            background: #E9D5FF;
            color: var(--purple-deep);
        }

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

            .sidebar-link {
                justify-content: center;
                padding: 13px 10px;
            }

            .sidebar-link span {
                display: none;
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
                align-items: flex-start;
                flex-direction: column;
                gap: 15px;
            }

            .form-card {
                padding: 22px;
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
            <span>Pasien</span>

        </a>


        <a href="{{ route('admin.doctors.index') }}"
           class="sidebar-link">

            <i class="bi bi-person-badge-fill"></i>
            <span>Dokter</span>

        </a>


        <a href="{{ route('admin.polyclinics.index') }}"
           class="sidebar-link active">

            <i class="bi bi-hospital-fill"></i>
            <span>Poli</span>

        </a>


        <a href="{{ route('admin.doctor-schedules.index') }}"
           class="sidebar-link">

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

            <i class="bi bi-ticket-perforated-fill"></i>
            <span>Antrean</span>

        </a>


        <a href="{{ route('admin.reports.index') }}"
           class="sidebar-link">

            <i class="bi bi-bar-chart-fill"></i>
            <span>Laporan</span>

        </a>


        <div class="sidebar-title mt-4">
            Sistem
        </div>


        <form method="POST"
              action="{{ route('logout') }}">

            @csrf

            <button type="submit"
                    class="sidebar-link w-100 border-0"
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
                Tambah Poli
            </div>

            <div class="topbar-subtitle">
                Tambahkan poli baru ke Smart Clinic
            </div>

        </div>


        <div class="topbar-right">

            <a href="{{ route('notifications.index') }}"
               class="notification-btn">

                <i class="bi bi-bell-fill"></i>

            </a>


            <div class="user-avatar">

                <i class="bi bi-person-fill"></i>

            </div>

        </div>

    </div>


    <!-- CONTENT -->

    <div class="content">

        <!-- HEADER -->

        <div class="page-header">

            <div>

                <div class="page-title">

                    <i class="bi bi-hospital-fill me-2"></i>

                    Tambah Poli

                </div>

                <p class="page-subtitle">
                    Masukkan informasi poli yang akan ditambahkan.
                </p>

            </div>


            <a href="{{ route('admin.polyclinics.index') }}"
               class="btn-purple">

                <i class="bi bi-arrow-left me-1"></i>

                Kembali

            </a>

        </div>


        <!-- FORM -->

        <div class="form-card">

            <div class="form-icon">

                <i class="bi bi-hospital-fill"></i>

            </div>


            <div class="form-title">
                Informasi Poli
            </div>

            <div class="form-description">
                Lengkapi data poli dengan benar sebelum menyimpan.
            </div>


            <form method="POST"
                  action="{{ route('admin.polyclinics.store') }}">

                @csrf


                <!-- NAMA POLI -->

                <div class="mb-4">

                    <label class="form-label">
                        Nama Poli
                    </label>

                    <input type="text"
                           name="name"
                           class="form-control"
                           value="{{ old('name') }}"
                           placeholder="Contoh: Poli Umum"
                           required>


                    @error('name')

                        <div class="error-message">

                            <i class="bi bi-exclamation-circle me-1"></i>

                            {{ $message }}

                        </div>

                    @enderror

                </div>


                <!-- DESKRIPSI -->

                <div class="mb-4">

                    <label class="form-label">
                        Deskripsi
                    </label>

                    <textarea name="description"
                              class="form-control"
                              rows="5"
                              placeholder="Masukkan deskripsi poli (opsional)">{{ old('description') }}</textarea>


                    @error('description')

                        <div class="error-message">

                            <i class="bi bi-exclamation-circle me-1"></i>

                            {{ $message }}

                        </div>

                    @enderror

                </div>


                <!-- BUTTON -->

                <div class="form-actions">

                    <button type="submit"
                            class="btn-save">

                        <i class="bi bi-check-circle-fill me-1"></i>

                        Simpan Poli

                    </button>


                    <a href="{{ route('admin.polyclinics.index') }}"
                       class="btn-cancel">

                        <i class="bi bi-x-circle me-1"></i>

                        Batal

                    </a>

                </div>

            </form>

        </div>


        <!-- FOOTER -->

        <div class="footer">

            <small>
                Smart Clinic — Manajemen Data Poli
            </small>

        </div>

    </div>

</div>

</body>

</html>