@extends('template.layout')
@section('title', 'Data Stok')
@section('content')
    <div class="page-content p-2     mt-2">
        <div class="card p-5">
            <div class="card-body">
                <form action="{{ route('stok.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Masukan Nama</label>
                                <input type="text" class="form-control form-control-lg" id="exampleInputEmail1"
                                    name="nama" placeholder="masukan nama " required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Masukan kode</label>
                                <input type="number" class="form-control form-control-lg" id="exampleInputEmail1"
                                    name="kode" placeholder="masukan kode " required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Masukan satuan</label>
                                <select type="text" class="form-control form-control-lg" id="exampleInputEmail1"
                                    name="idsatuan" placeholder="masukan satuan" required>
                                    <option value="">--select--</option>
                                    @php
                                        $satuan = DB::table('satuans')->get();
                                    @endphp
                                    @foreach ($satuan as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Masukan kategory</label>
                                <select type="text" class="form-control form-control-lg" id="exampleInputEmail1"
                                    name="idkategori" placeholder="masukan kategori" required>
                                    <option value="">--select--</option>
                                    @php
                                        $kategori = DB::table('kategoris')->get();
                                    @endphp
                                    @foreach ($kategori as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Masukan saldo awal</label>
                                <input type="number" class="form-control form-control-lg" id="exampleInputEmail1"
                                    name="saldoawal" placeholder="masukan saldoawal" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Masukan harga beli</label>
                                <input type="number" class="form-control form-control-lg" id="exampleInputEmail1"
                                    name="hargabeli" placeholder="masukan harga beli" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Masukan harga jual</label>
                                <input type="number" class="form-control form-control-lg" id="exampleInputEmail1"
                                    name="hargajual" placeholder="masukan harga jual" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Masukan harga modal</label>
                                <input type="text" class="form-control form-control-lg" id="exampleInputEmail1"
                                    name="hargamodal" placeholder="masukan harga modal" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <img class="img-thumbnail mx-auto d-block" id="previewImage"
                                    src="{{ asset('backend/asset/images/photo.png') }}" alt="Preview"
                                    style="max-width: 100%; max-height: 200px;">
                                <label for="exampleInputEmail1">Photo</label>
                                <input type="file" class="form-control" name="foto[]" id="foto" required multiple>
                            </div>
                            <div class="form-group">
                                <label class="exampleInputEmail1" for="">pajang</label>
                                <div class="checkbox mt-2 mb-2">
                                    <input name="pajang" type="checkbox" id="checkboxOn" class="form-check-input"
                                        value="ON">
                                    <label for="checkboxOn" style="margin-right: 10%">ON</label>
                                    <input name="pajang" type="checkbox" id="checkboxOff" class="form-check-input"
                                        value="OFF">
                                    <label for="checkboxOff">OFF</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Masukan deskripsi</label>
                                <textarea class="form-control" name="desk" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Masukan saldo akhir</label>
                        <input type="number" class="form-control form-control-lg" id="exampleInputEmail1"
                            name="saldoakhir" placeholder="mas ukan saldo akhir" required>
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <button type="button" class="btn btn-default" data-bs-dismiss="modal">
                            <id class="bi bi-backspace"></id>
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary"><i class="bi bi-floppy"></i> Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        function previewImage(input) {
            var preview = document.getElementById('previewImage');
            preview.style.display = 'block';

            var reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
            };

            reader.readAsDataURL(input.files[0]);
        }

        // Menghubungkan fungsi previewImage dengan perubahan pada input file
        document.getElementById('foto').addEventListener('change', function() {
            previewImage(this);
        });



        document.getElementById("checkboxOn").addEventListener("change", function() {
            if (this.checked) {
                document.getElementById("checkboxOff").checked = false;
            }
        });

        document.getElementById("checkboxOff").addEventListener("change", function() {
            if (this.checked) {
                document.getElementById("checkboxOn").checked = false;
            }
        });
    </script>

@endsection
