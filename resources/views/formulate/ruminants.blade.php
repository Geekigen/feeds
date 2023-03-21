@extends('layouts.main')
@section('content')
<!-- component -->
<main class="py-10">
    <div class="container mx-auto">
      <form method="get" action="/type" class="rounded-lg bg-white p-10 shadow-lg">
        <div class="mb-4 flex items-center">
          <label for="type" class="block text-gray-700 font-medium mb-2">Select Animal category:</label>
          <select id="type" name="search" class="border border-gray-400 p-2 w-full">
            {{-- foreach animal --}}
@foreach ($animal as $animal )
<option value="{{$animal->name}}">{{$animal->name}}</option>
        @endforeach
    </select>
          <button class="ml-2 rounded-lg bg-blue-500 p-2 text-white hover:bg-blue-600">Next</button>
        </div>
        {{-- <div class="flex">
          <label class="mr-4">
            <input type="checkbox" name="optimize" class="mr-2" />
            Optimize
          </label>
       
        </div> --}}
      </form>
    </div>
  </main>
@endsection