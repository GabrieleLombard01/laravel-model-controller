<div class="card mb-4">
    {{-- <img src="{{ $movie['thumb'] }}" class="card-img-top" alt="{{ $movie['name'] }}"> --}}
    <div class="card-body">
        <h4 class="card-title">{{ $movie->title }}</h4>
        <p class="card-text">{{ $movie->nationality }}</p>
        <p class="card-text">{{ $movie->date }}</p>
        <p class="card-text">{{ $movie->vote }}</p>
        <a href="#" class="card-link">More...</a>
    </div>
</div>
