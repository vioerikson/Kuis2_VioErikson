<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Informasi Fakultas</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">

    <style>

        :root{
            --primary:#111827;
            --secondary:#6b7280;
            --light:#f9fafb;
            --border:#e5e7eb;
        }

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:'Inter',sans-serif;
            background:var(--light);
            color:var(--primary);
        }

        /* NAVBAR */
        .navbar{
            background:rgba(255,255,255,0.85);
            backdrop-filter:blur(12px);
            border-bottom:1px solid var(--border);
            padding:18px 0;
        }

        .navbar-brand{
            font-size:24px;
            font-weight:800;
            color:var(--primary)!important;
            letter-spacing:-0.5px;
        }

        .nav-link{
            color:var(--secondary)!important;
            font-weight:500;
            transition:.3s;
            position:relative;
        }

        .nav-link:hover{
            color:var(--primary)!important;
        }

        .nav-link::after{
            content:'';
            position:absolute;
            left:0;
            bottom:-5px;
            width:0%;
            height:2px;
            background:var(--primary);
            transition:.3s;
        }

        .nav-link:hover::after{
            width:100%;
        }

        /* BUTTON */
        .btn-dark-custom{
            background:var(--primary);
            color:white;
            border:none;
            border-radius:14px;
            padding:12px 24px;
            font-weight:600;
            transition:.3s;
        }

        .btn-dark-custom:hover{
            background:#000;
            transform:translateY(-2px);
            color:white;
        }

        /* MAIN */
        main{
            min-height:100vh;
        }

        /* CARD */
        .card{
            border:none;
            border-radius:24px;
            background:white;
            box-shadow:
                0 4px 20px rgba(0,0,0,0.04);
        }

        /* FOOTER */
        footer{
            border-top:1px solid var(--border);
            background:white;
            padding:30px 0;
            margin-top:60px;
        }

        .footer-title{
            font-weight:700;
            color:var(--primary);
        }

        .footer-text{
            color:var(--secondary);
        }

        /* SCROLLBAR */
        ::-webkit-scrollbar{
            width:8px;
        }

        ::-webkit-scrollbar-thumb{
            background:#d1d5db;
            border-radius:20px;
        }

        ::-webkit-scrollbar-track{
            background:#f3f4f6;
        }

    </style>

</head>

<body>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg sticky-top">

        <div class="container">

            {{-- LOGO --}}
            <a class="navbar-brand" href="/">
                🎓 SI Fakultas
            </a>

            {{-- TOGGLER --}}
            <button class="navbar-toggler border-0 shadow-none"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav">

                <span class="navbar-toggler-icon"></span>

            </button>

            {{-- MENU --}}
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">

                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/fakultas">
                            Fakultas
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('prodi.index') }}">
                            Prodi
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('prodi.create') }}">
                            Tambah Prodi
                        </a>
                    </li>

                    <li class="nav-item ms-lg-2">

                        <a href="/fakultas/create"
                           class="btn btn-dark-custom">

                            + Tambah Fakultas

                        </a>

                    </li>

                </ul>

            </div>

        </div>

    </nav>


    {{-- CONTENT --}}
    <main>

        {{ $slot }}

    </main>


    {{-- FOOTER --}}
    <footer>

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-6">

                    <h5 class="footer-title mb-1">
                        🎓 Sistem Informasi Fakultas
                    </h5>

                    <small class="footer-text">
                        Modern Academic Management System
                    </small>

                </div>

                <div class="col-md-6 text-md-end mt-3 mt-md-0">

                    <small class="footer-text">
                        © {{ date('Y') }} All Rights Reserved
                    </small>

                </div>

            </div>

        </div>

    </footer>


    {{-- BOOTSTRAP --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>