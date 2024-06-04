@extends('template.layout')
@section('title', 'Mutasi')
@section('content')
    <div class="content p-2">
        <div class="card">
            <div class="container-fluid">
                <div class="card-header">
                    <h4>Table Mutasi</h4>
                </div>
                {{-- body --}}
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-2">
                            <label for="">NO bukti</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="col-md-2">
                            <label for="">Jenis</label>
                            <select class="form-control" type="text">
                                <option value="">--select--</option>
                                <option value="">Masuk</option>
                                <option value="">keluar</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="">Barang</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="col-md-2">
                            <label for="">jumlah</label>
                            <input class="form-control" type="number">
                        </div>
                        <div class="col-md-2">
                            <label for="">Harga</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="col-md-2 mt-4">
                            <button type="submit" class="btn btn-primary">save</button>
                        </div>
                    </div>

                    {{-- table --}}
                    <div class="table-responsive mt-5">
                        <table id="basic-datatables" class="display table table-striped table-hover dataTable">
                            <thead class="text-center">
                                <tr>
                                    <th>NO</th>
                                    <th>No bukti </th>
                                    <th>Jenis</th>
                                    <th>Nama Barang</th>
                                    <th>jumlah</th>
                                    <th>harga</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
