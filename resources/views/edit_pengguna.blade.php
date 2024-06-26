@extends('desain.aset')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
            <a href="{{route('pengguna')}}" class="btn btn-warning mb-2"><i class="fas fa-arrow-left"></i></a>
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h2 class="text-center">Edit Pengguna</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('up_pengguna', $penggunas->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="{{ $penggunas->nama }}">
                            </div>
                            <div class="form-group">
                                <label for="no_tlp">Nomor Telepon:</label>
                                <input type="text" class="form-control" id="no_tlp" name="no_tlp" value="{{ $penggunas->no_tlp }}">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat:</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $penggunas->alamat }}">
                            </div>
                            <div class="form-group">
                                <label for="rt">RT:</label>
                                <input type="text" class="form-control" id="rt" name="rt" value="{{ $penggunas->rt }}">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-save"></i> Perbarui</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
