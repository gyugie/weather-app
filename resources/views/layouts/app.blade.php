@extends('layouts.base')

@section('body')
    <div class="min-h-full ">
        <nav class=" mx-auto px-2 md:px-8 lg:px-8" x-data="{mobile_menu: false}" class="bg-white border-b border-gray-200 fixed top-0 left-0 right-0">
            <div class=" mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <div class="flex-shrink-0 flex items-center">
                            <a href="{{ route('home') }}">
                                <img class=" lg:block h-8 w-auto" src=" {{ asset('images/logo-dummy.svg')}}" alt="Workflow">
                            </a>
                        </div>
                        <div class="hidden sm:-my-px sm:ml-6 sm:flex sm:space-x-8">
                            <a href="{{ route('home') }}" class="{{ ($current_route_name == 'home') ? 'border-primary text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium" aria-current="page">
                                Beranda
                            </a>

                            <a href="{{ route('payments.index') }}" class=" {{ ($current_route_name == 'payments.index') ? 'border-primary text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }}border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                                {{ __("Pembayaran") }}
                            </a>

                            <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                                Konsumen
                            </a>

                            <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                                Produk
                            </a>

                            <a href="{{ route('developer.apikey') }}" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                                Developer
                            </a>
                        </div>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:items-center">
                        <!-- This example requires Tailwind CSS v2.0+ -->
                        <div x-data="{menu_create: false }" @click.away="menu_create= false" class="relative inline-block text-left mx-2">
                            <div>
                                <button type="button" class="inline-flex bg-white justify-center w-full rounded-md border border-blue-500 shadow-sm px-4 py-2  text-sm font-medium text-blue-500 hover:bg-blue-500 focus:outline-none focus:ring-2 hover:text-white focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="menu-button" aria-expanded="true" aria-haspopup="true" @click="menu_create = !menu_create" >
                                Create
                                <!-- Heroicon name: solid/chevron-down -->
                                <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                                </button>
                            </div>

                            <!-- Dropdown menu, show/hide based on menu state. -->
                            <div  x-show="menu_create" x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="transform opacity-0 scale-95"
                                    x-transition:enter-end="transform opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75"
                                    x-transition:leave-start="transform opacity-100 scale-100"
                                    x-transition:leave-end="transform opacity-0 scale-95"
                                    x-show="menu_active" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="py-1" role="none">
                                <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                <a href="#" class="text-gray-700 flex px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0"> 
                                    <svg width="20" height="21" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 4.25H3C2.73478 4.25 2.48043 4.35536 2.29289 4.54289C2.10536 4.73043 2 4.98478 2 5.25V19.25C2 19.5152 2.10536 19.7696 2.29289 19.9571C2.48043 20.1446 2.73478 20.25 3 20.25H21C21.2652 20.25 21.5196 20.1446 21.7071 19.9571C21.8946 19.7696 22 19.5152 22 19.25V5.25C22 4.98478 21.8946 4.73043 21.7071 4.54289C21.5196 4.35536 21.2652 4.25 21 4.25ZM20 15.25C19.2044 15.25 18.4413 15.5661 17.8787 16.1287C17.3161 16.6913 17 17.4544 17 18.25H7C7 17.4544 6.68393 16.6913 6.12132 16.1287C5.55871 15.5661 4.79565 15.25 4 15.25V9.25C4.79565 9.25 5.55871 8.93393 6.12132 8.37132C6.68393 7.80871 7 7.04565 7 6.25H17C17 7.04565 17.3161 7.80871 17.8787 8.37132C18.4413 8.93393 19.2044 9.25 20 9.25V15.25Z" fill="#A0A3B1"/>
                                        <path d="M12 8.25C9.794 8.25 8 10.044 8 12.25C8 14.456 9.794 16.25 12 16.25C14.206 16.25 16 14.456 16 12.25C16 10.044 14.206 8.25 12 8.25ZM12 14.25C10.897 14.25 10 13.353 10 12.25C10 11.147 10.897 10.25 12 10.25C13.103 10.25 14 11.147 14 12.25C14 13.353 13.103 14.25 12 14.25Z" fill="#A0A3B1"/>
                                    </svg>
                                    <p> Payment</p>
                                </a>
                                <a href="#" class="flex text-gray-700  px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 22C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V8L14 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18ZM13 4L18 9H13V4ZM7 8H10V10H7V8ZM7 12H17V14H7V12ZM7 16H17V18H7V16Z" fill="#A0A3B1"/>
                                    </svg>
                                    <p> Invoice</p>
                                </a>
                                <a href="#" class="text-gray-700 flex  px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0"> 
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.965 8.521C19.988 8.347 20 8.173 20 8C20 5.621 17.857 3.712 15.479 4.035C14.786 2.802 13.466 2 12 2C10.534 2 9.214 2.802 8.521 4.035C6.138 3.712 4 5.621 4 8C4 8.173 4.012 8.347 4.035 8.521C2.802 9.215 2 10.535 2 12C2 13.465 2.802 14.785 4.035 15.479C4.01193 15.6517 4.00024 15.8258 4 16C4 18.379 6.138 20.283 8.521 19.965C9.214 21.198 10.534 22 12 22C13.466 22 14.786 21.198 15.479 19.965C17.857 20.283 20 18.379 20 16C20 15.827 19.988 15.653 19.965 15.479C21.198 14.785 22 13.465 22 12C22 10.535 21.198 9.215 19.965 8.521ZM10.955 16.416L7.288 12.702L8.712 11.298L10.969 13.584L15.296 9.29L16.704 10.71L10.955 16.416Z" fill="#A0A3B1"/>
                                    </svg>
                                     <p> Paymentlink</p>
                                </a>
                                <a href="#" class="text-gray-700 flex px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">
                                     <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.4649 11.293C9.5979 10.16 11.5739 10.16 12.7069 11.293L13.4139 12L14.8279 10.586L14.1209 9.879C13.1779 8.935 11.9219 8.414 10.5859 8.414C9.2499 8.414 7.9939 8.935 7.0509 9.879L4.9289 12C3.9932 12.9387 3.46777 14.2101 3.46777 15.5355C3.46777 16.8609 3.9932 18.1323 4.9289 19.071C5.39277 19.5355 5.94387 19.9038 6.55052 20.1547C7.15717 20.4056 7.80742 20.5342 8.4639 20.533C9.12056 20.5344 9.77102 20.4059 10.3779 20.155C10.9847 19.9041 11.5359 19.5357 11.9999 19.071L12.7069 18.364L11.2929 16.95L10.5859 17.657C10.0224 18.218 9.25957 18.533 8.4644 18.533C7.66923 18.533 6.90643 18.218 6.3429 17.657C5.7814 17.0937 5.46611 16.3308 5.46611 15.5355C5.46611 14.7402 5.7814 13.9773 6.3429 13.414L8.4649 11.293Z" fill="#A0A3B1"/>
                                        <path d="M12.0001 4.92899L11.2931 5.63599L12.7071 7.04999L13.4141 6.34299C13.9776 5.78198 14.7404 5.46702 15.5356 5.46702C16.3308 5.46702 17.0936 5.78198 17.6571 6.34299C18.2186 6.90626 18.5339 7.66916 18.5339 8.46449C18.5339 9.25983 18.2186 10.0227 17.6571 10.586L15.5351 12.707C14.4021 13.84 12.4261 13.84 11.2931 12.707L10.5861 12L9.17212 13.414L9.87912 14.121C10.8221 15.065 12.0781 15.586 13.4141 15.586C14.7501 15.586 16.0061 15.065 16.9491 14.121L19.0711 12C20.0068 11.0613 20.5322 9.78991 20.5322 8.46449C20.5322 7.13908 20.0068 5.86771 19.0711 4.92899C18.1327 3.9928 16.8612 3.46704 15.5356 3.46704C14.21 3.46704 12.9386 3.9928 12.0001 4.92899Z" fill="#A0A3B1"/>
                                    </svg>
                                     <p> Subcriptions</p>
                                </a>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="w-2 pl-2">
                        <svg width="1" height="24" viewBox="0 0 1 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <rect x="0.25" y="0.25" width="0.5" height="23.5" fill="#A0A3B1" stroke="black" stroke-width="0.5"/>
                    </svg>
                    </div>
                        <button type="button" class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 mx-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <span class="sr-only">View notifications</span>
                            <!-- Heroicon name: outline/bell -->
                           <img src="{{ asset('images/bell.svg') }}" >
                        </button>

                        <!-- Profile dropdown -->
                        <div x-data="{menu_active: false}" @click.away="menu_active = false" class="ml-3 relative">
                            <div>
                                <button @click="menu_active = !menu_active" type="button" class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                </button>
                            </div>
                            <div
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                x-show="menu_active" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                                <!-- Active: "bg-gray-100", Not Active: "" -->

                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">
                                    Pengaturan Akun
                                </a>

                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">
                                    Keluar
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex items-center sm:hidden">
                        <!-- Mobile menu button -->
                        <button @click="mobile_menu = !mobile_menu" type="button" class="bg-white inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <!--
                              Heroicon name: outline/menu

                              Menu open: "hidden", Menu closed: "block"
                            -->
                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <!--
                              Heroicon name: outline/x

                              Menu open: "block", Menu closed: "hidden"
                            -->
                            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div x-show="mobile_menu" class="sm:hidden" id="mobile-menu">
                <div class="pt-2 pb-3 space-y-1">
                    <!-- Current: "bg-indigo-50 border-indigo-500 text-indigo-700", Default: "border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800" -->
                    <a href="{{ route('home') }}" class="bg-indigo-50 border-indigo-500 text-indigo-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium" aria-current="page">
                        Beranda
                    </a>

                    <a href="{{ route('payments.index') }}" class="border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                        {{ __("Pembayaran") }}
                    </a>

                    <a href="#" class="border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                        Konsumen
                    </a>

                    <a href="#" class="border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                        Produk
                    </a>
                </div>
                <div class="pt-4 pb-3 border-t border-gray-200">
                    <div class="flex items-center px-4">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        </div>
                        <div class="ml-3">
                            <div class="text-base font-medium text-gray-800">Tom Cook</div>
                            <div class="text-sm font-medium text-gray-500">tom@example.com</div>
                        </div>
                        <button type="button" class="ml-auto bg-white flex-shrink-0 p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <span class="sr-only">View notifications</span>
                            <!-- Heroicon name: outline/bell -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-3 space-y-1">
                        <a href="#" class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100">
                            Pengaturan Akun
                        </a>

                        <a href="#" class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100">
                            Keluar
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="pt-16 px-8">
            @if(!empty($header))
                <header>
                    <div class=" mx-auto px-4 sm:px-6 lg:px-8">
                        <h1 class="text-3xl font-bold leading-tight text-gray-900">
                            {{ $header }}
                        </h1>
                    </div>
                </header>
            @endif
            <main class="" >
                <div class=" mx-auto px-4 sm:px-6 lg:px-8 ">
                    @yield('content')

                    @isset($slot)
                        {{ $slot }}
                    @endisset
                </div>
            </main>
        </div>
    </div>
    <div class="relative px-2 md:px-8 lg:px-8 bg-white min-h-5xl mx-auto mt-32 ">
        <div class=" px-4 bottom-0 mx-auto pb-6 lg:px-8 text-sm w-full">
            <div class="flex justify-between">
                <div class="w-full lg:w-1/2">
                    <a href="https://moota.co/privasi/" class="text-gray-400 hover:text-gray-500 mx-2">
                    Help
                    </a>
                    <a href="https://moota.co/privasi/" class="text-gray-400 hover:text-gray-500 mx-2">
                    Kebijakan Privasi
                    </a>
                    <a href="https://moota.co/syarat-ketentuan/" class="text-gray-400 hover:text-gray-500 mx-2">
                    Syarat Dan Ketentuan
                    </a>
                </div>
                <div class="w-full lg:w-1/2 text-right">
                    <a class="text-gray-400 hover:text-gray-500 mx-2">
                        &copy; MootaPay 2021
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
