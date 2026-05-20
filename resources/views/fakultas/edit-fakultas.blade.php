<x-layout>

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-lg-6 col-md-8">

                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

                    {{-- HEADER --}}
                    <div class="p-5 border-bottom bg-white">

                        <h2 class="fw-bold text-dark mb-2">
                            ✏ Edit Fakultas
                        </h2>

                        <p class="text-muted mb-0">
                            Perbarui informasi data fakultas
                        </p>

                    </div>


                    {{-- BODY --}}
                    <div class="card-body p-5 bg-white">

                        {{-- ERROR --}}
                        @if ($errors->any())

                            <div class="alert alert-danger border-0 rounded-4">

                                <ul class="mb-0 ps-3">

                                    @foreach ($errors->all() as $error)

                                        <li>{{ $error }}</li>

                                    @endforeach

                                </ul>

                            </div>

                        @endif


                        {{-- FORM --}}
                        <form action="/fakultas/{{ $fakultas->id }}"
                              method="POST">

                            @csrf
                            @method('PUT')


                            {{-- NAMA FAKULTAS --}}
                            <div class="mb-4">

                                <label class="form-label fw-semibold text-dark">

                                    Nama Fakultas

                                </label>

                                <input
                                    type="text"
                                    name="nama_fakultas"
                                    class="form-control custom-input"
                                    placeholder="Masukkan nama fakultas"
                                    value="{{ $fakultas->nama_fakultas }}"
                                    required>

                            </div>


                            {{-- NAMA DEKAN --}}
                            <div class="mb-5">

                                <label class="form-label fw-semibold text-dark">

                                    Nama Dekan

                                </label>

                                <input
                                    type="text"
                                    name="nama_dekan"
                                    id="nama_dekan"
                                    class="form-control custom-input"
                                    placeholder="Masukkan nama dekan"
                                    value="{{ $fakultas->nama_dekan }}"
                                    required>

                            </div>


                            {{-- BUTTON --}}
                            <div class="d-flex gap-3">

                                <a href="/fakultas"
                                   class="btn btn-light border rounded-4 px-4 py-3 fw-semibold flex-fill">

                                    ← Kembali

                                </a>


                                <button
                                    type="submit"
                                    class="btn btn-dark rounded-4 px-4 py-3 fw-semibold flex-fill">

                                    💾 Update Data

                                </button>

                            </div>

                        </form>

                    </div>


                    {{-- FOOTER --}}
                    <div class="card-footer bg-white border-top text-center py-4">

                        <small class="text-muted">
                            Sistem Informasi Fakultas
                        </small>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- STYLE --}}
    <style>

        .custom-input{
            border-radius:16px;
            border:1px solid #e5e7eb;
            padding:14px 18px;
            font-size:15px;
            transition:.3s;
            box-shadow:none!important;
        }

        .custom-input:focus{
            border-color:#111827;
            box-shadow:0 0 0 4px rgba(17,24,39,0.08)!important;
        }

        .btn-dark{
            background:#111827;
            border:none;
            transition:.3s;
        }

        .btn-dark:hover{
            background:#000;
            transform:translateY(-2px);
        }

        .btn-light{
            background:#f9fafb;
            transition:.3s;
        }

        .btn-light:hover{
            background:#f3f4f6;
            transform:translateY(-2px);
        }

        .card{
            background:#fff;
        }

    </style>

</x-layout>