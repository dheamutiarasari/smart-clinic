<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Notifikasi - Smart Clinic</title>

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

        .notification-badge {
            margin-left: auto;
            min-width: 21px;
            height: 21px;
            padding: 0 6px;
            border-radius: 20px;
            background: #EF4444;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            font-weight: 700;
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
            transition: .2s;
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
            width: 180px;
            height: 180px;
            right: -60px;
            top: -90px;
            border-radius: 50%;
            background: rgba(255,255,255,.10);
        }

        .page-header::before {
            content: "";
            position: absolute;
            width: 90px;
            height: 90px;
            right: 130px;
            bottom: -50px;
            border-radius: 50%;
            background: rgba(255,255,255,.07);
        }

        .page-header-content {
            position: relative;
            z-index: 2;
        }

        .page-icon {
            width: 58px;
            height: 58px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 17px;
            background: rgba(255,255,255,.16);
            font-size: 27px;
        }

        .page-header h2 {
            font-size: 23px;
        }

        .page-header p {
            color: rgba(255,255,255,.82);
            font-size: 13px;
        }

        /* SUMMARY */

        .summary {
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 22px 25px;
            margin-bottom: 28px;
            border-radius: 20px;
            background: linear-gradient(
                135deg,
                #4C1D95,
                #6D28D9,
                #8B5CF6
            );
            color: white;
            box-shadow: 0 12px 28px rgba(76,29,149,.20);
        }

        .summary::after {
            content: "";
            position: absolute;
            width: 140px;
            height: 140px;
            right: -45px;
            top: -65px;
            border-radius: 50%;
            background: rgba(255,255,255,.10);
        }

        .summary-icon {
            position: relative;
            z-index: 2;
            width: 50px;
            height: 50px;
            border-radius: 14px;
            background: rgba(255,255,255,.15);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 21px;
        }

        .summary-content {
            position: relative;
            z-index: 2;
        }

        .summary small {
            display: block;
            color: rgba(255,255,255,.78);
            font-size: 12px;
        }

        .summary strong {
            display: block;
            margin-top: 2px;
            font-size: 25px;
        }

        /* LIST HEADER */

        .list-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .list-header h5 {
            margin: 0;
            font-size: 19px;
            font-weight: 700;
        }

        .read-all {
            border: 1px solid #C4B5FD;
            background: white;
            color: #6D28D9;
            padding: 9px 14px;
            border-radius: 11px;
            font-size: 12px;
            font-weight: 600;
            transition: .2s;
        }

        .read-all:hover {
            background: #E9D5FF;
            color: #4C1D95;
        }

        /* NOTIFICATION CARD */

        .notification-card {
            position: relative;
            display: flex;
            align-items: flex-start;
            gap: 15px;
            padding: 19px;
            margin-bottom: 11px;
            background: rgba(255,255,255,.88);
            border: 1px solid #E9D5FF;
            border-radius: 18px;
            transition: .25s;
            box-shadow: 0 7px 20px rgba(76,29,149,.05);
        }

        .notification-card:hover {
            transform: translateY(-2px);
            border-color: #C4B5FD;
            box-shadow: 0 12px 25px rgba(76,29,149,.09);
        }

        .notification-card.unread {
            background: linear-gradient(
                90deg,
                #F3E8FF,
                #FAF5FF
            );
            border-color: #C4B5FD;
        }

        .notification-icon {
            width: 48px;
            height: 48px;
            min-width: 48px;
            border-radius: 14px;
            background: #E9D5FF;
            color: #7C3AED;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .notification-card.unread .notification-icon {
            background: #7C3AED;
            color: white;
        }

        .notification-body {
            flex: 1;
        }

        .notification-title {
            margin-bottom: 5px;
            font-size: 14px;
            font-weight: 700;
            color: #2E1065;
        }

        .notification-message {
            margin-bottom: 7px;
            color: var(--muted);
            font-size: 13px;
            line-height: 1.6;
        }

        .notification-time {
            color: #9C91A8;
            font-size: 11px;
        }

        .notification-action {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 8px;
        }

        .dot {
            width: 8px;
            height: 8px;
            background: #7C3AED;
            border-radius: 50%;
            box-shadow: 0 0 0 4px #E9D5FF;
        }

        .read-btn {
            border: 1px solid #C4B5FD;
            background: white;
            color: #6D28D9;
            padding: 7px 10px;
            border-radius: 9px;
            font-size: 10px;
            font-weight: 600;
            transition: .2s;
        }

        .read-btn:hover {
            background: #E9D5FF;
            color: #4C1D95;
        }

        /* EMPTY */

        .empty {
            padding: 70px 20px;
            background: rgba(255,255,255,.88);
            border: 1px solid #E9D5FF;
            border-radius: 22px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(76,29,149,.06);
        }

        .empty-icon {
            width: 78px;
            height: 78px;
            margin: 0 auto 16px;
            border-radius: 23px;
            background: #E9D5FF;
            color: #7C3AED;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
        }

        .empty h5 {
            margin-bottom: 7px;
            font-size: 19px;
            font-weight: 700;
        }

        .empty p {
            margin: 0;
            color: var(--muted);
            font-size: 13px;
        }

        /* RESPONSIVE */

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

            .notification-badge {
                position: absolute;
                margin-left: 20px;
                margin-top: -22px;
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

            .summary {
                padding: 20px;
            }

            .notification-card {
                padding: 15px;
            }

            .notification-action {
                gap: 5px;
            }
        }
    </style>
