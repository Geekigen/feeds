@extends('layouts.main')
@section('content')
<div class="flex justify-center">
    <form method="post" action="/feed/{{ $feed->id }}" class="bg-white p-6 rounded-lg w-1/3" @submit.prevent="submitForm">
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
          <label for="type" class="block text-gray-700 font-medium mb-2">Type:</label>
          <select id="type" name="type" class="border border-gray-400 p-2 w-full">
            <option value="{{ $feed->type }}" selected>{{ $feed->type }}</option>  

<option value="cerials & seeds">cerials & seeds</option>
<option value="dried fibres">dried fibres</option>
<option value="cerial byproducts">cerial byproducts</option>
<option value="oil meals">oil meals</option>
<option value="animal protein">animal protein</option>
<option value="fats">fats</option>
<option value="miscalenous">miscalenous</option>
<option value="minerals">minerals</option>            
<option value="synthetic amino">synthetic amino</option>
          </select>
        </div>
      </div>
      
      <div class="mb-4">
        <div class="border border-gray-400 p-2 w-full">
          <label for="name" class="block text-gray-700 font-medium mb-2">Name:</label>
          <input type="text" id="name" name="name" class="border border-gray-400 p-2 w-full" value="{{ $feed->name }}">
        </div>
      </div>
      
      <div class="mb-4">
        <div class="border border-gray-400 p-2 w-full">
          <label for="me" class="block text-gray-700 font-medium mb-2">ME:</label>
          <input type="text" id="me" name="me" class="border border-gray-400 p-2 w-full" value="{{ $feed->me }}">
        </div>
      </div>
      
      <div class="mb-4">
        <div class="border border-gray-400 p-2 w-full">
          <label for="de" class="block text-gray-700 font-medium mb-2">DE:</label>
          <input type="text" id="de" name="de" class="border border-gray-400 p-2 w-full" value="{{ $feed->de }}">
        </div>
      </div>
      
      <div class="mb-4">
        <div class="border border-gray-400 p-2 w-full">
          <label for="cp" class="block text-gray-700 font-medium mb-2">CP:</label>
          <input type="text" id="cp" name="cp" class="border border-gray-400 p-2 w-full" value="{{ $feed->cp }}">
        </div>
      </div>
      
      <div class="mb-4">
        <div class="border border-gray-400 p-2 w-full">
          <label for="dcp" class="block text-gray-700 font-medium mb-2">DCP:</label>
          <input type="text" id="dcp" name="dcp" class="border border-gray-400 p-2 w-full" value="{{ $feed->dcp }}">
        </div>
      </div>
      
      <div class="mb-4">
        <div class="border border-gray-400 p-2 w-full">
          <label for="lys" class="block text-gray-700 font-medium mb-2">Lys:</label>
          <input type="text" id="lys" name="lys" class="border border-gray-400 p-2 w-full" value="{{ $feed->lys }}">
        </div>
      </div>
      
      <div class="mb-4">
        <div class="border border-gray-400 p-2 w-full">
          <label for="m+c" class="block text-gray-700 font-medium mb-2">M+C:</label>
          <input type="text" id="m+c" name="m+c" class="border border-gray-400 p-2 w-full" value="{{ $feed->m }}">
        </div>
        <div class="mb-4">
            <div class="border border-gray-400 p-2 w-full">
              <label for="meth" class="block text-gray-700 font-medium mb-2">Meth:</label>
              <input type="text" id="meth" name="meth" class="border border-gray-400 p-2 w-full" value="{{ $feed->meth }}" >
            </div>
          </div>
          <div class="mb-4">
            <div class="border border-gray-400 p-2 w-full">
              <label for="fat" class="block text-gray-700 font-medium mb-2">Fat:</label>
              <input type="text" id="fat" name="fat" class="border border-gray-400 p-2 w-full" value="{{ $feed->fat }}">
            </div>
          </div>
          <div class="mb-4">
            <div class="border border-gray-400 p-2 w-full">
              <label for="fibre" class="block text-gray-700 font-medium mb-2">Fibre:</label>
              <input type="text" id="fibre" name="fibre" class="border border-gray-400 p-2 w-full" value="{{ $feed->fibre }}">
            </div>
          </div>
          <div class="mb-4">
            <div class="border border-gray-400 p-2 w-full">
              <label for="ca" class="block text-gray-700 font-medium mb-2">Ca:</label>
              <input type="text" id="ca" name="ca" class="border border-gray-400 p-2 w-full" value="{{ $feed->ca }}">
            </div>
          </div>
          <div class="mb-4">
            <div class="border border-gray-400 p-2 w-full">
              <label for="p" class="block text-gray-700 font-medium mb-2">P:</label>
              <input type="text" id="p" name="p" class="border border-gray-400 p-2 w-full" value="{{ $feed->p }}">
            </div>
            <div class="mb-4">
              <div class="border border-gray-400 p-2 w-full">
                <label for="cost" class="block text-gray-700 font-medium mb-2">Cost:</label>
                <input type="text" id="cost" name="cost" class="border border-gray-400 p-2 w-full" value="{{ $feed->cost }}">
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