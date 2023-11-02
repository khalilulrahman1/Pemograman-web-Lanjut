@extends('layout.template')

@section('title', 'Homepage')

@section('content')
<h1>Trending  Movies</h1>
    <div class="row">
        @foreach ($movies as $movie)
        <div class="col-lg-6">
            <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="/images/{{ $movie['foto_sampul'] }}" class="img-fluid rounded-start">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">{{ $movie['judul'] }}</h5>
                      <p class="card-text">{{ $movie['sinopsis'] }}</p>
                      <a href="/movie/{{ $movie['id'] }}" class="btn btn-success">Lihat Selengkapnya</a>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        @endforeach
    </div>
@endsection
