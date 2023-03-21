@extends('layouts.main')
@section('content')
<div class="flex justify-center">
  <form method="post" action="/req/{{ $feed->id }}" class="bg-white p-6 rounded-lg w-1/3" @submit.prevent="submitForm">
    @csrf
    @method('PUT')
    <div class="mb-4">
        @if ($errors->any())
    <div class="bg-red-500 text-white p-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

      </div>
      <div class="mb-4">
        <div class="border border-gray-400 p-2 w-full">
          <label for="type" class="block text-gray-700 font-medium mb-2">Animal:</label>
          <select id="type"   value="{{ $feed->animal }}" name="animal" class="border border-gray-400 p-2 w-full">
            {{-- foreach animal --}}
@foreach ($animal as $animal )
<option value="{{$animal->name}}">{{$animal->name}}</option>
        @endforeach
    </select>
        </div>
      </div>
      
      <div class="mb-4">
        <div class="border border-gray-400 p-2 w-full">
          <label for="name" class="block text-gray-700 font-medium mb-2">Category:</label>
          <input type="text" id="name" value="{{ $feed->category }}" name="category" class="border border-gray-400 p-2 w-full">
        </div>
      </div>
      
      <div class="mb-4">
        <div class="border border-gray-400 p-2 w-full">
          <label for="me" class="block text-gray-700 font-medium mb-2">ME maximum:</label>
          <input type="text" id="me" name="memax" value="{{ $feed->me_max }}"class="border border-gray-400 p-2 w-full">
        </div>
      </div>
      <div class="mb-4">
        <div class="border border-gray-400 p-2 w-full">
          <label for="me1" class="block text-gray-700 font-medium mb-2">ME minimum:</label>
          <input type="text" id="me1" name="memin" value="{{ $feed->me_min }}"class="border border-gray-400 p-2 w-full">
        </div>
      </div>
      
      <div class="mb-4">
        <div class="border border-gray-400 p-2 w-full">
          <label for="de" class="block text-gray-700 font-medium mb-2">DE:</label>
          <input type="text" id="de" name="de" value="{{ $feed->de }}" class="border border-gray-400 p-2 w-full">
        </div>
      </div>
      
      <div class="mb-4">
        <div class="border border-gray-400 p-2 w-full">
          <label for="cp" class="block text-gray-700 font-medium mb-2">CP maximum:</label>
          <input type="text" id="cp" name="cpmax" value="{{ $feed->cp_max }}" class="border border-gray-400 p-2 w-full">
        </div>
      </div>
      <div class="mb-4">
        <div class="border border-gray-400 p-2 w-full">
          <label for="cp1" class="block text-gray-700 font-medium mb-2">CP minimum:</label>
          <input type="text" id="cp1" name="cpmin" value="{{ $feed->cp_min }}" class="border border-gray-400 p-2 w-full">
        </div>
      </div>
      
      <div class="mb-4">
        <div class="border border-gray-400 p-2 w-full">
          <label for="dcp" class="block text-gray-700 font-medium mb-2">DCP:</label>
          <input type="text" id="dcp" name="dcp" value="{{ $feed->dcp }}" class="border border-gray-400 p-2 w-full">
        </div>
      </div>
      
      <div class="mb-4">
        <div class="border border-gray-400 p-2 w-full">
          <label for="lys" class="block text-gray-700 font-medium mb-2">Lys:</label>
          <input type="text" id="lys" name="lys" value="{{ $feed->lys }}" class="border border-gray-400 p-2 w-full">
        </div>
      </div>
      
      <div class="mb-4">
        <div class="border border-gray-400 p-2 w-full">
          <label for="m+c" class="block text-gray-700 font-medium mb-2">M+C:</label>
          <input type="text" id="m+c" name="m+c" value="{{ $feed->m }}" class="border border-gray-400 p-2 w-full">
        </div>
        <div class="mb-4">
            <div class="border border-gray-400 p-2 w-full">
              <label for="meth" class="block text-gray-700 font-medium mb-2">Meth:</label>
              <input type="text" id="meth" name="meth" value="{{ $feed->meth}}"class="border border-gray-400 p-2 w-full">
            </div>
          </div>
          <div class="mb-4">
            <div class="border border-gray-400 p-2 w-full">
              <label for="fat" class="block text-gray-700 font-medium mb-2">Fat:</label>
              <input type="text" id="fat" name="fat" value="{{ $feed->fat}}"class="border border-gray-400 p-2 w-full">
            </div>
          </div>
          <div class="mb-4">
            <div class="border border-gray-400 p-2 w-full">
              <label for="fibre" class="block text-gray-700 font-medium mb-2">Fibre:</label>
              <input type="text" id="fibre" name="fibre" value="{{ $feed->fibre }}" class="border border-gray-400 p-2 w-full">
            </div>
          </div>
          <div class="mb-4">
            <div class="border border-gray-400 p-2 w-full">
              <label for="ca" class="block text-gray-700 font-medium mb-2">Ca max:</label>
              <input type="text" id="ca" name="camax" value="{{ $feed->ca_max }}"class="border border-gray-400 p-2 w-full">
            </div>
          </div>
          <div class="mb-4">
            <div class="border border-gray-400 p-2 w-full">
              <label for="ca1" class="block text-gray-700 font-medium mb-2">Ca min:</label>
              <input type="text" id="ca1" name="camin" value="{{ $feed->ca_min }}"class="border border-gray-400 p-2 w-full">
            </div>
          </div>
          <div class="mb-4">
            <div class="border border-gray-400 p-2 w-full">
              <label for="p1" class="block text-gray-700 font-medium mb-2">P maximum:</label>
              <input type="text" id="p1" name="pmax" value="{{ $feed->p_max }}" class="border border-gray-400 p-2 w-full">
            </div>
          </div>
          <div class="mb-4">
            <div class="border border-gray-400 p-2 w-full">
              <label for="p2" class="block text-gray-700 font-medium mb-2">P minimum:</label>
              <input type="text" id="p2" name="pmin" value="{{ $feed->p_min }}" class="border border-gray-400 p-2 w-full">
            </div>
          </div>
      <div class="text-center">
          <button class="bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600">
              Submit
          </button>
      </div>
    </form>
  </div>
  
@endsection