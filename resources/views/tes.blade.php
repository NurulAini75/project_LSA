<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
 <header id="home" class="bg-cover h-screen" style="background-image:url({{asset('asset/bg.jpg')}})">
    <div class="">
        <div class="absolute inset-0 bg-gradient-to-r from-black to-transparent"></div>
        <nav class="flex justify-between px-6 py-4 bg-black bg-opacity-30 text-white fixed top-0 left-0 right-0">
            <div>
                <a href=""><img src="{{asset('asset/LOGO LSA white.png')}}" class="h-6 w-11"></a>
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
                <a href=""><img src="{{asset('asset/instagram 1.png')}}" class="h-4 w-4"></a>
                <a href=""><img src="{{asset('asset/youtube-2 1.png')}}" class="h-4 w-4"></a>
                <a href=""><img src="{{asset('asset/facebook 1.png')}}" class="h-4 w-4"></a>
            </div>
        </nav>
    </div>
</header>

{{-- about --}}
<div id="about" class="grid-rows-4 md:w-40">
    <div class="grid grid-cols-6">
        <h1 class="col-end-8 text-green_lsa-300 text-4xl my-10 mr-10 fond-Old_standar font-semibold">About</h1>
    </div>
</div>
<div class="grid-rows-4">
    <div class="grid grid-cols-2">
        <div class="grid grid-cols-2">
            <div class="grid grid-rows ml-10 mr-5">
                <img src="{{asset('asset/e.png')}}" class="rounded-md">
                <img src="{{asset('asset/asset.png')}}" class="h-20 w-20 justify-self-end mt-2">
            </div>
            <div class="grid grid-rows ">
                <img src="{{asset('asset/asset.png')}}" class="h-20 w-20 mb-2 ml-2">
                <img src="{{asset('asset/i.png')}}" class="rounded-md w-36 h-36">
                <img src="{{asset('asset/w.png')}}" class="rounded-md mt-3 h-48">
            </div>
        </div>
        <div>
            <p class="cols-span-2 text-3xl font-Poppins text-right mr-10"><span class="font-bold">LEMBAGA SINERGI ANALITIKA </span>adalah lembaga yang berfokus pada research di bidang media (Media Online dan Media Sosial) dan Kegiatan kemasyarakatan. Lembaga ini bertujuan untuk menghadirkan aspirasi masyarakat agar dapat didengar oleh stakeholder. Hasil analitik akan dibuat dalam bentuk Laporan dan dipublikasikan ke berbagai kanal media, serta digunakan untuk merancang program-program yang berdampak positif bagi masyarakat</p>
        </div>
    </div>
</div>
{{--akhir about --}}

{{-- Program --}}
<div id="program" class="bg-gradient-to-r from-white to-green_lsa-100 relative pb-32">
    <div class="ml-10 mt-28 ">
            <h1 class="text-green_lsa-300 text-xl mb-5">Program</h1>
            <img src="{{asset('asset/asset.png')}}" class="h-20 w-20 absolute top-2 right-2">
        <div class="flex">
            <p class="text-4xl mr-5">Jelajahi dan Ikuti Berbagai Program Sosial <br> Kami untuk Meningkatkan Kesadaran dan <br> Memberdayakan Masyarakat</p>
            <img src="{{asset('asset/petik.png')}}" class="h-5 w-5 mt-5">
        </div>
    </div>
    <div class="grid-rows-4 mt-10 mx-10">
        <div class="grid grid-cols-3">
            <div class="shadow-lg">
                <h1 class="text-green_lsa-300 text-2xl font-bold ml-5 my-3">Human Library</h1>
                <h3 class="font-bold ml-5 my-1 ">"Cerita yang Menginspirasi, Langsung dari Sumbernya."</h3>
                <p class="mx-5 mb-8">Human Library adalah program yang mempertemukan individu dengan pengalaman hidup unik untuk berbagi kisah mereka sebagai "buku hidup." Program ini bertujuan untuk mengurangi prasangka, memperluas wawasan, dan membangun empati melalui dialog langsung dengan para pembicara.</p>
                <img src="{{asset('asset/b.png')}}">
            </div>
            <div class="shadow-lg">
                <h1 class="text-green_lsa-300 text-2xl font-bold ml-5 my-3">Human Library</h1>
                <h3 class="font-bold ml-5 my-1">"Cerita yang Menginspirasi, Langsung dari Sumbernya."</h3>
                <p class="mx-5 mb-8">Human Library adalah program yang mempertemukan individu dengan pengalaman hidup unik untuk berbagi kisah mereka sebagai "buku hidup." Program ini bertujuan untuk mengurangi prasangka, memperluas wawasan, dan membangun empati melalui dialog langsung dengan para pembicara.</p>
                <img src="{{asset('asset/a.png')}}">
            </div>
            <div class="shadow-lg">
                <h1 class="text-green_lsa-300 text-2xl font-bold ml-5 my-3">Human Library</h1>
                <h3 class="font-bold ml-5 my-1">"Cerita yang Menginspirasi, Langsung dari Sumbernya."</h3>
                <p class="mx-5 mb-8">Human Library adalah program yang mempertemukan individu dengan pengalaman hidup unik untuk berbagi kisah mereka sebagai "buku hidup." Program ini bertujuan untuk mengurangi prasangka, memperluas wawasan, dan membangun empati melalui dialog langsung dengan para pembicara.</p>
                <img src="{{asset('asset/image a.png')}}">
            </div>
        </div>
    </div>
