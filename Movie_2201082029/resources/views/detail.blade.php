@extends('layout.template')

@section('title', $movie['judul'])

@section('content')
@if ($movie)
<div class="col-lg-12">
    <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-3">
            <img src="/images/{{ $movie['foto_sampul'] }}" class="img-fluid rounded-start">
          </div>
          <div class="col-md-9">
            <div class="card-body">
              <h1 class="card-title">{{ $movie['judul'] }}</h1>
              <p class="card-text">{{ $movie['sinopsis'] }}</p>
              <p class="card-text">Tahun : {{ $movie['tahun'] }}</p>
              <p class="card-text">Pemain : {{ implode(', ',$movie['pemain']) }}</p>
              <a href="/" class="btn btn-success">Kembali</a>
            </div>
          </div>
        </div>
      </div>
</div>
@else
<div class="alert alert-danger" role="alert">
    Data film tidak ditemukan!
</div>
<a href="/" class="btn btn-success">Kembali</a>
@endif
@endsection
