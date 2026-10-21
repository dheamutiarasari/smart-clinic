<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rekam Medis - Smart Clinic</title>

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
            --border: #DDD6FE;
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
            box-shadow: 4px 0 20px rgba(59, 7, 100, 0.18);
            z-index: 1000;
        }

        .sidebar-brand {
            height: 75px;
            display: flex;
            align-items: center;
            padding: 0 25px;
            font-size: 20px;
            font-weight: 700;
            border-bottom: 1px solid rgba(255,255,255,0.12);
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
            margin: 0 15px 12px;
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
            transition: 0.2s;
        }

        .sidebar-link:hover {
            background: rgba(255,255,255,0.10);
            color: white;
        }

        .sidebar-link.active {
            background: linear-gradient(
                135deg,
                var(--purple-soft),
                var(--purple)
            );
            color: white;
            box-shadow: 0 8px 20px rgba(124,58,237,0.28);
        }

        .sidebar-link i {
            font-size: 18px;
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
            box-shadow: 0 5px 18px rgba(76,29,149,0.18);
        }

        .topbar-title {
            font-size: 19px;
            font-weight: 700;
            margin: 0;
        }

        .topbar-subtitle {
            color: #E9D5FF;
            font-size: 13px;
            margin-top: 2px;
        }

        .doctor-avatar {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: rgba(255,255,255,0.18);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 19px;
        }

        /* CONTENT */

        .content {
            padding: 30px;
        }

        .page-header {
            margin-bottom: 22px;
        }

        .page-title {
            font-size: 26px;
            font-weight: 700;
            color: var(--purple-deep);
            margin-bottom: 5px;
        }

        .page-subtitle {
            color: var(--muted);
            margin: 0;
        }

        /* PATIENT CARD */

        .patient-card {
            background: linear-gradient(
                135deg,
                #4C1D95,
                #6D28D9,
                #8B5CF6
            );
            color: white;
            border-radius: 22px;
            padding: 25px;
            margin-bottom: 22px;
            box-shadow: 0 12px 30px rgba(76,29,149,0.20);
        }

        .patient-icon {
            width: 58px;
            height: 58px;
            border-radius: 17px;
            background: rgba(255,255,255,0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 27px;
        }

        .patient-name {
            font-size: 21px;
            font-weight: 700;
            margin-bottom: 4px;
        }

        .patient-label {
            color: #E9D5FF;
            font-size: 13px;
        }

        .patient-info {
            margin-top: 20px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
        }

        .info-box {
            background: rgba(255,255,255,0.12);
            border: 1px solid rgba(255,255,255,0.14);
            border-radius: 14px;
            padding: 14px;
        }

        .info-label {
            font-size: 12px;
            color: #DDD6FE;
            margin-bottom: 4px;
        }

        .info-value {
            font-weight: 600;
        }

        /* FORM CARD */

        .form-card {
            background: linear-gradient(
                135deg,
                #FFFFFF,
                #F5F3FF
            );
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 28px;
            box-shadow: 0 8px 25px rgba(76,29,149,0.08);
        }

        .form-title {
            font-size: 20px;
            font-weight: 700;
            color: var(--purple-deep);
            margin-bottom: 5px;
        }

        .form-subtitle {
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
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 12px 14px;
            background: #FFFFFF;
            color: var(--text);
        }

        .form-control:focus {
            border-color: var(--purple-soft);
            box-shadow: 0 0 0 0.2rem rgba(124,58,237,0.12);
        }

        .form-control::placeholder {
            color: #A99ABB;
        }

        textarea.form-control {
            resize: vertical;
        }

        /* ERROR */

        .error-box {
            background: #FEE2E2;
            border: 1px solid #FCA5A5;
            color: #991B1B;
            border-radius: 13px;
            padding: 15px 18px;
            margin-bottom: 22px;
        }

        .error-box ul {
            margin: 0;
            padding-left: 20px;
        }

        /* BUTTON */

        .btn-purple {
            background: linear-gradient(
                135deg,
                #6D28D9,
                #8B5CF6
            );
            color: white;
            border: none;
            border-radius: 11px;
            padding: 11px 18px;
            font-weight: 600;
            transition: 0.2s;
        }

        .btn-purple:hover {
            color: white;
            transform: translateY(-1px);
            box-shadow: 0 8px 18px rgba(124,58,237,0.25);
        }

        .btn-back {
            background: #E9D5FF;
            color: var(--purple-deep);
            border: 1px solid #C4B5FD;
            border-radius: 11px;
            padding: 11px 18px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 7px;
        }

        .btn-back:hover {
            background: #DDD6FE;
            color: var(--purple-deep);
        }

        .button-area {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 25px;
            gap: 10px;
        }

        /* MOBILE */

        @media (max-width: 768px) {

            .sidebar {
                width: 72px;
            }

            .sidebar-brand {
                padding: 0;
                justify-content: center;
                font-size: 0;
            }

            .sidebar-brand i {
                font-size: 24px;
            }

            .sidebar-title,
            .sidebar-link span {
                display: none;
            }

            .sidebar-link {
                justify-content: center;
                padding: 13px;
            }

            .main {
                margin-left: 72px;
            }

            .topbar {
                padding: 0 15px;
            }

            .content {
                padding: 20px 15px;
            }

            .patient-info {
                grid-template-columns: 1fr;
            }

            .button-area {
                flex-direction: column;
                align-items: stretch;
            }

            .btn-back,
            .btn-purple {
                justify-content: center;
                width: 100%;
            }
        }

    </style>
</head>

<body>

<!-- SIDEBAR -->

<aside class="sidebar">

    <div class="sidebar-brand">
        <i class="bi bi-heart-pulse-fill me-2"></i>
        Smart Clinic
    </div>

    <div class="sidebar-content">

        <div class="sidebar-title">
            Menu Dokter
        </div>

        <a href="{{ route('doctor.dashboard') }}"
           class="sidebar-link">

            <i class="bi bi-grid-1x2-fill"></i>

            <span>Dashboard</span>

        </a>

        <a href="{{ route('doctor.queues.index') }}"
           class="sidebar-link active">

            <i class="bi bi-people-fill"></i>

            <span>Antrean Pasien</span>

        </a>

    </div>

</aside>


<!-- MAIN -->

<main class="main">

    <!-- TOPBAR -->

    <header class="topbar">

        <div>
            <div class="topbar-title">
                Rekam Medis Pasien
            </div>

            <div class="topbar-subtitle">
                Smart Clinic • Pemeriksaan Pasien
            </div>
        </div>

        <div class="doctor-avatar">
            <i class="bi bi-person-badge-fill"></i>
        </div>

    </header>


    <!-- CONTENT -->

    <div class="content">

        <div class="page-header">

            <h1 class="page-title">
                Rekam Medis
            </h1>

            <p class="page-subtitle">
                Catat hasil pemeriksaan pasien dengan lengkap dan akurat.
            </p>

        </div>


        <!-- DATA PASIEN -->

        <div class="patient-card">

            <div class="d-flex align-items-center gap-3">

                <div class="patient-icon">
                    <i class="bi bi-person-heart"></i>
                </div>

                <div>

                    <div class="patient-label">
                        DATA PASIEN
                    </div>

                    <div class="patient-name">
                        {{ $appointment->patient->name ?? '-' }}
                    </div>

                </div>

            </div>


            <div class="patient-info">

                <div class="info-box">

                    <div class="info-label">
                        <i class="bi bi-person-badge me-1"></i>
                        Dokter
                    </div>

                    <div class="info-value">
                        {{ $appointment->doctorSchedule->doctor->name ?? '-' }}
                    </div>

                </div>


                <div class="info-box">

                    <div class="info-label">
                        <i class="bi bi-ticket-perforated me-1"></i>
                        Nomor Antrean
                    </div>

                    <div class="info-value">
                        {{ $appointment->queue_number }}
                    </div>

                </div>


                <div class="info-box">

                    <div class="info-label">
                        <i class="bi bi-calendar-check me-1"></i>
                        Tanggal
                    </div>

                    <div class="info-value">
                        {{ $appointment->appointment_date ?? '-' }}
                    </div>

                </div>

            </div>

        </div>


        <!-- FORM -->

        <div class="form-card">

            <div class="form-title">
                <i class="bi bi-clipboard2-pulse me-2"></i>
                Hasil Pemeriksaan
            </div>

            <div class="form-subtitle">
                Isi data pemeriksaan pasien sebelum melanjutkan ke resep.
            </div>


            @if($errors->any())

                <div class="error-box">

                    <strong>
                        <i class="bi bi-exclamation-triangle me-1"></i>
                        Periksa kembali data yang dimasukkan.
                    </strong>

                    <ul class="mt-2">

                        @foreach($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif


            <form method="POST"
                  action="{{ route('doctor.medical-records.store', $appointment->id) }}">

                @csrf


                <!-- KELUHAN -->

                <div class="mb-4">

                    <label class="form-label">
                        <i class="bi bi-chat-left-text me-1"></i>
                        Keluhan Pasien
                    </label>

                    <textarea
                        name="complaint"
                        class="form-control"
                        rows="4"
                        placeholder="Masukkan keluhan yang disampaikan pasien">{{ old('complaint') }}</textarea>

                </div>


                <!-- DIAGNOSIS -->

                <div class="mb-4">

                    <label class="form-label">
                        <i class="bi bi-clipboard2-check me-1"></i>
                        Diagnosis
                    </label>

                    <textarea
                        name="diagnosis"
                        class="form-control"
                        rows="4"
                        placeholder="Masukkan diagnosis pasien">{{ old('diagnosis') }}</textarea>

                </div>


                <!-- TEKANAN DARAH -->

                <div class="mb-4">

                    <label class="form-label">
                        <i class="bi bi-heart-pulse me-1"></i>
                        Tekanan Darah
                    </label>

                    <input
                        type="text"
                        name="blood_pressure"
                        class="form-control"
                        placeholder="Contoh: 120/80"
                        value="{{ old('blood_pressure') }}">

                </div>


                <!-- CATATAN -->

                <div class="mb-4">

                    <label class="form-label">
                        <i class="bi bi-journal-text me-1"></i>
                        Catatan Dokter
                    </label>

                    <textarea
                        name="notes"
                        class="form-control"
                        rows="4"
                        placeholder="Masukkan catatan tambahan dari dokter">{{ old('notes') }}</textarea>

                </div>


                <!-- BUTTON -->

                <div class="button-area">

                    <a href="{{ route('doctor.queues.index') }}"
                       class="btn-back">

                        <i class="bi bi-arrow-left"></i>

                        Kembali ke Antrean

                    </a>


                    <button type="submit"
                            class="btn-purple">

                        <i class="bi bi-check2-circle me-1"></i>

                        Simpan & Lanjut ke Resep

                    </button>

                </div>

            </form>

        </div>

    </div>

</main>

</body>

</html>