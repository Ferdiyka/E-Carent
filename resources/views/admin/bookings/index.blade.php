<x-app-layout>
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
            data: 'user.name',
            name: 'user.name',
          },
        //   {
        //     data: 'item.brand.name',
        //     name: 'item.brand.name',
        //   },
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
        <div class="mb-10">
            <a href="{{ route('admin.export') }}" class="px-4 py-2 font-bold text-white bg-blue-500 rounded shadow-lg hover:bg-blue-700">
                Download Semua ke Excel
            </a>
      </div>
      <div class="overflow-hidden shadow sm:rounded-md">
        <div class="px-4 py-5 bg-white sm:p-6">
          <table id="dataTable">
            <thead>
              <tr>
                <th style="max-width: 1%">ID</th>
                <th>User</th>
                {{-- <th>Brand</th> --}}
                <th>Item</th>
                <th>Mulai</th>
                <th>Selesai</th>
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
</x-app-layout>
