@extends('template.layout')
@section('title', 'Data Stok')
@section('style')
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css" /> --}}
    <link rel="stylesheet" href="{{ url('backendA/assets/vendor_components/datatable/datatables.css') }}">
    <link rel="stylesheet" href="{{ url('backendA/assets/vendor_components/datatable/datatables.min.css') }}">

@endsection
@section('content')
    <div class="content p-2 ml-2">
        <div class="d-flex align-items-center">
            <div class="mr-auto mt-5">
                <h3 class="page-title ml-3">Data Stok Barang</h3>
                <div class="d-inline-block align-items-center">
                </div>
            </div>
        </div>
        <div class="card">
            <div class="container-fluid">
                <div class="card-header">
                    <h5>
                        Data Stok Barang
                    </h5>
                </div>
                {{-- body --}}
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 mb-3 d-flex justify-content-end ">
                            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-lg"> --}}
                            <a href="{{ route('stok.create') }}" class="btn btn-primary ">
                                <i class="bi bi-plus"></i>
                                New
                            </a>
                        </div>
                    </div>

                    {{-- table --}}
                    <div class="box">
                        <div class="table-responsive p-2">
                            <table id="complex_header" class="table table-striped table-bordered display dataTable"
                                style="width: 100%;" role="grid" aria-describedby="complex_header_info">
                                {{-- <table id="basic-datatables" class="display table table-striped table-hover dataTable"> --}}
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Kode </th>
                                        <th>Nama</th>
                                        <th>Satuan</th>
                                        <th>Kategory</th>
                                        <th>Saldo Awal</th>
                                        <th>Harga Beli</th>
                                        <th>Harga Jual</th>
                                        <th>Modal</th>
                                        <th class="text-center">
                                            <div style="width: 300px">Foto</div>
                                        </th>
                                        <th>Dskripsi</th>
                                        <th>Pajang</th>
                                        <th>Saldo Akhir</th>
                                        <th>action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($stok as $item => $value)
                                        <tr class="mt-2">
                                            <td class="text-center">{{ $item + 1 }}</td>
                                            <td class="text-center">{{ $value->kode }}</td>
                                            <td>
                                                <div style="width: 100px">{{ $value->nama }}</div>
                                            </td>
                                            <td>{{ $value->satuan->nama }}</td>
                                            <td>{{ $value->kategori->nama }}</td>
                                            <td>
                                                <div style="width: 100px">
                                                    {{ number_format($value->saldoawal, 0, ',', '.') }}
                                                </div>
                                            </td>
                                            <td>
                                                <div style="width: 100px">
                                                    {{ number_format($value->hargabeli, 0, ',', '.') }}
                                                </div>
                                            </td>
                                            <td>
                                                <div style="width: 100px">
                                                    {{ number_format($value->hargajual, 0, ',', '.') }}
                                                </div>
                                            </td>
                                            <td>
                                                <div style="width: 100px">
                                                    {{ number_format($value->hargamodal, 0, ',', '.') }}
                                                </div>
                                            </td>
                                            <td class="d-flex">
                                                @foreach (json_decode($value->foto) as $path)
                                                    <img class="p-1" src="{{ Storage::url($path) }}"
                                                        alt="{{ $value->name }}" width="70" height="70">
                                                @endforeach
                                            </td>
                                            <td>
                                                <div style="width: 300px">
                                                    <p class="text-truncate" style="max-width: 200px;">
                                                        {{ $value->desk }}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge badge-success-light badge-lg">
                                                    {{ $value->pajang }} </span>
                                            </td>
                                            <td>
                                                <div style="width: 100px">
                                                    {{ number_format($value->saldoakhir, 0, ',', '.') }}
                                                </div>
                                            </td>

                                            <td class="text-center">
                                                <a class="btn btn-warning btn-sm"
                                                    href="{{ route('stok.edit', ['stok' => $value->id]) }}">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <form id="form"
                                                    action="{{ route('stok.destroy', ['stok' => $value->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-danger confirm-button btn-sm mt-2">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    {{-- <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> --}}
    <script src="{{ url('backendA/assets/vendor_components/datatable/datatables.js') }}"></script>
    <script src="{{ url('backendA/assets/vendor_components/datatable/datatables.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.display').DataTable();

            $('.confirm-button').click(function(event) {
                var form = $(this).closest("form");
                event.preventDefault();
                Swal.fire({
                    title: "Anda Yakin?",
                    text: "Pastikan Data Kembali Data Yang akan Dihapus!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, Hapus!",
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endsection
