@extends('layouts.main')

@section('title', 'Home')

@section('main-content')
    <h1 class="fw-bold text-center pt-2">My movies:</h1>

    <section id="movies">
        <div class="row row-cols-4">
            @forelse ($movies as $movie)
                <div class="col">
                    <div class="card mb-3">
                        <img src="{{ $movie['thumb'] }}" class="card-img-top" alt="{{ $movie['name'] }}">
                        <div class="card-body">
                            <h4 class="card-title">{{ $movie['name'] }}</h4>
                            <p class="card-text">{{ $movie['locality'] }}</p>
                            <p class="card-text">{{ $movie['date'] }}</p>
                            <p class="card-text">{{ $movie['vote'] }}</p>
                        </div>
                    </div>
                </div>

            @empty
                <h3 class="fw-bold text-center pt-2">There isn't movies :(</h3>
            @endforelse
        </div>
    </section>

@endsection
