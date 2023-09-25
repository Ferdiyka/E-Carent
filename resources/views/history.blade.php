<x-history-layout>
    <header class="container">
            <p style=
            "font-size: 30px;
            padding-bottom: 20px;
            padding-top: 20px;
            border-top: 1px solid rgb(223, 223, 223);
            font-weight:bold">
                History
            </p>
        </header>
    <section class="bg-darkGrey">
  <x-slot name="title">Admin</x-slot>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      {{ __('Booking') }}
    </h2>
  </x-slot>

  <x-slot name="script">
    <script>
      // AJAX DataTable
      var datatable = $('#dataTable').DataTable({
        processing: true,
        serverSide: true,
        stateSave: true,
        ajax: {
          url: '{!! url()->current() !!}',
        },
        columns: [{
            data: 'id',
            name: 'id',
          },
          {
            data: 'name',
            name: 'name',
          },
          {
            data: 'item.name',
            name: 'item.name',
          },
          {
            data: 'start_date',
            name: 'start_date',
            render: function(data) {
                // Mengubah format tanggal
                var formattedDate = new Date(data).toLocaleString('id-ID', {
                    day: '2-digit',
                    month: '2-digit',
                    year: '2-digit',
                });
                return formattedDate;
            }
        },
        {
            data: 'end_date',
            name: 'end_date',
            render: function(data) {
                // Mengubah format tanggal
                var formattedDate = new Date(data).toLocaleString('id-ID', {
                    day: '2-digit',
                    month: '2-digit',
                    year: '2-digit',
                });
                return formattedDate;
            }
        },
        {
            data: 'durasi_sewa',
            name: 'durasi_sewa'
          },
          {
            data: 'status',
            name: 'status',
          },
          {
            data: 'payment_status',
            name: 'payment_status',
          },
          {
            data: 'total_price',
            name: 'total_price',
            render: function (data) {
            // Menambahkan simbol "Rp" dan koma sebagai pemisah ribuan
            return 'Rp ' + data.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            },
          },
          {
            data: 'action',
            name: 'action',
            orderable: false,
            searchable: false,
            width: '15%'
          },
        ],
      });
    </script>
  </x-slot>

  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="overflow-hidden shadow sm:rounded-md">
        <div class="px-4 py-5 bg-white sm:p-6">
          <table id="dataTable">
            <thead>
              <tr>
                <th style="max-width: 1%">ID</th>
                <th>Nama</th>
                {{-- <th>Brand</th> --}}
                <th>Mobil</th>
                <th>Mulai</th>
                <th>Selesai</th>
                <th>Durasi Sewa</th>
                <th>Status Booking</th>
                <th>Status Pembayaran</th>
                <th>Total Dibayar</th>
                <th style="max-width: 10%">Aksi</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
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
</x-history-layout>
