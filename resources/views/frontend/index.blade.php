<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <header id="home" class="bg-cover h-screen" style="background-image:url({{ asset('asset/bg.jpg') }})">
        <div class="">
            <div class="absolute inset-0 bg-gradient-to-r from-black to-transparent"></div>
            <nav class="flex justify-between px-6 py-4 bg-black bg-opacity-30 text-white fixed top-0 left-0 right-0">
                <div>
                    <a href=""><img src="{{ asset('asset/LOGO LSA white.png') }}" class="h-6 w-11"></a>
                </div>
                <ul class="flex space-x-4 text-sm">
                    <li class="hover:text-green_lsa-200"> <a href="#home">Home</a></li>
                    <li class="hover:text-green_lsa-200"><a href="#about">About</a></li>
                    <li class="hover:text-green_lsa-200"><a href="#program">Program</a></li>
                    <li class="hover:text-green_lsa-200"><a href="#gallery">Gallery</a></li>
                    <li class="hover:text-green_lsa-200"><a href="#partner">Partner</a></li>
                    <li class="hover:text-green_lsa-200"><a href="#news">News</a></li>
                    <li class="hover:text-green_lsa-200"><a href="#contact">Contact Us</a></li>
                </ul>
                <div class="flex space-x-4 justify-center">
                    <a href=""><img src="{{ asset('asset/instagram 1.png') }}" class="h-4 w-4"></a>
                    <a href=""><img src="{{ asset('asset/youtube-2 1.png') }}" class="h-4 w-4"></a>
                    <a href=""><img src="{{ asset('asset/facebook 1.png') }}" class="h-4 w-4"></a>
                </div>
            </nav>
        </div>
    </header>

    {{-- about --}}
    @include('frontend.about')
    {{-- akhir about --}}

    {{-- Program --}}
    @include('frontend.program')
    {{-- akhihr Program --}}

    {{-- gallery --}}
    @include('frontend.gallery')
    {{-- akhir gallery --}}

    {{-- our partner --}}
    @include('frontend.partner')
    {{-- akhir our partner --}}

    {{-- news --}}
    @include('frontend.news')
    {{-- akhir news --}}

    {{-- contact us --}}
    @include('frontend.contact')
    {{-- akhir contact us --}}

    {{-- fotter --}}
    <div>
        <div class="bg-green_lsa-300 grid grid-cols-3 py-16">
            <div class="ml-10">
                <h1 class="text-white font-Poppins text-4xl">Lembaga Sinergi Analitika</h1>
                <div class="flex mt-5">
                    <img src="{{ asset('asset/ig.png') }}" class="w-5 h-5 mr-3">
                    <img src="{{ asset('asset/yt.png') }}" class="w-5 h-5 mr-3">
                    <img src="{{ asset('asset/fb2.png') }}" class="w-5 h-5">
                </div>
            </div>
            <div class="text-white ml-32">
                <h1 class="text-2xl mt-3">USEFUL LINK</h1>
                <div class="text-xl">
                    <p class="my-3">> Home</p>
                    <p class="my-3">> About</p>
                    <p class="my-3">> Program</p>
                    <p class="my-3">> Gallery</p>
                    <p class="my-3">> Our Partner</p>
                    <p class="my-3">> News</p>
                    <p class="my-3">> Contact Us</p>
                </div>
            </div>
            <div class="text-white">
                <h1 class="text-2xl mt-3">CONTACT US</h1>
                <div class="text-xl">
                    <p class="my-3">Phone : +62 8180 5765 431</p>
                    <p class="my-3">Email 1: sinergi.analitika@gmail.com</p>
                    <p class="my-3">Email 2: mail@sinergianalitika.com</p>
                </div>
            </div>
        </div>
    </div>
    <div class="grid justify-items-center py-5">
        <p class="text-green_lsa-300 text-xl">&copy; Copyright  <span class="font-bold">LSA.</span> All Rights
            Reserved</p>
    </div>
    {{-- akhir fotter --}}

</body>

</html>
