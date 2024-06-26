@extends('desain.aset')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pembayaran</title>
</head>
<body>
<div class="card border-primary mx-auto mt-5" style="max-width: 500px;">
    <div class="card-header bg-primary text-white">
        <h2 class="text-center">Halaman Pembayaran</h2>
    </div>
    <div class="card-body">
        <form action="{{route ('input_bayar')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Pelanggan</label>
                <select class="form-select form-control" id="nama" name="nama" required>
                    <option value="">Pilih Pelanggan</option>
                    @foreach($users as $user)
                        <option value="{{ $user->nama }}">{{ $user->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="watt" class="form-label">Watt</label>
                <input type="number" class="form-control" id="watt" name="watt" oninput="hitungNominal()"required>
            </div>
            <div class="mb-3">
                <label for="tgl_bayar" class="form-label">Tanggal Bayar</label>
                <input type="date" class="form-control" id="tgl_bayar" name="tgl_bayar" required>
            </div>
            <div class="mb-3">
                <label for="tgl_jatuh_tempo" class="form-label">Tanggal Jatuh Tempo</label>
                <input type="date" class="form-control" id="tgl_jatuh_tempo" name="tgl_jatuh_tempo" required>
            </div>
            <div class="mb-3">
                <label for="nominal" class="form-label">Nominal</label>
                <input type="number" class="form-control" id="nominal" name="nominal" readonly>
            </div>
            <div class="mb-3">
                <label for="jumlah_bayar" class="form-label">Jumlah Bayar</label>
                <input type="text" class="form-control" id="jumlah_bayar" name="jumlah_bayar"oninput="hitungNominal()" required>
            </div>
            <div class="mb-3">
                <label for="kembalian" class="form-label">Kembalian</label>
                <input type="number" class="form-control" id="kembalian" name="kembalian" readonly>
            </div>
            <button type="submit" class="btn btn-primary ">Submit</button>
        </form>
    </div>
</div>
<script>
    function hitungNominal() {
        var watt = parseFloat(document.getElementById('watt').value);
        var hargaPerWatt = 2100;
        var nominal = watt * hargaPerWatt;
        document.getElementById('nominal').value = nominal;

        var jumlahBayar = parseFloat(document.getElementById('jumlah_bayar').value);
        var kembalian = jumlahBayar - nominal;
        if (kembalian < 0) {
            document.getElementById('kembalian').value = '';
        } else {
            document.getElementById('kembalian').value = kembalian;
        }
    }
</script>
@if(session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                alert('{{ session("success") }}');
            });
        </script>
    @endif
</body>
</html>
@endsection
