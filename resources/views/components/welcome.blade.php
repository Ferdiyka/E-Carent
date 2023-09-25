<div class="p-6 bg-white border-b border-gray-200 lg:p-8">
    <div class="flex items-center">
        <x-application-logo class="block w-auto h-12 mr-5" />
        <h1 class="pl-10 mt-2 text-4xl font-bold text-gray-900 left-5">
            E-CARENT
        </h1>
    </div>

    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Welcome back
    </h1>

    <p class="mt-6 leading-relaxed text-justify text-gray-500" style="text-align: justify">
        E-CARENT atau Electric Car Rent adalah sebuah website yang melayani penyewaan khusus mobil listrik. Website ini aku buat seorang diri pada project Bootcamp di BWA menggunakan bahasa PHP dengan
        framework Laravel fullstack. Mysql + Adminer untuk manajemen database. Tailwind CSS sebagai styling nya. DomPDF untuk export PDF. LaravelExcel untuk export Excel. Yajra Laravel Tables untuk tabel. Laravel Jetstream
        untuk Autentikasi dan Otorisasi. Laragon untuk server lokal. VPS untuk server global. PHP Artisan untuk kelola arsitektur Model View Controller
        (MVC). Integrasi Midtrans sebagai penyedia layanan pembayaran online.
        <br> Pada web front ini, terdapat 4 menu yang bisa pihak user manfaatkan yaitu:
    </p>
</div>

<div class="grid grid-cols-1 gap-6 p-6 bg-gray-200 bg-opacity-25 md:grid-cols-2 lg:gap-8 lg:p-8">
    <div>
        <div class="flex items-center">
            <h2 class="text-xl font-semibold text-gray-900">
                <a href="{{ route('admin.brands.index') }}" :active="request()->routeIs('admin.brands.index')">Brand</a>
            </h2>
        </div>

        <p class="mt-4 text-sm leading-relaxed text-gray-500" style="text-align: justify">
            Brand adalah sebuah merek pada mobil yang biasanya berguna sebagai identitas untuk memasarkan produk mobil.
            Contoh brand pada mobil listrik yang saat ini terkenal adalah Wuling, Hyundai, Tesla, dan masih banyak lagi
        </p>
    </div>

    <div>
        <div class="flex items-center">
            <h2 class="text-xl font-semibold text-gray-900">
                <a href="{{ route('admin.types.index') }}" :active="request()->routeIs('admin.types.index')">
                    Type
                </a>
            </h2>
        </div>

        <p class="mt-4 text-sm leading-relaxed text-gray-500" style="text-align: justify">
            Types merupakan sebuah tipe mobil yang dimana biasanya dikelompok berdasarkan besaran kecepatan mobil,
            volume mobil, jarak tempuh mobil, dan lain sebagainya. Contohnya seperti tipe mobil Long Range (Bagus untuk jarak jauh)
        </p>
    </div>

    <div>
        <div class="flex items-center">
            <h2 class="text-xl font-semibold text-gray-900">
                <a href="{{ route('admin.items.index') }}" :active="request()->routeIs('admin.items.index')">Item</a>
            </h2>
        </div>

        <p class="mt-4 text-sm leading-relaxed text-gray-500" style="text-align: justify">
            Item adalah gabungan data dari Type dan Brand serta terdapat tambahan data seperti nama, gambar, fitur, harga, rating, review mobil.
            Disini admin bisa CRUD data tersebut sesuai kebutuhan
        </p>
    </div>

    <div>
        <div class="flex items-center">
            <h2 class="text-xl font-semibold text-gray-900">
                <a href="{{ route('admin.bookings.index') }}" :active="request()->routeIs('admin.bookings.index')">
                Booking
                </a>
            </h2>
        </div>

        <p class="mt-4 text-sm leading-relaxed text-gray-500" style="text-align: justify">
            Booking adalah gabungan data dari User dan Item serta terdapat tambahan data seperti nama, alamat, kota, kode pos, status booking (pending, confirmed, done),
            dan status pembayaran (pending, success, failed, expired). Admin hanya bisa RUD data tersebut karena untuk create dibuat oleh user di web front
        </p>
    </div>
</div>
