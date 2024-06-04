@extends('template.layout')
@section('title', 'Biodata')
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
                                    <th>Alamat</th>
                                    <th>Jurusan</th>
                                    <th>email</th>
                                    <th>action</th>
                                </tr>
                            </thead>

                            <tbody class="text-center">
                                @foreach ($bio as $item => $value)
                                    <tr>
                                        <td>{{ $item + 1 }}</td>
                                        <td>{{ $value->nama }}</td>
                                        <td>{{ $value->alamat }}</td>
                                        <td>{{ $value->jurusan }}</td>
                                        <td>{{ $value->email }}</td>
                                        <td class="d-flex justify-content-center align-items-center gap-3">
                                            <a class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#modal-lg-{{ $value->id }}">
                                                <i class="bi bi-pen"></i>
                                            </a>
                                            <form action="{{ route('biodata.destroy', ['biodatum' => $value->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm confirm-button">
                                                    <i class="bi bi-trash"></i>
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
                    <form action="{{ route('biodata.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Masukan Nama</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="nama"
                                placeholder="masukan nama " required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Masukan Alamat</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="alamat"
                                placeholder="masukan alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Masukan Jurusan</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="jurusan"
                                placeholder="masukan jurusan" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Masukan E-mail</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                placeholder="masukan email" required>
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
            </div>
        </div>
    </div>
    @foreach ($bio as $value)
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
                        <form action="{{ route('biodata.update', ['biodatum' => $value->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="exampleInputEmail1">Masukan Nama</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="nama"
                                    placeholder="masukan nama barang" value="{{ $value->nama }}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Masukan Alamat</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="alamat"
                                    placeholder="masukan nama barang" value="{{ $value->alamat }}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Masukan Jurusan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="jurusan"
                                    placeholder="masukan nama barang" value="{{ $value->jurusan }}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Masukan E-mail</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                    placeholder="masukan nama barang" value="{{ $value->email }}" required>
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
                </div>
            </div>
        </div>
    @endforeach
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('.display').DataTable();
        });
        $('.confirm-button').click(function(event) {
            var form = $(this).closest("form");
            event.preventDefault();
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
                // reverseButtons: true
            }).then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
        });
    </script>
@endsection
