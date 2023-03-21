@extends('layouts.main')
@section('content')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           
        </h2>
  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="flex justify-end mb-4">
                        <p>{{ $animal->name }}</p><br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
       @endsection
