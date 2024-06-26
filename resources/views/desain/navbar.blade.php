<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="{{route('dashboard')}}">PLTA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="{{route('pengguna')}}">Pengguna</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="{{route('bayar')}}">Pembayaran</a>
          <li class="nav-item">
            <a class="nav-link active text-white" href="{{route('laporan')}}">laporan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="{{route('logout')}}">Keluar</a>
          </li>
          </li>
        </ul>
      </div>
    </div>
  </nav>