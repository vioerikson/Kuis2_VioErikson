<x-layout>

    {{-- HERO --}}
    <section class="bg-light py-5 overflow-hidden">

        <div class="container">

            <div class="row align-items-center min-vh-75">

                {{-- TEXT --}}
                <div class="col-lg-6">

                    <span class="badge bg-dark text-light px-3 py-2 rounded-pill mb-3">
                        🎓 Sistem Informasi Akademik
                    </span>

                    <h1 class="display-3 fw-bold mb-4 text-dark">

                        Kelola Data Fakultas
                        <span class="text-secondary">
                            Lebih Mudah
                        </span>

                    </h1>

                    <p class="lead text-muted mb-4">
                        Platform modern untuk mengelola data fakultas,
                        dekan, dan informasi akademik universitas secara
                        cepat, aman, dan profesional.
                    </p>

                    <div class="d-flex flex-wrap gap-3">

                        <a href="/fakultas"
                           class="btn btn-dark btn-lg rounded-4 px-4 shadow-sm">
                            📚 Lihat Fakultas
                        </a>

                        <a href="/fakultas/create"
                           class="btn btn-outline-dark btn-lg rounded-4 px-4">
                            ➕ Tambah Fakultas
                        </a>

                    </div>

                </div>

                {{-- IMAGE --}}
                <div class="col-lg-6 text-center mt-5 mt-lg-0">

                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135755.png"
                         class="img-fluid opacity-75"
                         style="max-height: 400px;"
                         alt="University">

                </div>

            </div>

        </div>

    </section>


    {{-- FEATURES --}}
    <section class="py-5 bg-white">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold text-dark">
                    Kenapa Menggunakan Sistem Ini?
                </h2>

                <p class="text-muted">
                    Solusi modern untuk manajemen fakultas universitas
                </p>

            </div>

            <div class="row g-4">

                {{-- CARD --}}
                <div class="col-md-4">

                    <div class="card border-0 shadow-sm rounded-4 h-100 feature-card">

                        <div class="card-body text-center p-5">

                            <div class="icon-box bg-light text-dark mx-auto mb-4">
                                ⚡
                            </div>

                            <h4 class="fw-bold text-dark">
                                Cepat & Modern
                            </h4>

                            <p class="text-muted">
                                Tampilan profesional dengan performa cepat
                                untuk pengelolaan data akademik.
                            </p>

                        </div>

                    </div>

                </div>

                {{-- CARD --}}
                <div class="col-md-4">

                    <div class="card border-0 shadow-sm rounded-4 h-100 feature-card">

                        <div class="card-body text-center p-5">

                            <div class="icon-box bg-light text-dark mx-auto mb-4">
                                🔒
                            </div>

                            <h4 class="fw-bold text-dark">
                                Aman
                            </h4>

                            <p class="text-muted">
                                Data tersimpan dengan aman menggunakan
                                framework Laravel modern.
                            </p>

                        </div>

                    </div>

                </div>

                {{-- CARD --}}
                <div class="col-md-4">

                    <div class="card border-0 shadow-sm rounded-4 h-100 feature-card">

                        <div class="card-body text-center p-5">

                            <div class="icon-box bg-light text-dark mx-auto mb-4">
                                📊
                            </div>

                            <h4 class="fw-bold text-dark">
                                Mudah Digunakan
                            </h4>

                            <p class="text-muted">
                                Interface sederhana dan intuitif untuk
                                semua pengguna kampus.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- STATISTICS --}}
    <section class="py-5 bg-light">

        <div class="container">

            <div class="row text-center g-4">

                <div class="col-md-3">

                    <div class="card border-0 shadow-sm rounded-4 p-4">

                        <h1 class="fw-bold text-dark">
                            20+
                        </h1>

                        <p class="text-muted mb-0">
                            Fakultas
                        </p>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="card border-0 shadow-sm rounded-4 p-4">

                        <h1 class="fw-bold text-dark">
                            100+
                        </h1>

                        <p class="text-muted mb-0">
                            Staff Akademik
                        </p>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="card border-0 shadow-sm rounded-4 p-4">

                        <h1 class="fw-bold text-dark">
                            5000+
                        </h1>

                        <p class="text-muted mb-0">
                            Mahasiswa
                        </p>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="card border-0 shadow-sm rounded-4 p-4">

                        <h1 class="fw-bold text-dark">
                            24/7
                        </h1>

                        <p class="text-muted mb-0">
                            Akses Sistem
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- CTA --}}
    <section class="py-5 bg-dark text-white">

        <div class="container text-center">

            <h2 class="fw-bold mb-4">
                Mulai Kelola Data Fakultas Sekarang
            </h2>

            <p class="lead text-secondary mb-4">
                Tingkatkan efisiensi administrasi akademik universitas Anda
            </p>

            <a href="/fakultas/create"
               class="btn btn-light btn-lg rounded-4 px-5">
                🚀 Mulai Sekarang
            </a>

        </div>

    </section>


    {{-- FOOTER --}}
    <footer class="bg-white border-top py-4">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-6">

                    <h5 class="fw-bold text-dark mb-1">
                        🎓 Sistem Informasi Fakultas
                    </h5>

                    <small class="text-muted">
                        Laravel Academic Management System
                    </small>

                </div>

                <div class="col-md-6 text-md-end mt-3 mt-md-0">

                    <small class="text-muted">
                        © {{ date('Y') }} All Rights Reserved
                    </small>

                </div>

            </div>

        </div>

    </footer>


    {{-- STYLE --}}
    <style>

        .min-vh-75{
            min-height: 75vh;
        }

        .feature-card{
            transition: .3s;
        }

        .feature-card:hover{
            transform: translateY(-5px);
        }

        .icon-box{
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 35px;
        }

    </style>

</x-layout>