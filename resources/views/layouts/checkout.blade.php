@extends('layouts.single')

@section('body')
    <main class="w-80 min-h-full bg-white md:w-96 mx-auto">
        <div class="w-80 md:w-96 lg:w-96 bg-white drop-shadow-md mx-auto px-auto h-16 border-b-2 border-gray-200  p-4 flex">
            <div class="flex items-center">
                <img  class="h-10 align-center " src="{{ asset('images/logo.svg')}}">
                <h1 class="ml-1 text-blue-700"> Mootapay </h1>
            </div>
        </div>
        <div class="">
            @yield('content')

            @isset($slot)
                {{ $slot }}
            @endisset
        </div>
        <div class="bg-white pb-4 flex flex-col text-sm w-full ">
            <div class="flex w-full justify-center text-xs my-2">
                <p class="text-gray-400 hover:text-gray-500 mx-2 text-xs ">
                    &copy; MootaPay 2021
                </p>
            </div>
            <div class="flex w-full justify-center text-xs">
                <a href="https://moota.co/privasi/" class="text-gray-400 hover:text-gray-500 mx-2 text-xs flex">
                    Kebijakan Privasi
                </a>
                <a href="https://moota.co/syarat-ketentuan/" class="text-gray-400 hover:text-gray-500 mx-2 text-xs ">
                    Syarat Dan Ketentuan
                </a>
            </div>
        </div>
    </main>
@endsection
