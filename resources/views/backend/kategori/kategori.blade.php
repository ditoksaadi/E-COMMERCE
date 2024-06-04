@extends('template.layout')
@section('title', 'Data kategori')
@section('content')
    <div class="content p-2">
        <div class="card">
            <div class="container-fluid">
                {{-- body --}}
                <div class="card-body">

                    <div class="row">
                        <div class="col-sm-12 col-md-12 mb-3 d-flex justify-content-end ">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-lg">
                                <i class="bi bi-plus"></i>
                                New
                            </button>
                        </div>
                    </div>

                    {{-- table --}}
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover dataTable">
                            <thead class="text-center">
                                <tr>
                                    <th>NO</th>
                                    <th>Nama </th>
                                    <th>action</th>
                                </tr>
                            </thead>

                            <tbody class="text-center">
                                @foreach ($kategori as $item => $value)
                                    <tr>
                                        <td>{{ $item + 1 }}</td>
                                        <td>{{ $value->nama }}</td>
                                        <td class="d-flex justify-content-center align-items-center gap-3">
                                            <a class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#modal-lg-{{ $value->id }}">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <form id="form"
                                                action="{{ route('kategori.destroy', ['kategori' => $value->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger confirm-button btn-sm ml-2">
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

    {{-- input modal --}}
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                {{-- input form --}}
                <div class="modal-body">
                    <form action="{{ route('kategori.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Masukan Nama</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="nama"
                                placeholder="masukan nama " required>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-bs-dismiss="modal">
                                <id class="bi bi-backspace"></id>
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary"><i class="bi bi-floppy"></i> Save</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->

            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>
    {{-- modal edit --}}
    @foreach ($kategori as $value)
        <div class="modal fade" id="modal-lg-{{ $value->id }}">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Data</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{-- input form --}}
                        <form action="{{ route('kategori.update', ['kategori' => $value->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="exampleInputEmail1">Masukan Nama</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="nama"
                                    placeholder="masukan nama barang" value="{{ $value->nama }}" required>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-bs-dismiss="modal"><i
                                        class="bi bi-backspace"></i>
                                    Back</button>
                                <button type="submit" class="btn btn-primary"><i class="bi bi-floppy"></i>
                                    Simpan</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        </div>
    @endforeach
@endsection
@section('script')
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
