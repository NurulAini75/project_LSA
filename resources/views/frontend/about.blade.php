<div id="about" class="grid-rows-4 md:w-40">
    <div class="grid grid-cols-6">
        <h1 class="col-end-8 text-green_lsa-300 text-4xl my-10 mr-10 fond-Old_standar font-semibold">About</h1>
    </div>
</div>
<div class="grid-rows-4">
    <div class="grid grid-cols-2">
        <div class="grid grid-cols-2">
            <div class="grid grid-rows ml-10 mr-5">
                <img src="{{ asset('asset/e.png') }}" class="rounded-md">
                <img src="{{ asset('asset/asset.png') }}" class="h-20 w-20 justify-self-end mt-2">
            </div>
            <div class="grid grid-rows ">
                <img src="{{ asset('asset/asset.png') }}" class="h-20 w-20 mb-2 ml-2">
                <img src="{{ asset('asset/i.png') }}" class="rounded-md w-36 h-36">
                <img src="{{ asset('asset/w.png') }}" class="rounded-md mt-3 h-48">
            </div>
        </div>
        <div>
            <p class="cols-span-2 text-3xl font-Poppins text-right mr-10">{{ $company->about }}</p>
        </div>
    </div>
</div>
