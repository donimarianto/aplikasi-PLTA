@extends('desain.aset')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna PLTA</title>
    <style>
        .table-custom {
            background: #FFDA78;
            border-radius: 10px;
            margin-bottom: 20px;
            padding: 0;
            width: 100%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }
        .table-header-custom {
            background: #2A629A;
            border-radius: 10px 10px 0 0;
            padding: 10px;
            text-align: center;
        }
        .table-body-custom td {
            border-bottom: 1px solid #dddddd;
            padding: 15px;
        }
        .table-body-custom td:first-child {
            border-radius: 10px 0 0 0;
        }
        .table-body-custom td:last-child {
            border-radius: 0 10px 0 0;
        }
    </style>
</head>
<body>
@if(session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                alert('{{ session("success") }}');
            });
        </script>
    @endif
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/pencarian" method="GET">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="query" placeholder="Cari..." aria-label="Cari..." aria-describedby="button-addon2">
                <div class="input-group-append">
                <button class="btn btn-primary mx-2" type="button" id="button-addon2"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
            </form>
        </div>
    </div>
</div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive table-custom">
                    <table class="table">
                        <thead class="table-header-custom">
                            <tr>
                                <th scope="col" class="text-white">No_transaksi</th>
                                <th scope="col" class="text-white">Nama</th>
                                <th scope="col" class="text-white">Tgl_Bayar</th>
                                <th scope="col" class="text-white">Nominal</th>
                                <th scope="col" class="text-white">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-body-custom">
                            @php
                                $grouped = $pembayaran->groupBy('id');
                            @endphp
                            @foreach($grouped as $id => $users)
                                @foreach($users as $pembayaran)
                                    <tr>
                                        <td class="text-center">{{ sprintf('%02d', $pembayaran->id) }}</td>
                                        <td class="text-center">{{ $pembayaran->nama }}</td>
                                        <td class="text-center">{{ $pembayaran->tgl_bayar }}</td>
                                        <td class="text-center">Rp. {{ $pembayaran->nominal }}</td>
                                        <td>
                                            <a  onclick="return confirm('Apakah Anda yakin ingin menghapus laporan ini?');" href="{{route('delete_laporan',$pembayaran->id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
@endsection
