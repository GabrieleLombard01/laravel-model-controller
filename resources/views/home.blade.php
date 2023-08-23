@extends('layouts.main')

@section('title', 'Home')

@section('main-content')
    <h1 class="fw-bold text-center pt-2">My last movie:</h1>

    <section id="movies">
        <div class="row row-cols-4">

            @include('includes.movies.card')

        </div>
    </section>

@endsection
