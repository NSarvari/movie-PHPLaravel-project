{{-- <form action="{{ route('search') }}" method="GET">
    <input type="text" name="search" required/>
    <button type="submit">Search</button>
</form>
@if($movies->isNotEmpty())
    @foreach ($movies as $movie)
        <div class="post-list">
            <p>{{ $movie->name }}</p>
        </div>
    @endforeach
@else
    <div>
        <h2>No posts found</h2>
    </div>
@endif --}}

@if($movies->isNotEmpty())
    @foreach ($movies as $movie)
        <div class="post-list">
            <a>{{ $movie->name }}</a>
            <br>
        </div>
    @endforeach
@else
    <div>
        <h2>No posts found</h2>
    </div>
@endif