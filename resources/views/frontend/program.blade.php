<div id="program" class="bg-gradient-to-r from-white to-green_lsa-100 relative pb-32">
    <div class="ml-10 mt-28 ">
        <h1 class="text-green_lsa-300 text-xl mb-5">Program</h1>
        <img src="{{ asset('asset/asset.png') }}" class="h-20 w-20 absolute top-2 right-2">
        <div class="flex">
            <p class="text-4xl mr-5">Jelajahi dan Ikuti Berbagai Program Sosial <br> Kami untuk Meningkatkan
                Kesadaran dan <br> Memberdayakan Masyarakat</p>
            <img src="{{ asset('asset/petik.png') }}" class="h-5 w-5 mt-5">
        </div>
    </div>
    <div class="grid-rows-4 mt-10 mx-10">
        <div class="grid grid-cols-3">
            @foreach ($program as $item)
                <div class="shadow-lg">
                    <h1 class="text-green_lsa-300 text-2xl font-bold ml-5 my-3">Human Library</h1>
                    <h3 class="font-bold ml-5 my-1 ">"Cerita yang Menginspirasi, Langsung dari Sumbernya."</h3>
                    <p class="mx-5 mb-8">Human Library adalah program yang mempertemukan individu dengan pengalaman
                        hidup unik untuk berbagi kisah mereka sebagai "buku hidup." Program ini bertujuan untuk
                        mengurangi prasangka, memperluas wawasan, dan membangun empati melalui dialog langsung dengan
                        para pembicara.</p>
                    <img src="{{ asset('asset/b.png') }}">
                </div>
            @endforeach
        </div>
    </div>
</div>
