@extends('layouts.main')

@section('title', 'Home')

@section('main-content')
    <h1 class="fw-bold text-center pt-2">My movies:</h1>

    <section id="movies">
        <div class="d-flex flex-wrap">
            @forelse ($movies as $movie)
                {{ $movie['name'] }}

            @empty
                <h3 class="fw-bold text-center pt-2">There isn't movies :(</h3>
            @endforelse
        </div>
    </section>

@endsection
