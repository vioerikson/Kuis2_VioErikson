<x-layout>

    <div class="container py-5">

        {{-- HEADER --}}
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">

            <div>

                <h2 class="fw-bold text-dark mb-1">
                    📚 List Fakultas
                </h2>

                <p class="text-muted mb-0">
                    Data seluruh fakultas universitas
                </p>

            </div>


            <a href="/fakultas/create"
               class="btn btn-dark rounded-4 px-4 py-3 fw-semibold shadow-sm">

                + Tambah Fakultas

            </a>

        </div>


        {{-- CARD --}}
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

            <div class="card-body p-0">

                <div class="table-responsive">

                    <table class="table align-middle mb-0 custom-table">

                        <thead>

                            <tr>

                                <th width="5%">
                                    No
                                </th>

                                <th>
                                    Nama Fakultas
                                </th>

                                <th>
                                    Nama Dekan
                                </th>

                                <th class="text-center" width="30%">
                                    Aksi
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            @forelse ($fakultas as $item)

                                <tr>

                                    <td class="fw-semibold text-muted">

                                        {{ $loop->iteration }}

                                    </td>

                                    <td>

                                        <div class="fw-bold text-dark">

                                            {{ $item->nama_fakultas }}

                                        </div>

                                    </td>

                                    <td class="text-muted">

                                        {{ $item->nama_dekan }}

                                    </td>

                                    <td>

                                        <div class="d-flex justify-content-center flex-wrap gap-2">

                                            {{-- DETAIL --}}
                                            <a href="/fakultas/{{ $item->id }}"
                                               class="btn btn-light border rounded-3 px-3">

                                                👁 Detail

                                            </a>


                                            {{-- EDIT --}}
                                            <a href="/fakultas/{{ $item->id }}/edit"
                                               class="btn btn-dark rounded-3 px-3">

                                                ✏ Edit

                                            </a>


                                            {{-- DELETE --}}
                                            <form action="/fakultas/{{ $item->id }}"
                                                  method="POST"
                                                  onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                        class="btn btn-outline-danger rounded-3 px-3">

                                                    🗑 Hapus

                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="4"
                                        class="text-center py-5 text-muted">

                                        Data fakultas belum tersedia

                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>


            {{-- FOOTER --}}
            <div class="card-footer bg-white border-top text-center py-4">

                <small class="text-muted">
                    Sistem Informasi Fakultas
                </small>

            </div>

        </div>

    </div>


    {{-- STYLE --}}
    <style>

        .custom-table thead{
            background:#f9fafb;
        }

        .custom-table thead th{
            padding:20px;
            border:none;
            font-size:14px;
            color:#6b7280;
            font-weight:600;
        }

        .custom-table tbody td{
            padding:20px;
            border-top:1px solid #f1f5f9;
            vertical-align:middle;
        }

        .custom-table tbody tr{
            transition:.2s;
        }

        .custom-table tbody tr:hover{
            background:#fafafa;
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
            background:#fff;
            transition:.3s;
        }

        .btn-light:hover{
            background:#f9fafb;
            transform:translateY(-2px);
        }

        .btn-outline-danger{
            transition:.3s;
        }

        .btn-outline-danger:hover{
            transform:translateY(-2px);
        }

        .card{
            background:#fff;
        }

    </style>

</x-layout>