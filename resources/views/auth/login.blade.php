<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Smart Clinic</title>

    <style>
        :root {
            --purple-dark: #2E0757;
            --purple-deep: #3B0764;
            --purple-main: #6D28D9;
            --purple: #7C3AED;
            --purple-light: #8B5CF6;
            --purple-soft: #A78BFA;
            --lavender: #E9D5FF;
            --background: #F3E8FF;
            --text: #2E1065;
            --muted: #7E6A9B;
            --border: #DDD6FE;
            --white: #FFFFFF;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
            font-family: "Segoe UI", Arial, sans-serif;
            color: var(--text);
            background:
                radial-gradient(
                    circle at top left,
                    #FFFFFF 0%,
                    transparent 35%
                ),
                linear-gradient(
                    135deg,
                    #EDE9FE,
                    var(--background),
                    #DDD6FE
                );
        }

        /* KARTU UTAMA */

        .login-wrapper {
            width: 100%;
            max-width: 1050px;
            min-height: 600px;
            display: flex;
            overflow: hidden;
            background: var(--white);
            border: 1px solid #DDD6FE;
            border-radius: 24px;
            box-shadow: 0 22px 65px rgba(76, 29, 149, 0.22);
        }

        /* PANEL KIRI */

        .login-banner {
            position: relative;
            width: 43%;
            padding: 55px 42px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            overflow: hidden;
            color: var(--white);
            background: linear-gradient(
                145deg,
                #2E0757 0%,
                #4C1D95 48%,
                #7C3AED 100%
            );
        }

        .login-banner::before {
            content: "";
            position: absolute;
            width: 260px;
            height: 260px;
            top: -95px;
            right: -90px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.07);
        }

        .login-banner::after {
            content: "";
            position: absolute;
            width: 210px;
            height: 210px;
            bottom: -90px;
            left: -75px;
            border-radius: 50%;
            background: rgba(196, 181, 253, 0.12);
        }

        .brand {
            position: relative;
            z-index: 1;
        }

        /* LOGO HATI DAN DETAK JANTUNG */

        .brand-icon {
            width: 86px;
            height: 86px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 28px;
            border: 1px solid rgba(255, 255, 255, 0.35);
            border-radius: 25px;
            background: linear-gradient(
                145deg,
                rgba(196, 181, 253, 0.30),
                rgba(255, 255, 255, 0.10)
            );
            box-shadow: 0 10px 30px rgba(30, 0, 70, 0.20);
        }

        .brand-icon svg {
            width: 49px;
            height: 49px;
            color: white;
        }

        .brand h1 {
            margin-bottom: 13px;
            font-size: 35px;
            font-weight: 700;
            letter-spacing: 0.3px;
        }

        .brand-description {
            max-width: 300px;
            color: #E9D5FF;
            font-size: 14px;
            line-height: 1.9;
        }

        .feature-list {
            display: grid;
            gap: 17px;
            margin-top: 36px;
        }

        .feature {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #F5F3FF;
            font-size: 13px;
        }

        .feature-icon {
            width: 31px;
            height: 31px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid rgba(255, 255, 255, 0.16);
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.12);
            color: white;
            font-size: 15px;
        }

        .banner-footer {
            position: relative;
            z-index: 1;
            margin-top: 45px;
            color: #DDD6FE;
            font-size: 10px;
            letter-spacing: 1px;
        }

        /* PANEL FORM LOGIN */

        .login-content {
            flex: 1;
            min-width: 0;
            padding: 55px 62px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: #FFFFFF;
        }

        .welcome-label {
            display: inline-block;
            width: fit-content;
            margin-bottom: 17px;
            padding: 8px 14px;
            border: 1px solid #E9D5FF;
            border-radius: 30px;
            background: #F5F0FF;
            color: #6D28D9;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.7px;
            text-transform: uppercase;
        }

        .login-content h2 {
            margin-bottom: 12px;
            color: #3B0764;
            font-size: 30px;
            line-height: 1.35;
        }

        .login-description {
            margin-bottom: 32px;
            color: #7E6A9B;
            font-size: 14px;
            line-height: 1.8;
        }

        .session-message {
            margin-bottom: 20px;
            padding: 13px 15px;
            border: 1px solid #DDD6FE;
            border-radius: 10px;
            background: #F5F0FF;
            color: #4C1D95;
            font-size: 13px;
            line-height: 1.6;
        }

        .form-group {
            margin-bottom: 22px;
        }

        .form-group label {
            display: block;
            margin-bottom: 9px;
            color: #4C1D95;
            font-size: 13px;
            font-weight: 600;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #8B5CF6;
            font-size: 17px;
            pointer-events: none;
        }

        .form-group input {
            width: 100%;
            height: 50px;
            padding: 0 15px 0 44px;
            border: 1px solid #DDD6FE;
            border-radius: 10px;
            outline: none;
            background: #FAF8FF;
            color: #2E1065;
            font-family: inherit;
            font-size: 13px;
            transition: 0.2s ease;
        }

        .form-group input::placeholder {
            color: #A99ABF;
        }

        .form-group input:focus {
            border-color: #8B5CF6;
            background: #FFFFFF;
            box-shadow: 0 0 0 4px rgba(139, 92, 246, 0.12);
        }

        .error-message {
            margin-top: 8px;
            color: #DC2626;
            font-size: 12px;
            line-height: 1.7;
        }

        /* INGAT SAYA */

        .form-options {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            flex-wrap: wrap;
            margin-bottom: 26px;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #7E6A9B;
            font-size: 12px;
            cursor: pointer;
        }

        .remember input {
            width: 15px;
            height: 15px;
            accent-color: #7C3AED;
            cursor: pointer;
        }

        .forgot-link {
            color: #7C3AED;
            font-size: 12px;
            text-decoration: none;
        }

        .forgot-link:hover {
            color: #4C1D95;
            text-decoration: underline;
        }

        /* TOMBOL LOGIN */

        .login-button {
            width: 100%;
            min-height: 51px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            border: none;
            border-radius: 11px;
            background: linear-gradient(
                100deg,
                #4C1D95,
                #7C3AED,
                #8B5CF6
            );
            box-shadow: 0 8px 20px rgba(109, 40, 217, 0.25);
            color: #FFFFFF;
            font-family: inherit;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.2s ease;
        }

        .login-button:hover {
            transform: translateY(-2px);
            background: linear-gradient(
                100deg,
                #3B0764,
                #6D28D9,
                #7C3AED
            );
            box-shadow: 0 11px 25px rgba(109, 40, 217, 0.30);
        }

        .button-arrow {
            font-size: 19px;
        }

        /* FOOTER */

        .login-footer {
            margin-top: 34px;
            padding-top: 20px;
            border-top: 1px solid #F0EAFE;
            color: #7E6A9B;
            text-align: center;
            font-size: 11px;
            line-height: 1.9;
        }

        .login-footer strong {
            color: #7C3AED;
        }

        /* TAMPILAN TABLET */

        @media (max-width: 850px) {
            body {
                padding: 20px;
            }

            .login-wrapper {
                max-width: 520px;
                min-height: auto;
            }

            .login-banner {
                display: none;
            }

            .login-content {
                padding: 45px 40px;
            }
        }

        /* TAMPILAN HP */

        @media (max-width: 480px) {
            body {
                padding: 14px;
            }

            .login-wrapper {
                border-radius: 18px;
            }

            .login-content {
                padding: 35px 23px;
            }

            .login-content h2 {
                font-size: 26px;
            }

            .login-description {
                margin-bottom: 25px;
            }

            .form-options {
                align-items: flex-start;
            }
        }
    </style>
