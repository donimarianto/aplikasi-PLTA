@extends('desain.aset')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna PLTA</title>
</head>
<body>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="{{route('pengguna')}}" class="btn btn-warning mb-2"><i class="fas fa-arrow-left"></i></a>
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h2 class="text-center text-white">Daftar Pengguna PLTA</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('tambah_pengguna') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="no_tlp" class="form-label">Nomor Telepon</label>
                                <input type="number" class="form-control" id="no_tlp" name="no_tlp" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" required>
                            </div>
                            <div class="mb-3">
                                <label for="rt" class="form-label">RT</label>
                                <input type="number" class="form-control" id="rt" name="rt" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-save"></i> Simpan</button>
                        </form>
                    </div>
                </div>
                @if(session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            alert('{{ session("success") }}');
                        });
                    </script>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
@endsection
