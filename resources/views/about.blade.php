<x-front-layout>
    <header class="container">
            <p style=
            "font-size: 30px;
            padding-bottom: 20px;
            padding-top: 20px;
            border-top: 1px solid rgb(223, 223, 223);
            font-weight:bold">
                About
            </p>
        </header>
    <section class="bg-darkGrey">
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 lg:p-8">
        <div class="flex items-center" style="text-align: center !important;">
    <x-application-logo class="block w-auto h-12 mr-5" />
    <h1 class="pl-10 mt-2 text-4xl font-bold text-gray-900">
        E-CARENT
    </h1>
</div>

        <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-[29px]">
            <div>
                <p class="mt-6 leading-relaxed text-justify text-gray-500" style="text-align: justify">
                Welcome to my first laravel website.
                E-CARENT atau Electric Car Rent adalah sebuah website yang melayani penyewaan khusus mobil listrik. Website ini aku buat seorang diri pada project Bootcamp di BWA menggunakan bahasa PHP dengan
                framework Laravel fullstack. Mysql + Adminer untuk manajemen database. Tailwind CSS sebagai styling nya. DomPDF untuk export PDF. LaravelExcel untuk export Excel. Yajra Laravel Tables untuk tabel. Laravel Jetstream
                untuk Autentikasi dan Otorisasi. Laragon untuk server lokal. VPS untuk server global. PHP Artisan untuk kelola arsitektur Model View Controller
                (MVC). Integrasi Midtrans sebagai penyedia layanan pembayaran online.
                <br> Pada web front ini, terdapat 4 menu yang bisa pihak user manfaatkan yaitu:
                </p>
            </div>

            <div>
                <img src="/images/me.jpeg" class="w-1/2 mx-auto rounded-full" alt="">
                <p style="text-align: center; margin-top:20px">Haloo Aku Ferdyra <br> FERnanda anDYka putRA</p>
            </div>
        </div>
    </div>

<div class="grid grid-cols-1 gap-6 p-6 bg-gray-200 bg-opacity-25 md:grid-cols-2 lg:gap-8 lg:p-8">
    <div>
        <div class="flex items-center">
            <h2 class="text-xl font-semibold text-gray-900">
                <a href="{{route('front.index')}}">Landing Page</a>
            </h2>
        </div>

        <p class="mt-4 text-sm leading-relaxed text-gray-500" style="text-align: justify">
            Pada halaman ini user dapat melihat popular car yang diambil dari 4 item terbaru dari database.
            Item car ini nantinya akan mengarah ke halaman detail jika user memilih salah satu dari car tersebut.
            Selain itu user juga dapat melihat FAQ terkait penyewaan mobil listrik di E-Carent
        </p>
    </div>

    <div>
        <div class="flex items-center">
            <h2 class="text-xl font-semibold text-gray-900">
                <a href="{{route('front.catalog')}}">
                    Catalog
                </a>
            </h2>
        </div>

        <p class="mt-4 text-sm leading-relaxed text-gray-500" style="text-align: justify">
            Catalog merupakan halaman yang menampilkan seluruh data dari item car dari database.
            Di sini user dapat mencari mobil yang ingin disewa nya dengan fitur pembantu seperti
            search, filter by type, dan filter by brand.
        </p>
    </div>

    <div>
        <div class="flex items-center">
            <h2 class="text-xl font-semibold text-gray-900">
                <a href="{{route('front.history')}}">History</a>
            </h2>
        </div>

        <p class="mt-4 text-sm leading-relaxed text-gray-500" style="text-align: justify">
            History merupakan halaman yang menampilkan riwayat penyewaan mobil listrik dari database.
            Di sini user dapat melihat riwayat penyewaan mobil listrik apa saja yang telah dilakukan oleh user.
            User juga dapat mendownload invoice riwayat penyewaan mobil listrik yang telah dilakukan oleh user ke file PDF.
        </p>
    </div>

    <div>
        <div class="flex items-center">
            <h2 class="text-xl font-semibold text-gray-900">
                <a href="{{route('front.about')}}">
                About
                </a>
            </h2>
        </div>

        <p class="mt-4 text-sm leading-relaxed text-gray-500" style="text-align: justify">
            About merupakan halaman yang menampilkan tentang website dari E-Carent.
            Di sini user dapat melihat informasi terkait pembuat dari website, teknologi yang digunakan, fitur yang tersedia, dan lain sebagainya
        </p>
    </div>
</div>

            </div>
        </div>
    </div>
    </section>
<footer class=" mt-2 bg-[#060523]">
    <div class="w-full max-w-screen-xl p-4 mx-auto md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="{{ route('front.index') }}" class="flex flex-col mb-4 sm:mb-0">
                <span class="mb-2 text-3xl font-semibold whitespace-nowrap dark:text-white">E-Carent</span>
                <span class="text-sm font-normal whitespace-nowrap dark:text-white">Electric Car Rent</span>
            </a>

            <ul class="flex flex-wrap items-center mb-6 text-xl font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="{{route('front.index')}}" class="mr-4 hover:underline md:mr-6 ">Landing</a>
                </li>
                <li>
                    <a href="{{route('front.catalog')}}" class="mr-4 hover:underline md:mr-6">Catalog</a>
                </li>
                <li>
                    <a href="{{route('front.history')}}" class="mr-4 hover:underline md:mr-6 ">History</a>
                </li>
                <li>
                    <a href="{{route('front.about')}}" class="hover:underline">About</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">All Rights Reserved. @ Copyright Ferdyra 2023.</span>
    </div>
</footer>

</x-front-layout>
