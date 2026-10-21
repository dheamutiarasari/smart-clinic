<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Riwayat Pemeriksaan - Smart Clinic</title>

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

            border:
                1px solid rgba(255,255,255,.25);

            border-radius: 12px;

            background:
                rgba(255,255,255,.14);

            color: white;

            text-decoration: none;

            transition: .2s;
        }

        .notification-btn:hover {
            background:
                rgba(255,255,255,.23);

            color: white;
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

            border:
                1px solid rgba(255,255,255,.2);
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
            font-weight: 700;
            margin-bottom: 8px;
        }

        .page-header p {
            margin-bottom: 0;
            color: #E9D5FF;
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

        /* HISTORY CARD */

        .history-card {
            height: 100%;

            background:
                linear-gradient(
                    145deg,
                    #FFFFFF,
                    #F5F3FF
                );

            border:
                1px solid #DDD6FE;

            border-radius: 18px;

            margin-bottom: 22px;

            overflow: hidden;

            box-shadow:
                0 5px 18px rgba(76,29,149,.06);
        }

        .history-card:hover {
            border-color: #A78BFA;

            box-shadow:
                0 12px 28px rgba(76,29,149,.10);
        }

        .history-header {
            padding: 22px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 15px;

            background:
                linear-gradient(
                    135deg,
                    #F5F3FF,
                    #E9D5FF
                );

            border-bottom:
                1px solid #DDD6FE;
        }

        .doctor-section {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .doctor-icon {
            width: 52px;
            height: 52px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 15px;

            background:
                linear-gradient(
                    135deg,
                    #E9D5FF,
                    #C4B5FD
                );

            color: var(--purple-dark);

            font-size: 23px;
        }

        .doctor-name {
            margin: 0;

            font-size: 16px;
            font-weight: 700;

            color: var(--purple-dark);
        }

        .doctor-label {
            margin-top: 3px;

            color: var(--muted);

            font-size: 12px;
        }

        .date-badge {
            padding: 9px 13px;

            border-radius: 11px;

            background: #E9D5FF;

            border:
                1px solid #C4B5FD;

            color: var(--purple-dark);

            font-size: 12px;
            font-weight: 700;

            white-space: nowrap;
        }

        /* BODY */

        .history-body {
            padding: 24px;
        }

        .section-title {
            margin-bottom: 12px;

            display: flex;
            align-items: center;

            gap: 8px;

            font-size: 15px;
            font-weight: 800;

            color: var(--purple-dark);
        }

        .section-title i {
            color: var(--purple);
            font-size: 18px;
        }

        .result-box {
            padding: 18px;

            margin-bottom: 25px;

            border-radius: 15px;

            background:
                linear-gradient(
                    145deg,
                    #F5F3FF,
                    #E9D5FF
                );

            border:
                1px solid #DDD6FE;
        }

        .result-row {
            display: flex;
            gap: 15px;

            padding: 9px 0;
        }

        .result-row + .result-row {
            border-top:
                1px solid #DDD6FE;
        }

        .result-label {
            width: 145px;

            flex-shrink: 0;

            color: var(--muted);

            font-size: 13px;
            font-weight: 600;
        }

        .result-value {
            color: var(--text);

            font-size: 14px;
            font-weight: 500;

            line-height: 1.6;
        }

        /* PRESCRIPTION */

        .prescription-box {
            overflow: hidden;

            border:
                1px solid #DDD6FE;

            border-radius: 15px;

            background: white;
        }

        .prescription-title {
            padding: 15px 18px;

            background:
                linear-gradient(
                    135deg,
                    #E9D5FF,
                    #DDD6FE
                );

            color: var(--purple-dark);

            font-size: 14px;
            font-weight: 800;
        }

        .medicine-item {
            padding: 16px 18px;

            display: flex;
            justify-content: space-between;

            gap: 20px;

            border-top:
                1px solid #E9D5FF;
        }

        .medicine-icon {
            width: 40px;
            height: 40px;

            display: flex;
            align-items: center;
            justify-content: center;

            flex-shrink: 0;

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

        .medicine-name {
            color: var(--purple-dark);

            font-size: 14px;
            font-weight: 700;
        }

        .medicine-detail {
            margin-top: 3px;

            color: var(--muted);

            font-size: 12px;

            line-height: 1.5;
        }

        .no-prescription {
            padding: 20px;

            text-align: center;

            color: var(--muted);

            font-size: 13px;
        }

        /* EMPTY */

        .empty-card {
            padding: 55px 25px;

            text-align: center;

            background:
                linear-gradient(
                    145deg,
                    #FFFFFF,
                    #F5F3FF
                );

            border:
                1px solid #DDD6FE;

            border-radius: 18px;

            box-shadow:
                0 5px 18px rgba(76,29,149,.06);
        }

        .empty-icon {
            width: 75px;
            height: 75px;

            margin: 0 auto 18px;

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

            font-size: 31px;
        }

        .empty-card h5 {
            margin-bottom: 8px;

            font-weight: 800;

            color: var(--purple-dark);
        }

        .empty-card p {
            margin: 0;

            color: var(--muted);

            font-size: 13px;
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

            .page-header {
                padding: 24px;
            }

            .page-header-icon {
                display: none;
            }

            .history-header {
                align-items: flex-start;
                flex-direction: column;
            }

            .date-badge {
                margin-left: 66px;
            }

            .result-row {
                display: block;
            }

            .result-label {
                width: auto;
                margin-bottom: 3px;
            }

            .medicine-item {
                flex-direction: column;
            }

            .medicine-item .text-end {
                text-align: left !important;
                margin-left: 55px;
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
            class="sidebar-link active">

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
                Riwayat Pemeriksaan
            </h5>

            <div class="topbar-subtitle">
                Lihat riwayat konsultasi dan hasil pemeriksaan Anda
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

        <!-- PAGE HEADER -->

        <div class="page-header">

            <div class="row align-items-center">

                <div class="col-md-9 page-header-content">

                    <h2>
                        <i class="bi bi-journal-medical me-2"></i>
                        Riwayat Pemeriksaan
                    </h2>

                    <p>
                        Semua hasil pemeriksaan dan resep Anda
                        tersimpan di sini.
                    </p>

                </div>

                <div class="col-md-3 d-flex justify-content-end">

                    <div class="page-header-icon">

                        <i class="bi bi-heart-pulse"></i>

                    </div>

                </div>

            </div>

        </div>


        @if($medicalRecords->count() > 0)

            @foreach($medicalRecords as $record)

                <div class="history-card">

                    <!-- HEADER -->

                    <div class="history-header">

                        <div class="doctor-section">

                            <div class="doctor-icon">

                                <i class="bi bi-person-badge"></i>

                            </div>

                            <div>

                                <p class="doctor-name">

                                    Dr.
                                    {{ $record->doctor->name ?? 'Dokter' }}

                                </p>

                                <div class="doctor-label">
                                    Dokter Pemeriksa
                                </div>

                            </div>

                        </div>


                        <div class="date-badge">

                            <i class="bi bi-calendar3 me-1"></i>

                            @if($record->created_at)

                                {{ $record->created_at->format('d M Y') }}

                            @else

                                -

                            @endif

                        </div>

                    </div>


                    <!-- BODY -->

                    <div class="history-body">

                        <!-- HASIL PEMERIKSAAN -->

                        <div class="section-title">

                            <i class="bi bi-clipboard2-pulse"></i>

                            Hasil Pemeriksaan

                        </div>

                        <div class="result-box">

                            <div class="result-row">

                                <div class="result-label">
                                    Keluhan
                                </div>

                                <div class="result-value">

                                    {{ $record->complaint
                                        ?? $record->keluhan
                                        ?? '-' }}

                                </div>

                            </div>


                            <div class="result-row">

                                <div class="result-label">
                                    Diagnosis
                                </div>

                                <div class="result-value">

                                    {{ $record->diagnosis ?? '-' }}

                                </div>

                            </div>


                            <div class="result-row">

                                <div class="result-label">
                                    Hasil Pemeriksaan
                                </div>

                                <div class="result-value">

                                    {{ $record->examination_result
                                        ?? $record->result
                                        ?? $record->hasil_pemeriksaan
                                        ?? '-' }}

                                </div>

                            </div>


                            <div class="result-row">

                                <div class="result-label">
                                    Catatan Dokter
                                </div>

                                <div class="result-value">

                                    {{ $record->notes
                                        ?? $record->catatan
                                        ?? '-' }}

                                </div>

                            </div>

                        </div>


                        <!-- RESEP -->

                        <div class="section-title">

                            <i class="bi bi-capsule"></i>

                            Resep Obat

                        </div>


                        <div class="prescription-box">

                            <div class="prescription-title">

                                <i class="bi bi-prescription2 me-2"></i>

                                Obat yang Diresepkan

                            </div>


                            @if(
                                $record->prescriptions &&
                                $record->prescriptions->count() > 0
                            )

                                @foreach(
                                    $record->prescriptions
                                    as $prescription
                                )

                                    <div class="medicine-item">

                                        <div class="d-flex gap-3">

                                            <div class="medicine-icon">

                                                <i class="bi bi-capsule"></i>

                                            </div>

                                            <div>

                                                <div class="medicine-name">

                                                    {{
                                                        $prescription->medicine_name
                                                        ?? $prescription->nama_obat
                                                        ?? $prescription->medicine
                                                        ?? 'Obat'
                                                    }}

                                                </div>

                                                <div class="medicine-detail">

                                                    @if(
                                                        isset($prescription->dosage)
                                                        &&
                                                        $prescription->dosage
                                                    )

                                                        Dosis:
                                                        {{ $prescription->dosage }}

                                                    @elseif(
                                                        isset($prescription->dosis)
                                                        &&
                                                        $prescription->dosis
                                                    )

                                                        Dosis:
                                                        {{ $prescription->dosis }}

                                                    @endif


                                                    @if(
                                                        isset($prescription->quantity)
                                                        &&
                                                        $prescription->quantity
                                                    )

                                                        · Jumlah:
                                                        {{ $prescription->quantity }}

                                                    @elseif(
                                                        isset($prescription->jumlah)
                                                        &&
                                                        $prescription->jumlah
                                                    )

                                                        · Jumlah:
                                                        {{ $prescription->jumlah }}

                                                    @endif

                                                </div>

                                            </div>

                                        </div>


                                        @if(
                                            isset($prescription->instructions)
                                            &&
                                            $prescription->instructions
                                        )

                                            <div
                                                class="medicine-detail text-end">

                                                {{ $prescription->instructions }}

                                            </div>

                                        @elseif(
                                            isset($prescription->aturan_pakai)
                                            &&
                                            $prescription->aturan_pakai
                                        )

                                            <div
                                                class="medicine-detail text-end">

                                                {{ $prescription->aturan_pakai }}

                                            </div>

                                        @endif

                                    </div>

                                @endforeach

                            @else

                                <div class="no-prescription">

                                    <i class="bi bi-info-circle me-1"></i>

                                    Tidak ada resep obat pada
                                    pemeriksaan ini.

                                </div>

                            @endif

                        </div>

                    </div>

                </div>

            @endforeach

        @else

            <!-- EMPTY -->

            <div class="empty-card">

                <div class="empty-icon">

                    <i class="bi bi-journal-x"></i>

                </div>

                <h5>
                    Belum Ada Riwayat Pemeriksaan
                </h5>

                <p>
                    Riwayat pemeriksaan Anda akan muncul setelah
                    melakukan konsultasi dengan dokter.
                </p>

            </div>

        @endif


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