<h1>Listings</h1>

@if (count($listings) === 0)
    <h1>No listings</h1>
@else
    @foreach ($listings as $listing)
        <a href="/listing/{{ $listing['id'] }}">
            <h1>{{ $listing['title'] }}</h1>
            <p>{{ $listing['content'] }}</p>F
        </a>
    @endforeach
@endif