</div>
{{-- akhihr Program --}}

{{-- gallery --}}
<div id="gallery" class="bg-green_lsa-50">
    <div>
        <h1 class="text-center text-green_lsa-300 text-3xl font-semibold">Gallery</h1>
    </div>
    <div class="flex flex-row mt-10">
        <img src="{{asset('asset/Foto 8.png')}}" class="h-70 w-72 mr-3">
        <img src="{{asset('asset/Foto 1.png')}}" class="h-70 w-72 mr-3">
        <img src="{{asset('asset/Foto 7.png')}}" class="h-70 w-72 mr-3">
        <img src="{{asset('asset/Foto 2.png')}}" class="h-70 w-72 mr-3">
    </div>
    <div class="flex flex-row-reverse mt-3">
        <img src="{{asset('asset/Foto 6.png')}}" class="h-70 w-72 ml-3">
        <img src="{{asset('asset/Foto 4.png')}}" class="h-70 w-72 ml-3">
        <img src="{{asset('asset/Foto 3.png')}}" class="h-70 w-72 ml-3">
        <img src="{{asset('asset/Foto 5.png')}}" class="h-70 w-72 ml-3">
    </div>
</div>
{{--akhir gallery --}}


{{-- our partner --}}
<div id="partner" class="mt-16">
    <div>
        <h1 class="text-center text-green_lsa-300 text-3xl font-semibold font-Old_standar">Our Patners</h1>
    </div>
    <div class="flex justify-around gap-4 my-8">
        <img src="{{asset('asset/LOGO 1.png')}}" class="h-28 w-28 ">
        <img src="{{asset('asset/LOGO 2.png')}}" class="h-28 w-28 ">
        <img src="{{asset('asset/LOGO 3.png')}}" class="h-28 w-28 ">
        <img src="{{asset('asset/logo 4.png')}}" class="h-28 w-28 ">
        <img src="{{asset('asset/LOGO 5.png')}}" class="h-28 w-28 ">
    </div>
    <div class="flex justify-evenly gap-4 my-8">
        <img src="{{asset('asset/LOGO 6.png')}}" class="h-28 w-28 ">
        <img src="{{asset('asset/LOGO 7.png')}}" class="h-28 w-28 ">
        <img src="{{asset('asset/LOGO 8.png')}}" class="h-28 w-28 ">
        <img src="{{asset('asset/logo 9.png')}}" class="h-28 w-28 ">
        <img src="{{asset('asset/LOGO 10.png')}}" class="h-28 w-28 ">
    </div>
</div>
{{--akhir our partner --}}

