<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Booking Konsultasi - Smart Clinic</title>

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
            --success: #16A34A;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: var(--lavender);
            color: var(--text);
            font-family: "Segoe UI", Arial, sans-serif;
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

            font-size: 23px;
        }

        .sidebar-content {
            padding: 25px 15px;
        }

        .sidebar-title {
            margin: 10px 12px 12px;

            color: rgba(255,255,255,.55);

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

            color: rgba(255,255,255,.76);

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
            background: rgba(255,255,255,.11);

            transform: translateX(2px);
        }

        .sidebar-link.active {
            color: white;

            background: rgba(255,255,255,.18);

            box-shadow:
                0 8px 20px rgba(0,0,0,.12);
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
                0 5px 20px rgba(76,29,149,.16);
        }

        .topbar-title {
            margin: 0;

            font-size: 19px;
            font-weight: 700;
        }

        .topbar-subtitle {
            margin-top: 3px;

            color: rgba(255,255,255,.72);

            font-size: 12px;
        }

        .notification-btn {
            width: 43px;
            height: 43px;

            display: flex;
            align-items: center;
            justify-content: center;

            border: 1px solid rgba(255,255,255,.2);
            border-radius: 13px;

            background: rgba(255,255,255,.13);

            color: white;

            text-decoration: none;

            transition: .2s;
        }

        .notification-btn:hover {
            background: rgba(255,255,255,.22);
            color: white;
        }

        .user-avatar {
            width: 43px;
            height: 43px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background: rgba(255,255,255,.18);

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
           HEADER
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
                0 12px 30px rgba(76,29,149,.16);
        }

        .page-header::after {
            content: "";

            position: absolute;

            width: 210px;
            height: 210px;

            right: -70px;
            top: -100px;

            border-radius: 50%;

            background: rgba(255,255,255,.09);
        }

        .page-icon {
            width: 58px;
            height: 58px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 17px;

            background: rgba(255,255,255,.16);

            color: white;

            font-size: 27px;
        }

        .page-header p {
            color: rgba(255,255,255,.75) !important;
        }

        /* ==============================
           ALERT
        ============================== */

        .alert {
            border: none;
            border-radius: 14px;
        }

        /* ==============================
           FILTER
        ============================== */

        .filter-box {
            padding: 22px;

            margin-bottom: 25px;

            background: white;

            border: 1px solid #E9D5FF;

            border-radius: 18px;

            box-shadow:
                0 7px 25px rgba(76,29,149,.07);
        }

        .filter-title {
            color: var(--text);
            font-weight: 700;
        }

        .search-box .input-group-text {
            background: #F3E8FF;

            border-color: #DDD6FE;

            color: var(--purple);
        }

        .search-box .form-control {
            border-color: #DDD6FE;
        }

        .search-box .form-control:focus {
            border-color: var(--purple);

            box-shadow:
                0 0 0 .2rem rgba(124,58,237,.12);
        }

        /* ==============================
           DOCTOR CARD
        ============================== */

        .doctor-card {
            height: 100%;

            overflow: hidden;

            background: white;

            border: 1px solid #E9D5FF;

            border-radius: 20px;

            box-shadow:
                0 7px 25px rgba(76,29,149,.06);

            transition: .25s;
        }

        .doctor-card:hover {
            transform: translateY(-5px);

            border-color: #C4B5FD;

            box-shadow:
                0 15px 35px rgba(76,29,149,.13);
        }

        .doctor-card-top {
            height: 7px;

            background:
                linear-gradient(
                    90deg,
                    #4C1D95,
                    #7C3AED,
                    #A78BFA
                );
        }

        .doctor-body {
            padding: 24px;
        }

        .doctor-avatar {
            width: 62px;
            height: 62px;

            display: flex;
            align-items: center;
            justify-content: center;

            flex-shrink: 0;

            border-radius: 17px;

            background:
                linear-gradient(
                    135deg,
                    #E9D5FF,
                    #DDD6FE
                );

            color: var(--purple);

            font-size: 29px;
        }

        .doctor-name {
            color: var(--text);

            font-size: 18px;
            font-weight: 700;
        }

        .doctor-role {
            margin-top: 3px;

            color: var(--muted);

            font-size: 12px;
        }

        /* ==============================
           SCHEDULE
        ============================== */

        .schedule-box {
            padding: 16px;

            margin-top: 20px;

            background: #F9F5FF;

            border: 1px solid #E9D5FF;

            border-radius: 15px;
        }

        .schedule-row {
            display: flex;
            align-items: center;

            margin-bottom: 13px;
        }

        .schedule-row:last-child {
            margin-bottom: 0;
        }

        .schedule-icon {
            width: 36px;
            height: 36px;

            display: flex;
            align-items: center;
            justify-content: center;

            flex-shrink: 0;

            margin-right: 10px;

            border-radius: 10px;

            background: white;

            color: var(--purple);

            border: 1px solid #DDD6FE;
        }

        .schedule-label {
            color: #9A8EAB;

            font-size: 9px;
            font-weight: 700;

            letter-spacing: .5px;
        }

        .schedule-value {
            margin-top: 2px;

            color: var(--text);

            font-size: 14px;
            font-weight: 600;
        }

        /* ==============================
           BUTTON
        ============================== */

        .btn-booking {
            width: 100%;

            padding: 12px;

            border: none;
            border-radius: 12px;

            background:
                linear-gradient(
                    135deg,
                    #6D28D9,
                    #7C3AED
                );

            color: white;

            font-weight: 600;

            transition: .2s;

            box-shadow:
                0 7px 18px rgba(124,58,237,.18);
        }

        .btn-booking:hover {
            background:
                linear-gradient(
                    135deg,
                    #5B21B6,
                    #6D28D9
                );

            color: white;

            transform: translateY(-2px);
        }

        /* ==============================
           EMPTY
        ============================== */

        .empty-card {
            padding: 65px 20px;

            text-align: center;

            background: white;

            border: 1px solid #E9D5FF;

            border-radius: 20px;

            box-shadow:
                0 7px 25px rgba(76,29,149,.06);
        }

        .empty-icon {
            font-size: 65px;

            color: #A78BFA;
        }

        /* ==============================
           BACK
        ============================== */

        .btn-back {
            padding: 10px 17px;

            border: 1px solid #C4B5FD;

            border-radius: 12px;

            background: white;

            color: var(--purple);

            font-weight: 600;
        }

        .btn-back:hover {
            background: #EDE9FE;

            color: var(--purple-dark);

            border-color: var(--purple);
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

        }

    </style>