</head>

<body>

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
            class="sidebar-link">

            <i class="bi bi-qr-code"></i>

            <span>
                QR Antrean
            </span>

        </a>


        <a
            href="{{ route('notifications.index') }}"
            class="sidebar-link active">

            <i class="bi bi-bell"></i>

            <span>
                Notifikasi
            </span>

            @if($unreadNotifications > 0)

                <span class="notification-badge">
                    {{ $unreadNotifications }}
                </span>

            @endif

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
                Notifikasi
            </h5>

            <div class="topbar-subtitle">
                Informasi terbaru dari Smart Clinic
            </div>

        </div>


        <div class="d-flex align-items-center gap-3">

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


        <!-- PAGE HEADER -->

        <div class="page-header">

            <div class="d-flex align-items-center">

                <div class="page-icon">

                    <i class="bi bi-bell-fill"></i>

                </div>

                <div class="ms-3 page-header-content">

                    <h2 class="fw-bold mb-1">
                        Notifikasi
                    </h2>

                    <p class="mb-0">
                        Informasi terbaru mengenai aktivitas
                        kesehatan Anda.
                    </p>

                </div>

            </div>

        </div>


        <!-- SUMMARY -->

        <div class="summary">

            <div class="summary-icon">

                <i class="bi bi-bell-fill"></i>

            </div>

            <div class="summary-content">

                <small>
                    Notifikasi belum dibaca
                </small>

                <strong>
                    {{ $unreadNotifications }}
                </strong>

            </div>

        </div>


        <!-- LIST HEADER -->

        <div class="list-header">

            <h5>
                Semua Notifikasi
            </h5>


            @if($unreadNotifications > 0)

                <form
                    method="POST"
                    action="{{ route('notifications.readAll') }}">

                    @csrf

                    <button
                        type="submit"
                        class="read-all">

                        <i class="bi bi-check2-all me-1"></i>

                        Tandai Semua Dibaca

                    </button>

                </form>

            @endif

        </div>


        <!-- NOTIFICATION LIST -->

        @forelse($notifications as $notification)

            <div
                class="notification-card
                {{ !$notification->is_read ? 'unread' : '' }}">

                <div class="notification-icon">

                    @if(!$notification->is_read)

                        <i class="bi bi-bell-fill"></i>

                    @else

                        <i class="bi bi-bell"></i>

                    @endif

                </div>


                <div class="notification-body">

                    <div class="notification-title">
                        {{ $notification->title }}
                    </div>

                    <div class="notification-message">
                        {{ $notification->message }}
                    </div>

                    <div class="notification-time">

                        <i class="bi bi-clock me-1"></i>

                        {{ $notification->created_at->diffForHumans() }}

                    </div>

                </div>


                @if(!$notification->is_read)

                    <div class="notification-action">

                        <div class="dot"></div>

                        <form
                            method="POST"
                            action="{{ route(
                                'notifications.read',
                                $notification->id
                            ) }}">

                            @csrf

                            <button
                                type="submit"
                                class="read-btn">

                                Tandai Dibaca

                            </button>

                        </form>

                    </div>

                @endif

            </div>

        @empty

            <div class="empty">

                <div class="empty-icon">

                    <i class="bi bi-bell-slash"></i>

                </div>

                <h5>
                    Belum Ada Notifikasi
                </h5>

                <p>
                    Saat ini belum ada pemberitahuan untuk Anda.
                </p>

            </div>

        @endforelse


    </section>

</main>

</body>
</html>