{{-- news --}}
<div id="news" class="bg-gray_lsa-100">
    <div class="py-16">
        <h3 class="text-center font-Poppins text-xl">BLOG LEMBAGA SINERGI ANALITIKA</h3>
        <h1 class="py-3 text-center text-green_lsa-300 text-4xl font-semibold font-Old_standar">News</h1>
    </div>
    <div class="grid grid-cols-3 mx-14">
        <div class="flex flex-col">
            <div class="shadow-lg mb-5 bg-white w-96">
                <img src="{{asset('asset/Foto 4.png')}}" class="h-44 w-96">
                <div class="mx-8 mt-10">
                    <p class="font-Poppins text-xs text-gray_lsa-200 mb-1">19 Meret 2022</p>
                    <h1 class="font-semibold font-Old_standar text-green_lsa-300 text-xl ">Dampaknya Terhadap <br>Stabilitas Global</h1>
                    <p class="font-Poppins text-sm text-gray_lsa-200 mt-2">Ketegangan di Laut China Selatan semakin meningkat seiring perebutan klaim wilayah dan sumber daya alam di kawasan tersebut. Konflik ini melibatkan berbagai negara besar seperti China, Filipina, Vietnam, dan Amerika Serikat</p>
                </div>
                <div class="flex ml-8 mt-5 mb-8">
                    <img src="{{asset('asset/cek.png')}}" class="w-4 h-4">
                    <p class="text-green_lsa-300 text-sm ml-1">Cek Detail</p>
                </div>
            </div>
            <div class="shadow-lg mb-5 bg-white w-96">
                <div class="mx-8 mt-10">
                    <p class="font-Poppins text-xs text-gray_lsa-200 mb-1">19 Meret 2022</p>
                    <h1 class="font-semibold font-Old_standar text-green_lsa-300 text-xl ">Dampaknya Terhadap <br>Stabilitas Global</h1>
                    <p class="font-Poppins text-sm text-gray_lsa-200 mt-2">Ketegangan di Laut China Selatan semakin meningkat seiring perebutan klaim wilayah dan sumber daya alam di kawasan tersebut. Konflik ini melibatkan berbagai negara besar seperti China, Filipina, Vietnam, dan Amerika Serikat</p>
                </div>
                <div class="flex ml-8 mt-5 mb-8">
                    <img src="{{asset('asset/cek.png')}}" class="w-4 h-4">
                    <p class="text-green_lsa-300 text-sm ml-1">Cek Detail</p>
                </div>
            </div>

        </div>
        <div class="flex flex-col">
            <div class="shadow-lg mb-5 bg-white w-96">
                <div class="mx-8 mt-10">
                    <p class="font-Poppins text-xs text-gray_lsa-200 mb-1">19 Meret 2022</p>
                    <h1 class="font-semibold font-Old_standar text-green_lsa-300 text-xl ">Dampaknya Terhadap <br>Stabilitas Global</h1>
                    <p class="font-Poppins text-sm text-gray_lsa-200 mt-2">Ketegangan di Laut China Selatan semakin meningkat seiring perebutan klaim wilayah dan sumber daya alam di kawasan tersebut. Konflik ini melibatkan berbagai negara besar seperti China, Filipina, Vietnam, dan Amerika Serikat</p>
                </div>
                <div class="flex ml-8 mt-5 mb-8">
                    <img src="{{asset('asset/cek.png')}}" class="w-4 h-4">
                    <p class="text-green_lsa-300 text-sm ml-1">Cek Detail</p>
                </div>
            </div>
            <div class="shadow-lg mb-5 bg-white w-96">
                <img src="{{asset('asset/Foto 4.png')}}" class="h-44 w-96">
                <div class="mx-8 mt-10">
                    <p class="font-Poppins text-xs text-gray_lsa-200 mb-1">19 Meret 2022</p>
                    <h1 class="font-semibold font-Old_standar text-green_lsa-300 text-xl ">Dampaknya Terhadap <br>Stabilitas Global</h1>
                    <p class="font-Poppins text-sm text-gray_lsa-200 mt-2">Ketegangan di Laut China Selatan semakin meningkat seiring perebutan klaim wilayah dan sumber daya alam di kawasan tersebut. Konflik ini melibatkan berbagai negara besar seperti China, Filipina, Vietnam, dan Amerika Serikat</p>
                </div>
                <div class="flex ml-8 mt-5 mb-8">
                    <img src="{{asset('asset/cek.png')}}" class="w-4 h-4">
                    <p class="text-green_lsa-300 text-sm ml-1">Cek Detail</p>
                </div>
            </div>

        </div>
        <div class="flex flex-col">
            <div class="shadow-lg mb-5 bg-white w-96">
                <img src="{{asset('asset/Foto 4.png')}}" class="h-44 w-96">
                <div class="mx-8 mt-10">
                    <p class="font-Poppins text-xs text-gray_lsa-200 mb-1">19 Meret 2022</p>
                    <h1 class="font-semibold font-Old_standar text-green_lsa-300 text-xl ">Dampaknya Terhadap <br>Stabilitas Global</h1>
                    <p class="font-Poppins text-sm text-gray_lsa-200 mt-2">Ketegangan di Laut China Selatan semakin meningkat seiring perebutan klaim wilayah dan sumber daya alam di kawasan tersebut. Konflik ini melibatkan berbagai negara besar seperti China, Filipina, Vietnam, dan Amerika Serikat</p>
                </div>
                <div class="flex ml-8 mt-5 mb-8">
                    <img src="{{asset('asset/cek.png')}}" class="w-4 h-4">
                    <p class="text-green_lsa-300 text-sm ml-1">Cek Detail</p>
                </div>
            </div>
            <div class="shadow-lg mb-5 bg-white w-96">
                <div class="mx-8 mt-10">
                    <p class="font-Poppins text-xs text-gray_lsa-200 mb-1">19 Meret 2022</p>
                    <h1 class="font-semibold font-Old_standar text-green_lsa-300 text-xl ">Dampaknya Terhadap <br>Stabilitas Global</h1>
                    <p class="font-Poppins text-sm text-gray_lsa-200 mt-2">Ketegangan di Laut China Selatan semakin meningkat seiring perebutan klaim wilayah dan sumber daya alam di kawasan tersebut. Konflik ini melibatkan berbagai negara besar seperti China, Filipina, Vietnam, dan Amerika Serikat</p>
                </div>
                <div class="flex ml-8 mt-5 mb-8">
                    <img src="{{asset('asset/cek.png')}}" class="w-4 h-4">
                    <p class="text-green_lsa-300 text-sm ml-1">Cek Detail</p>
                </div>
            </div>
        </div>
    </div>
    <div class="grid justify-items-center py-16">
        <div class="box-border border-2 border-green_lsa-300 w-52 h-8 rounded-3xl grid justify-center content-center">
            <h1 class="text-green_lsa-300 text-base font-Poppins">Tulisan Menarik Lainnya</h1>
        </div>
    </div>
