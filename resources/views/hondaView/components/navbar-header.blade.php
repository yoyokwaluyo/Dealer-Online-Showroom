<div class="fixed top-0 left-0 z-[1021] w-full">
    <nav class="max-w-[1800px] mx-auto bg-white border-gray-200 dark:bg-gray-900 shadow-md md:shadow-sm font-roboto">
        <div class="container md:w-[90%] mx-auto px-4 flex flex-wrap items-center justify-between h-full md:h-24 py-4">
            <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('assets/honda/img/logo-honda-black.png') }}" class="h-6" alt="Logo" />
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto max-sm:mt-6" id="navbar-default">
                <ul class="font-medium flex flex-row max-sm:flex-col max-sm:divide-y">
                    <li class="mr-2">
                        <a href="{{ route('showroom', ['bodymodel'=>'mpv']) }}" class="nav-links {{ request()->routeIs('showroom') ? 'active' : '' }}" aria-current="page">Showroom</a>
                    </li>
                    <li class="mr-2">
                        <a href="{{ route('usedcar') }}" class="nav-links {{ request()->routeIs('usedcar') ? 'active' : '' }}" aria-current="page">Used Car</a>
                    </li>
                    <li class="mr-2">
                        <a href="{{ route('service') }}" class="nav-links {{ \Str::contains(request()->route()->getName(), ['service','booking']) ? 'active' : '' }}">Service</a>
                    </li>
                    <li class="mr-2">
                        <a href="{{ route('sparepart') }}" class="nav-links {{ request()->routeIs('sparepart') ? 'active' : '' }}">Spare Part</a>
                    </li>
                    <li class="mr-2">
                        <a href="{{ route('bodypaint') }}" class="nav-links {{ request()->routeIs('bodypaint') ? 'active' : '' }}">Body Paint</a>
                    </li>
                    <li class="mr-2">
                        <a href="{{ route('customercare') }}" class="nav-links {{ request()->routeIs('customercare') ? 'active' : '' }}">Customer Care</a>
                    </li>
                    <li class="mr-2">
                        <a href="{{ route('gallery') }}" class="nav-links {{ request()->routeIs('gallery') ? 'active' : '' }}">Gallery</a>
                    </li>
                    <li class="mr-2">
                        <a href="{{ route('pricelist') }}" class="nav-links {{ request()->routeIs('pricelist') ? 'active' : '' }}">Pricelist</a>
                    </li>
                    <li class="mr-2">
                        <a href="#" class="nav-links">360 View</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>