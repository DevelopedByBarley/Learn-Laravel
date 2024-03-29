@props(['listing'])


<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="images/no-image.png" alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/listing/{{ $listing->id }}">{{ $listing->title }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">Acme Corp</div>
            <ul class="flex">
                <x-listing-tag :tagscsv="$listing->tags" />

            </ul>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> Boston,
                MA
            </div>
        </div>
    </div>

</x-card>
