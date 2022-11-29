<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Session;

$total = 0;
if (Session::has('user')) {
    $total = HomeController::cartCount();
}

?>

<nav class="bg-white shadow-sm">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">

                <button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>

                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>

                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                    <a href="{{url('/')}}" class="md:pl-20 inline-flex items-center font-bold font-poppins text-black text-2xl">Aa
                        <span class="text-2xl text-red-600 font-bold font-poppins tracking-wide">Bread</span>
                    </a>
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="ml-4 flex space-x-4">
                        <a href="#home" class="py-4 px-2 text-green-500 font-semibold hover:text-green-500 transition duration-300">Home</a>
                        <a href="#menu" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Menu</a>
                        <a href="#service" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Service</a>
                        <a href="#contact" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Contact</a>
                    </div>
                </div>
            </div>

            <div class="absolute inset-y-0 right-0 flex items-center sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                <a href="/orderlist">
                    <button type="button" class="relative items-center p-3 text-sm font-medium text-center text-black  focus:outline-none focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                        </svg>

                    </button>
                </a>
                
                <a href="/cartlist">
                    <button type="button" class="relative items-center p-3 text-sm font-medium text-center text-black  focus:outline-none focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                        <span class="sr-only">Cart</span>
                        <div class="inline-flex absolute -top-0 -right-0 justify-center items-center w-6 h-6 text-xs font-bold text-white bg-red-500 rounded-full border-2 border-white dark:border-gray-900">{{$total}}</div>
                    </button>
                </a>

                <div class="relative ml-1">
                    @if(Session::has('user'))
                    <div class="flex items-center justify-center">
                        <div class=" relative inline-block text-left dropdown">
                            <span class="shadow-sm">
                                <button class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800" type="button" aria-haspopup="true" aria-expanded="true" aria-controls="headlessui-menu-items-117">
                                    <span>{{Session::get('user')->name}}</span>
                                    <svg class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </span>
                            <div class="opacity-0 invisible dropdown-menu transition-all duration-300 transform origin-top-right -translate-y-2 scale-95">
                                <div class="absolute right-0 w-32 mt-2 origin-top-right bg-white border-gray-200 divide-gray-100 shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                                    <div class="">
                                        <div class="py-1">
                                            <a href="/logout" tabindex="3" class="text-gray-700 flex justify-between px-4 py-2 text-sm text-center" role="menuitem">Log Out</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="relative items-center p-3 text-sm font-medium text-center text-black  focus:outline-none focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                        <a href="/loginpage">Login</a>
                    </div>
                    @endif

                    <style>
                        .dropdown:focus-within .dropdown-menu {
                            opacity: 1;
                            transform: translate(0) scale(1);
                            visibility: visible;
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>
    <div class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pt-2 pb-3">
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Home</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Menu</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Service</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contact</a>
        </div>
    </div>
</nav>