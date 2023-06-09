@extends('layouts.main')
@section('content')
<!-- component -->
</nav>
<!-- component -->
<div class="relative py-16 bg-gradient-to-br from-sky-50 to-gray-200">  
<div class="relative container m-auto px-6 text-gray-500 md:px-12 xl:px-40">
    <div class="m-auto md:w-8/12 lg:w-6/12 xl:w-6/12">
        <div class="rounded-xl bg-white shadow-xl">
            <div class="p-6 sm:p-16">
                <div class="space-y-4">
                    
                    <h2 class="mb-8 text-2xl text-cyan-900 font-bold">CLICK  <br>
                    TO PROCEED</h2>
                </div>
                <div class="mt-16 grid space-y-4">
                    <button class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 
hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                        <div class="relative flex items-center space-x-4 justify-center">
                            <a href="/ruminant">
                            <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">RUMINANTS</span>
                        </a>
                        </div>
                    </button>
                    <button class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 
hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                        <div class="relative flex items-center space-x-4 justify-center">
                            
                            <a href="/pig">
                            <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">PIGS</span>
                        </a></div>
                    </button>
                    <button class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 
                                 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                        <div class="relative flex items-center space-x-4 justify-center">
                             
                            <a href="/poultry">
                            <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">POULTRY</span>
                        </a></div>
                    </button>
                    <button class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 
                                 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                        <div class="relative flex items-center space-x-4 justify-center">
                             
                            <a href="/fish">
                            <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">FISH</span>
                        </a></div>
                    </button>
                    <button class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 
                                 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                        <div class="relative flex items-center space-x-4 justify-center">
                             
                            <a href="">
                            <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">DONATE</span>
                        </a></div>
                    </button>
                </div>

                <div class="mt-32 space-y-4 text-gray-600 text-center sm:-mb-8">
                    <p class="text-xs">By proceeding, you agree to our <a href="" class="underline">Disclaimer</a> and confirm you have read our <a href="" class="underline">Privacy and Cookie Statement</a>.</p>
                    </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection