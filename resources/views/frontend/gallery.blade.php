<div id="gallery" class="bg-green_lsa-50 p-6">
    <div>
        <h1 class="text-center text-green_lsa-300 text-3xl font-semibold">Gallery</h1>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-10">
        @foreach ($gallery as $item)
            <img src="{{ asset($item->gambar) }}" class="h-70 w-full object-cover rounded-lg">
        @endforeach
    </div>
</div>
