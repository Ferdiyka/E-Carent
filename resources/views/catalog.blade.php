<x-front-layout>
    <header class="container">
            <p style=
            "font-size: 30px;
            padding-bottom: 20px;
            padding-top: 20px;
            border-top: 1px solid rgb(223, 223, 223);
            font-weight:bold">
                Catalog
            </p>
        </header>
    <section class="bg-darkGrey">
            <div class="container py-[70px]">
                <header class="mb-[30px]">
                    <div class="grid md:grid-cols-3 lg:grid-cols-3 gap-[29px]">
                            <select class="inline-flex items-center px-3 py-3 text-sm font-semibold text-left text-black rounded-lg cursor-pointer focus:ring-4 focus:outline-none focus:ring-blue-300" id="carTypeFilter"
                            >
                                <option value="">All Types</option>
                                @foreach ($types as $type)
                                    <option value="{{ $type->name }}">{{ $type->name }}</option>
                                @endforeach
                            </select>

                            <select class="inline-flex items-center px-3 py-3 text-sm font-semibold text-left text-black rounded-lg cursor-pointer brand-name focus:ring-4 focus:outline-none focus:ring-blue-300" id="carBrandFilter"
                            >
                                <option value="">All Brands</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->name }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>

                            <input
                                class="inline-flex items-center px-10 py-3 text-sm font-semibold text-center text-black rounded-lg focus:ring-4 focus:outline-none focus:ring-blue-300"
                                type="text" id="carSearch" placeholder="Search by car name ..."
                            >
                    </div>


                </header>

                <!-- Cars -->
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-[29px]">
                    @foreach ($items as $item)
                    <!-- Card -->
                    <div class="card-popular">
                        <div>
                            <h5 class="text-lg text-dark font-bold mb-[2px]">
                                {{$item->name}}
                            </h5>
                            <p class="text-sm font-normal text-secondary">{{$item->type ? $item->type->name : '-'}}</p>
                            <p class="text-sm font-normal brand-name text-secondary">{{$item->brand ? $item->brand->name : '-'}}</p>
                            <a href="{{route('front.detail', $item->slug)}}" class="absolute inset-0"></a>
                        </div>
                        <img src="{{$item->thumbnail}}" class="rounded-[18px] min-w-[216px] w-full h-[150px]"
                            alt="">
                        <div class="flex items-center justify-between gap-1">
                            <!-- Price -->
                            <p class="text-sm font-normal text-secondary">
                                <span class="text-base font-bold text-primary">Rp {{ number_format($item->price) }}</span>/day
                            </p>
                            <!-- Rating -->
                            <p class="text-dark text-xs font-semibold flex items-center gap-[2px]">
                                {{$item->star}}/5
                                <img src="/svgs/ic-star.svg" alt="">
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>


<footer class=" bg-[#060523]">
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


<script>
    const carSearchInput = document.getElementById('carSearch');
    const carTypeFilter = document.getElementById('carTypeFilter');
    const carBrandFilter = document.getElementById('carBrandFilter');
    const cars = document.querySelectorAll('.card-popular');

    carSearchInput.addEventListener('input', filterCars);
    carTypeFilter.addEventListener('change', filterCars);
    carBrandFilter.addEventListener('change', filterCars);

    function filterCars() {
        const searchValue = carSearchInput.value.toLowerCase();
        const selectedType = carTypeFilter.value.toLowerCase();
        const selectedBrand = carBrandFilter.value.toLowerCase();

        cars.forEach((car) => {
            const carName = car.querySelector('.text-lg').textContent.toLowerCase();
            const carType = car.querySelector('.text-sm').textContent.toLowerCase();
            const carBrand = car.querySelector('.brand-name').textContent.toLowerCase();

            const nameMatch = carName.includes(searchValue);
            const typeMatch = selectedType === '' || carType.includes(selectedType);
            const brandMatch = selectedBrand === '' || carBrand.includes(selectedBrand);

            if (nameMatch && typeMatch && brandMatch) {
                car.style.display = 'block';
            } else {
                car.style.display = 'none';
            }
        });
    }
</script>


</x-front-layout>
