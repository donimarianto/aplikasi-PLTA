@extends('desain.aset')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .card-header {
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            padding: 0.75rem;
            border-radius: 8px 8px 0 0;
        }

        .card {
            border-radius: 8px;
            border: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <main role="main" class="px-md-4">
        <div class="d-flex justify-content-between flex-wrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2 ">PLTA Desa Suka Maju</h1>
        </div>

        <div class="row mx-auto">
            <div class="col-md-4 mb-3 mx-auto">
                <div class="card bg-warning">
                    <div class="card-header">
                        Jumlah Transaksi
                    </div>
                    <div class="card-body text-center">
                        <a href="{{route('laporan')}}" class="btn"><h1>{{$hitung1}}</h1></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mx-auto">
                <div class="card bg-primary">
                    <div class="card-header">
                        Jumlah Pengguna
                    </div>
                    <div class="card-body text-center">
                        <a href="{{route('pengguna')}}"class="btn"><h1>{{$hitung2}}</h1></a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
@endsection