</head>


<body>


<!-- ==============================
     SIDEBAR
============================== -->

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

            <i class="bi bi-grid-1x2-fill"></i>

            <span>
                Dashboard
            </span>

        </a>


        <a
            href="{{ route('patient.appointments.index') }}"
            class="sidebar-link active">

            <i class="bi bi-calendar-check-fill"></i>

            <span>
                Booking Konsultasi
            </span>

        </a>


        <a
            href="{{ route('patient.queue.index') }}"
            class="sidebar-link">

            <i class="bi bi-people-fill"></i>

            <span>
                Antrean
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

            <i class="bi bi-bell-fill"></i>

            <span>
                Notifikasi
            </span>

        </a>

    </div>

</aside>



<!-- ==============================
     MAIN
============================== -->

<main class="main">


    <!-- TOPBAR -->

    <header class="topbar">

        <div>

            <h5 class="topbar-title">
                Booking Konsultasi
            </h5>

            <div class="topbar-subtitle">
                Pilih dokter dan jadwal konsultasi
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

                    <small style="color: rgba(255,255,255,.7);">
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

                    <i class="bi bi-calendar2-plus-fill"></i>

                </div>


                <div class="ms-3">

                    <h2 class="fw-bold mb-1">
                        Booking Konsultasi
                    </h2>

                    <p class="mb-0">

                        Pilih dokter dan jadwal konsultasi
                        sesuai kebutuhan Anda.

                    </p>

                </div>

            </div>

        </div>



        <!-- SUCCESS -->

        @if(session('success'))

            <div class="alert alert-success shadow-sm">

                <i class="bi bi-check-circle-fill me-2"></i>

                {{ session('success') }}

            </div>

        @endif



        <!-- ERROR -->

        @if($errors->any())

            <div class="alert alert-danger shadow-sm">

                <div class="fw-bold mb-2">

                    <i class="bi bi-exclamation-circle-fill me-2"></i>

                    Terjadi kesalahan

                </div>


                <ul class="mb-0">

                    @foreach($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif



        <!-- FILTER -->

        <div class="filter-box">

            <div class="row align-items-center">

                <div class="col-md-7">

                    <div class="filter-title fs-5">

                        <i
                            class="bi bi-person-badge-fill me-2"
                            style="color: var(--purple);">
                        </i>

                        Jadwal Dokter

                    </div>


                    <small class="text-muted">

                        Pilih dokter yang tersedia untuk
                        melakukan konsultasi.

                    </small>

                </div>


                <div class="col-md-5 mt-3 mt-md-0">

                    <div class="input-group search-box">

                        <span class="input-group-text">

                            <i class="bi bi-search"></i>

                        </span>


                        <input
                            type="text"
                            id="searchDoctor"
                            class="form-control"
                            placeholder="Cari nama dokter...">

                    </div>

                </div>

            </div>

        </div>



        <!-- DOCTOR LIST -->

        <div
            class="row g-4"
            id="doctorList">


            @forelse($schedules as $schedule)


                <div
                    class="col-md-6 col-xl-4 doctor-item"
                    data-doctor="{{ strtolower($schedule->doctor->name) }}">


                    <div class="doctor-card">


                        <div class="doctor-card-top"></div>


                        <div class="doctor-body">


                            <!-- DOCTOR -->

                            <div class="d-flex align-items-center">

                                <div class="doctor-avatar">

                                    <i class="bi bi-person-badge-fill"></i>

                                </div>


                                <div class="ms-3">

                                    <div class="doctor-name">

                                        {{ $schedule->doctor->name }}

                                    </div>


                                    <div class="doctor-role">

                                        Dokter Smart Clinic

                                    </div>

                                </div>

                            </div>



                            <!-- SCHEDULE -->

                            <div class="schedule-box">


                                <div class="schedule-row">

                                    <div class="schedule-icon">

                                        <i class="bi bi-calendar3"></i>

                                    </div>


                                    <div>

                                        <div class="schedule-label">
                                            HARI PRAKTIK
                                        </div>


                                        <div class="schedule-value">

                                            {{ $schedule->day }}

                                        </div>

                                    </div>

                                </div>



                                <div class="schedule-row">

                                    <div class="schedule-icon">

                                        <i class="bi bi-clock-fill"></i>

                                    </div>


                                    <div>

                                        <div class="schedule-label">
                                            JAM PRAKTIK
                                        </div>


                                        <div class="schedule-value">

                                            {{ \Carbon\Carbon::parse($schedule->start_time)->format('H:i') }}

                                            -

                                            {{ \Carbon\Carbon::parse($schedule->end_time)->format('H:i') }}

                                            WIB

                                        </div>

                                    </div>

                                </div>



                                <div class="schedule-row">

                                    <div class="schedule-icon">

                                        <i class="bi bi-check-circle-fill"></i>

                                    </div>


                                    <div>

                                        <div class="schedule-label">
                                            STATUS
                                        </div>


                                        <div
                                            class="schedule-value"
                                            style="color: var(--success);">

                                            Tersedia

                                        </div>

                                    </div>

                                </div>


                            </div>



                            <!-- BOOK -->

                            <div class="mt-4">

                                <a
                                    href="{{ route(
                                        'patient.appointments.create',
                                        $schedule->id
                                    ) }}"
                                    class="btn-booking text-center d-block text-decoration-none">

                                    <i class="bi bi-calendar-plus-fill me-1"></i>

                                    Pilih Jadwal

                                </a>

                            </div>


                        </div>

                    </div>

                </div>


            @empty


                <div class="col-12">

                    <div class="empty-card">

                        <i
                            class="bi bi-calendar-x empty-icon">
                        </i>


                        <h4 class="fw-bold mt-3">

                            Belum Ada Jadwal Dokter

                        </h4>


                        <p class="text-muted">

                            Saat ini belum ada jadwal dokter
                            yang tersedia untuk booking.

                        </p>


                        <a
                            href="{{ route('patient.dashboard') }}"
                            class="btn btn-outline-secondary">

                            <i class="bi bi-arrow-left me-1"></i>

                            Kembali ke Dashboard

                        </a>

                    </div>

                </div>

            @endforelse


        </div>



        <!-- SEARCH EMPTY -->

        <div
            id="noResult"
            class="alert mt-4 d-none"
            style="
                background: #FFF7ED;
                border: 1px solid #FED7AA;
                color: #9A3412;
            ">

            <i class="bi bi-search me-2"></i>

            Dokter yang Anda cari tidak ditemukan.

        </div>



        <!-- BACK -->

        <div class="mt-4">

            <a
                href="{{ route('patient.dashboard') }}"
                class="btn btn-back">

                <i class="bi bi-arrow-left me-1"></i>

                Kembali ke Dashboard

            </a>

        </div>


    </section>

</main>



<!-- ==============================
     SEARCH JAVASCRIPT
============================== -->

<script>

    const searchInput =
        document.getElementById('searchDoctor');

    const doctorItems =
        document.querySelectorAll('.doctor-item');

    const noResult =
        document.getElementById('noResult');


    if (searchInput) {

        searchInput.addEventListener('input', function () {

            const keyword =
                this.value.toLowerCase().trim();

            let found = false;


            doctorItems.forEach(function (item) {

                const doctorName =
                    item.dataset.doctor;


                if (doctorName.includes(keyword)) {

                    item.style.display = '';

                    found = true;

                } else {

                    item.style.display = 'none';

                }

            });


            if (!found && keyword !== '') {

                noResult.classList.remove('d-none');

            } else {

                noResult.classList.add('d-none');

            }

        });

    }

</script>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>


</body>

</html>