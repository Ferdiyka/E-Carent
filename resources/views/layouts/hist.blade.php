<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Libraries -->
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
  <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
  <link rel="stylesheet"
        href="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.10/css/dataTables.checkboxes.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.1/css/select.dataTables.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script defer src="https://unpkg.com/alpinejs@3.7.0/dist/cdn.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"
          integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
  <script src="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.10/js/dataTables.checkboxes.min.js"></script>
  <script src="https://cdn.datatables.net/select/1.2.1/js/dataTables.select.min.js"></script>
  <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
  <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

 <!-- Scripts -->
  @vite(['resources/css/front.css'])

  <!-- Styles -->
  <style>
    /*Form fields*/
    .dataTables_wrapper select,
    .dataTables_wrapper .dataTables_filter input {
      color: #4a5568;
      /*text-gray-700*/
      padding-left: 1rem;
      /*pl-4*/
      padding-right: 1rem;
      /*pl-4*/
      padding-top: .5rem;
      /*pl-2*/
      padding-bottom: .5rem;
      /*pl-2*/
      line-height: 1.25;
      /*leading-tight*/
      border-width: 2px;
      /*border-2*/
      border-radius: .25rem;
      border-color: #edf2f7;
      /*border-gray-200*/
      background-color: #edf2f7;
      /*bg-gray-200*/
    }

    .dataTables_wrapper select {
      padding-right: 1.5rem;
    }

    /*Row Hover*/
    table.dataTable.hover tbody tr:hover,
    table.dataTable.display tbody tr:hover {
      background-color: #ebf4ff;
      /*bg-indigo-100*/
    }

    /*Pagination Buttons*/
    .dataTables_wrapper .dataTables_paginate .paginate_button {
      font-weight: 700;
      /*font-bold*/
      border-radius: .25rem;
      /*rounded*/
      border: 1px solid transparent;
      /*border border-transparent*/
    }

    /*Pagination Buttons - Current selected */
    .dataTables_wrapper .dataTables_paginate .paginate_button.current {
      color: #fff !important;
      /*text-white*/
      box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
      /*shadow*/
      font-weight: 700;
      /*font-bold*/
      border-radius: .25rem;
      /*rounded*/
      background: blueviolet !important;
      /*bg-indigo-500*/
      border: 1px solid transparent;
      /*border border-transparent*/
    }

    /*Pagination Buttons - Hover */
    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
      color: #fff !important;
      /*text-white*/
      box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
      /*shadow*/
      font-weight: 700;
      /*font-bold*/
      border-radius: .25rem;
      /*rounded*/
      background: blueviolet !important;
      /*bg-indigo-500*/
      border: 1px solid transparent;
      /*border border-transparent*/
    }

    /*Add padding to bottom border */
    table.dataTable.no-footer {
      border-bottom: 1px solid #e2e8f0;
      /*border-b-1 border-gray-300*/
      margin-top: 0.75em;
      margin-bottom: 0.75em;
    }

    /*Change colour of responsive icon*/
    table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
    table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
      background-color: #008652 !important;
      /*bg-indigo-500*/
    }

    table.dataTable tr th.select-checkbox.selected::after {
      content: "✔";
      margin-top: -11px;
      margin-left: -4px;
      text-align: center;
      text-shadow: rgb(176, 190, 217) 1px 1px, rgb(176, 190, 217) -1px -1px, rgb(176, 190, 217) 1px -1px, rgb(176, 190, 217) -1px 1px;
    }
  </style>
  @livewireStyles
</head>


    <!-- Page Content -->
    <main>
        <nav class="container relative my-4 lg:my-10">
      <div class="flex flex-col justify-between w-full lg:flex-row lg:items-center">
        <!-- Logo & Toggler Button here -->
        <div class="flex items-center justify-between">
          <!-- LOGO -->
          <a href="{{ route('front.index') }}">
              {{-- <img src="/svgs/logo.svg" alt="stream" /> --}}
            <img src="{{ asset('images/Logo.png') }}" alt="{{ config('app.name') }}" style="width: 190px; height:100px">
          </a>
          <!-- RESPONSIVE NAVBAR BUTTON TOGGLER -->
          <div class="block lg:hidden">
            <button class="p-1 outline-none mobileMenuButton" id="navbarToggler" data-target="#navigation">
              <svg class="text-dark w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                   xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path>
              </svg>
            </button>
          </div>
        </div>

        <!-- Nav Menu -->
        <div class="hidden w-full lg:block" id="navigation">
          <div class="flex flex-col items-baseline gap-4 mt-6 lg:justify-between lg:flex-row lg:items-center lg:mt-0">
            <div class= "flex flex-col w-full ml-auto lg:w-auto gap-4 lg:gap-[50px] lg:items-center lg:flex-row">
              <a href="{{route('front.index')}}" class="nav-link-item" style="font-size:22px">Landing</a>
              <a href="{{route('front.catalog')}}" class="nav-link-item" style="font-size:22px">Catalog</a>
              <a href="{{route('front.history')}}" class="nav-link-item" style="font-size:22px">History</a>
              <a href="{{route('front.about')}}" class="nav-link-item" style="font-size:22px">About</a>
            </div>
            @auth
              <div class="flex flex-col w-full ml-auto lg:w-auto lg:gap-12 lg:items-center lg:flex-row">
                {{-- Logout --}}
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <a href="{{ route('logout') }}" class="btn-secondary"
                     onclick="event.preventDefault();
                  this.closest('form').submit();">
                    Log Out
                  </a>
                </form>
              </div>
            @else
              <div class="flex flex-col w-full ml-auto lg:w-auto lg:gap-12 lg:items-center lg:flex-row">
                <a href="{{ route('login') }}" class="btn-secondary">
                  Log In
                </a>
              </div>
            @endauth
          </div>
        </div>
      </div>
    </nav>
      {{ $slot }}
    </main>

      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      once: true,
      duration: 300,
      easing: 'ease-out'
    });
  </script>

  <script src="{{ url('js/script.js') }}"></script>

  @stack('modals')

  @livewireScripts

  {{ $script ?? '' }}
  {{ $modal ?? '' }}
</body>

</html>