</head>

<body>

    <main class="login-wrapper">

        <!-- PANEL IDENTITAS SMART CLINIC -->
        <section class="login-banner">

            <div class="brand">

                <!-- LOGO HATI DENGAN GARIS DETAK JANTUNG -->
                <div class="brand-icon">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.7"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        role="img"
                        aria-label="Logo hati dan detak jantung"
                    >
                        <path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.7l-1.1-1.1a5.5 5.5 0 0 0-7.8 7.8l1.1 1.1L12 21l7.8-7.5 1.1-1.1a5.5 5.5 0 0 0-.1-7.8Z"/>
                        <path d="M3.5 12h4l2-3.5 3.2 7 2.1-3.5h5.7"/>
                    </svg>
                </div>

                <h1>Smart Clinic</h1>

                <p class="brand-description">
                    Sistem Informasi Pelayanan Kesehatan
                    yang modern, mudah, dan terintegrasi.
                </p>

                <div class="feature-list">

                    <div class="feature">
                        <span class="feature-icon">✓</span>
                        <span>Pengelolaan data pasien</span>
                    </div>

                    <div class="feature">
                        <span class="feature-icon">✓</span>
                        <span>Jadwal praktik dokter</span>
                    </div>

                    <div class="feature">
                        <span class="feature-icon">✓</span>
                        <span>Pelayanan kesehatan terpadu</span>
                    </div>

                </div>
            </div>

            <div class="banner-footer">
                SMART CLINIC · HEALTHCARE MANAGEMENT SYSTEM
            </div>

        </section>

        <!-- PANEL LOGIN -->
        <section class="login-content">

            <span class="welcome-label">
                Selamat Datang
            </span>

            <h2>Masuk ke Akun Anda</h2>

            <p class="login-description">
                Silakan masukkan email dan password
                untuk mengakses layanan Smart Clinic.
            </p>

            <!-- PESAN STATUS -->
            @if (session('status'))
                <div class="session-message">
                    {{ session('status') }}
                </div>
            @endif

            <!-- FORM LOGIN LARAVEL -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- EMAIL -->
                <div class="form-group">

                    <label for="email">
                        Alamat Email
                    </label>

                    <div class="input-wrapper">
                        <span class="input-icon" aria-hidden="true">
                            ✉
                        </span>

                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="nama@email.com"
                            autocomplete="username"
                            required
                            autofocus
                        >
                    </div>

                    @if ($errors->get('email'))
                        <div class="error-message">
                            @foreach ($errors->get('email') as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif

                </div>

                <!-- PASSWORD -->
                <div class="form-group">

                    <label for="password">
                        Password
                    </label>

                    <div class="input-wrapper">
                        <span class="input-icon" aria-hidden="true">
                            ●
                        </span>

                        <input
                            id="password"
                            type="password"
                            name="password"
                            placeholder="Masukkan password"
                            autocomplete="current-password"
                            required
                        >
                    </div>

                    @if ($errors->get('password'))
                        <div class="error-message">
                            @foreach ($errors->get('password') as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif

                </div>

                <!-- INGAT SAYA DAN LUPA PASSWORD -->
                <div class="form-options">

                    <label class="remember" for="remember">
                        <input
                            id="remember"
                            type="checkbox"
                            name="remember"
                        >

                        <span>Ingat saya</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a
                            class="forgot-link"
                            href="{{ route('password.request') }}"
                        >
                            Lupa password?
                        </a>
                    @endif

                </div>

                <!-- TOMBOL MASUK -->
                <button type="submit" class="login-button">
                    <span>Masuk ke Smart Clinic</span>
                    <span class="button-arrow">→</span>
                </button>

            </form>

            <footer class="login-footer">
                © {{ date('Y') }}
                <strong>Smart Clinic</strong>
                <br>
                Sistem Informasi Pelayanan Kesehatan
            </footer>

        </section>

    </main>

</body>
</html>