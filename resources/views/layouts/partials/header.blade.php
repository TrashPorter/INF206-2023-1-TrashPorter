<header class="fixed w-full z-50">
    <nav class="bg-white border-gray-200 py-2.5 dark:bg-gray-900">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
            <a href="#" class="flex items-center">
                <img src="{{ url('assets/img/logo_aja.png') }}" class="h-6 mr-3 sm:h-9" alt="TrashPorter Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">TrashPorter</span>
            </a>
            @if (Route::has('login'))
                <div class="flex items-center lg:order-2">
                    @auth
                        <div>

                            <?php
                            $pesanan = \App\Models\ProdukOrder::where('user_id', Auth::user()->id)
                                ->where('status', 0)
                                ->first();
                            $notif = 0;
                            if (empty($pesanan)) {
                                $notif = 0;
                            } else {
                                $notif = \App\Models\ProdukOrderDetail::where('produkorder_id', $pesanan->id)->count();
                            }
                            
                            ?>
                            <a href="{{ route('produk.checkout') }}"
                                class="relative inline-flex items-center p-3 text-sm font-medium text-center text-white bg-sky-500 rounded-lg hover:bg-sky-600 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="sr-only">Notifications</span>
                                @if ($notif <= 0)
                                @else
                                    <div
                                        class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
                                        {{ $notif }}</div>
                                @endif

                            </a>
                        </div>
                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
                                class="flex items-center text-sm font-medium text-gray-900 rounded-full hover:text-blue-600 dark:hover:text-blue-500 md:mr-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white"
                                type="button">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 mr-2 rounded-full" src="{{ url('assets/img/profile.jpg') }}"
                                    alt="user photo">
                                {{ Auth::user()->name }}
                                <svg class="w-4 h-4 mx-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>

                            <!-- Dropdown menu -->
                            <div id="dropdownAvatarName"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                                    <div class="font-medium ">{{ Auth::user()->username }}</div>
                                    <div class="truncate"> {{ Auth::user()->email }}
                                    </div>
                                </div>
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                                    <li>
                                        <a href="{{ route('profile.edit') }}"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                                    </li>
                                    <li>
                                        @role('user')
                                            <a href="{{ route('dashboard') }}"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                        @endrole
                                        @role('driver')
                                            <a href="{{ route('driver.dashboard') }}"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                        @endrole
                                        @role('admin')
                                            <a href="{{ route('admin.index') }}"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                        @endrole
                                        {{-- @role('driver')
                                        <a href="{{ route('dashboard') }}"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                        @endrole --}}
                                    </li>
                                    @can('pesan-tp')
                                        <li>
                                            <a href="/pesan"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pesan
                                                TP</a>
                                        </li>
                                    @endcan

                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                    </li>
                                </ul>
                                <div class="py-2">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="route('logout')"
                                            onclick="event.preventDefault();
        this.closest('form').submit();"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                            out</a>
                                    </form>
                                </div>
                            </div>

                        </div>
                    @else
                        <a href="{{ route('login') }}"
                            class="text-gray-800 dark:text-white hover:bg-gray-100 hover:text-sky-500 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Log
                            in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="text-white bg-gray-800 hover:bg-sky-500 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-gray-800 dark:hover:bg-sky-500 focus:outline-none dark:focus:ring-sky-800">Register</a>
                            {{-- <x-primary-button class="ml-3">
                                    {{ __('Register') }}
                                </x-primary-button> --}}
                        @endif
                        <button data-collapse-toggle="mobile-menu-2" type="button"
                            class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            aria-controls="mobile-menu-2" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    @endauth
                </div>
            @endif
            <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="/"
                            class="block py-2 pl-3 pr-4 text-white bg-sky-500 rounded lg:bg-transparent {{ $title === 'Home' ? 'lg:text-sky-500' : 'lg:text-gray-700' }} lg:p-0 dark:text-white"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/product"
                            class="block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-sky-500 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 {{ $title === 'Product' ? 'lg:text-sky-500' : 'lg:text-gray-700' }}">Product</a>
                    </li>
                    <li>
                        <a href="/catalog"
                            class="block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-sky-500 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 {{ $title === 'Catalog' ? 'lg:text-sky-500' : 'lg:text-gray-700' }}">Catalog</a>
                    </li>
                    <li>
                        <a href="/about"
                            class="block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-sky-500 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 {{ $title === 'About Us' ? 'lg:text-sky-500' : 'lg:text-gray-700' }}">About
                            Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