</div>
{{--akhir news --}}


{{-- contact us --}}
<div id="contact">
    <div>
        <h1 class="text-green_lsa-300 text-5xl font-semibold my-12 mx-20">Contact Us</h1>
    </div>
    <div class="grid grid-cols-2 mb-20">
        <div>
            <div class="flex bg-green_lsa-50 box-border border-2 border-green_lsa-300 w-auto rounded-xl mx-16 px-5 py-3">
                <img src="{{asset('asset/lokasi.png')}}" class="w-8 h-8">
                <div class="ml-5">
                    <h1 class="text-green_lsa-300 font-Poppins text-xl">Lembaga Sinergi Analitika Lombok</h1>
                    <p class="text-lg mt-2">Perumahan Griya Rumak Asri Blok D No.9, Kediri,
                        Lombok Barat, 83362</p>
                </div>
            </div>
            <div class="flex bg-green_lsa-50 box-border border-2 border-green_lsa-300 w-auto rounded-xl mx-16 my-5 px-5 py-3">
                <img src="{{asset('asset/lokasi.png')}}" class="w-8 h-8">
                <div class="ml-5">
                    <h1 class="text-green_lsa-300 font-Poppins text-xl">Lembaga Sinergi Analitika Yogyakarta</h1>
                    <p class="text-lg mt-2">Sinergi Analitika Yogyakarta RW.05 RW.02 Rumah No : 156 Jabung, Kalitirto, Berbah, Sleman, DIY. 55573</p>
                </div>
            </div>
            <div class="flex bg-green_lsa-50 box-border border-2 border-green_lsa-300 w-auto rounded-xl mx-16 my-5 px-5 py-3">
                <img src="{{asset('asset/phone.png')}}" class="w-8 h-8">
                <div class="ml-5">
                    <h1 class="text-green_lsa-300 font-Poppins text-xl">Call</h1>
                    <p class="text-lg mt-2">+62 8180 5765 431</p>
                </div>
            </div>
            <div class="flex bg-green_lsa-50 box-border border-2 border-green_lsa-300 w-auto rounded-xl mx-16 my-5 px-5 py-3">
                <img src="{{asset('asset/email.png')}}" class="w-8 h-8">
                <div class="ml-5">
                    <h1 class="text-green_lsa-300 font-Poppins text-xl">Email</h1>
                    <p class="text-lg mt-2">mail@sinergianalitika.com</p>
                </div>
            </div>
        </div>
        <div>
            <div class="aspect-w-16 aspect-h-9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4610.261152343258!2d116.12665867435246!3d-8.642324342048454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbec96e86b613%3A0x5f1ca67615606ec!2sGriya%20Rumak%20Asri!5e0!3m2!1sid!2sid!4v1737104375889!5m2!1sid!2sid" width="650" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
{{--akhir contact us --}}

{{-- fotter --}}
<div>
    <div class="bg-green_lsa-300 grid grid-cols-3 py-16">
        <div class="ml-10">
            <h1 class="text-white font-Poppins text-4xl">Lembaga Sinergi Analitika</h1>
            <div class="flex mt-5">
                <img src="{{asset('asset/ig.png')}}" class="w-5 h-5 mr-3">
                <img src="{{asset('asset/yt.png')}}" class="w-5 h-5 mr-3">
                <img src="{{asset('asset/fb2.png')}}" class="w-5 h-5">
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
    <p class="text-green_lsa-300 text-xl">&copy; Copyright  <span class="font-bold">LSA.</span> All Rights Reserved</p>
</div>
{{-- akhir fotter --}}

</body>
</html>
