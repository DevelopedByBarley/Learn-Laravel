@include('partials/_hero')
@include('partials/_search')

<x-layout>
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @foreach ($listings as $listing)
            <x-listing-card :listing="$listing" />
        @endforeach
    </div>
</x-layout>