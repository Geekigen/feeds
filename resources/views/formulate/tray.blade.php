@extends('layouts.main')

@section('content')
<div class="container min-h-screen mx-auto mt-10">
    <div class="bg-white p-6 rounded-lg shadow-lg">
                <h1>Suitable ingredients for this category feed</h1>
                <table class="table-auto w-full text-center">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="px-4 py-2">#</th>
                            <th class="px-4 py-2"></th>
                            <th class="px-4 py-2">Type</th>
                            <th class="px-4 py-2">ME</th>
                            <th class="px-4 py-2">DE</th>
                            <th class="px-4 py-2">CP</th>
                            <th class="px-4 py-2">DCP</th>
                            <th class="px-4 py-2">LYS</th>
                            <th class="px-4 py-2">M+C</th>
                            <th class="px-4 py-2">METH</th>
                            <th class="px-4 py-2">FAT</th>
                            <th class="px-4 py-2">FIBRE</th>
                            <th class="px-4 py-2">CA</th>   
                            <th class="px-4 py-2">P</th>
                            <th class="px-4 py-2">KG</th>
                            <th class="px-4 py-2">Cost</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
@php
    $total = 0;
    $totalme = 0;  
    $totalde = 0;
    $totalcp = 0;
    $totaldcp = 0;
    $totallys = 0;
    $totalm = 0;
    $totalmeth = 0;
    $totalfat = 0;
    $totalfibre = 0;
    $totalca = 0;
    $totalp = 0;
    $totalq=0;

@endphp
@if (session('tray'))
    
@foreach ( session('tray') as $id => $details )
   @php
        $total += $details['cost'] * $details['quantity'];
        $totalme += $details['me'] * $details['quantity'];
        $totalde += $details['de'] * $details['quantity'];
        $totalcp += $details['cp'] * $details['quantity'];
        $totaldcp += $details['dcp'] * $details['quantity'];
        $totallys += $details['lys'] * $details['quantity'];
        $totalm += $details['m'] * $details['quantity'];
        $totalmeth += $details['meth'] * $details['quantity'];
        $totalfat += $details['fat'] * $details['quantity'];
        $totalfibre += $details['fibre'] * $details['quantity'];
        $totalca += $details['ca'] * $details['quantity'];
        $totalp += $details['p'] * $details['quantity'];
        $totalq += $details['quantity'] * $details['quantity'];
   @endphp 
    <tr data-id="{{ $id }}" class="hover:bg-gray-100">
      <td class="border px-4 py-2">{{$details['id'] }}</td>
      <td class="border px-4 py-2">{{ $details['name']}}</td>
      <td class="border px-4 py-2">{{ $details['type'] }}</td>
      <td class="border px-4 py-2">{{ $details['me']}}</td>
      <td class="border px-4 py-2">{{ $details['de'] }}</td>
      <td class="border px-4 py-2">{{$details['cp'] }}</td>
      <td class="border px-4 py-2">{{$details['dcp'] }}</td>
      <td class="border px-4 py-2">{{ $details['lys']  }}</td>
      <td class="border px-4 py-2">{{ $details['m'] }}</td>
      <td class="border px-4 py-2">{{ $details['meth']  }}</td>
      <td class="border px-4 py-2">{{$details['fat']  }}</td>
      <td class="border px-4 py-2">{{ $details['fibre']  }}</td>
      <td class="border px-4 py-2">{{ $details['ca'] }}</td>
      <td class="border px-4 py-2">{{$details['p'] }}</td>
      <td class="border px-4 py-2"><input  type="number" step="0.01" min="0" value="{{ $details['quantity'] }}" class="w-16 py-1 border rounded quantity update-cart" /></td>
      <td class="border px-4 py-2">ksh/= {{ $details['cost'] * $details['quantity'] }}</td>
          <td class="border px-4 py-2">
            <button class="bg-red-500 hover:bg-red-400
             text-white font-bold py-2 px-4 rounded remove-from-cart">
               DELETE
             </button>
             
          </td>
      </tr>
@endforeach
    
@endif

</tbody>

<tfoot>
  <tr>
       <td class="border px-4 py-2"></td> 
       <td class="border px-4 py-2"></td>  
       <td class="border px-4 py-2"><b> Totals</b></td> 
       <td class="border px-4 py-2">{{$totalme}}</td> 
       <td class="border px-4 py-2">{{$totalde}}</td> 
       <td class="border px-4 py-2">{{$totalcp}}</td> 
       <td class="border px-4 py-2">{{$totaldcp}}</td> 
       <td class="border px-4 py-2">{{$totallys}}</td> 
       <td class="border px-4 py-2">{{$totalm}}</td> 
       <td class="border px-4 py-2">{{$totalmeth}}</td> 
       <td class="border px-4 py-2">{{$totalfat}}</td> 
       <td class="border px-4 py-2">{{$totalfibre}}</td> 
       <td class="border px-4 py-2">{{$totalca}}</td> 
       <td class="border px-4 py-2">{{$totalp}}</td> 
       <td class="border px-4 py-2">{{$totalq}}</td> 
       <td class="border px-4 py-2">{{$total}}</td> 
    </tr>
</tfoot>
</table>
<form  class="w-full" action="/checkout" method="post">

    @csrf
    <div class="mb-5 relative">
      <input type="text" id="name" name="feedname"class="peer pt-8 border border-gray-200 focus:outline-none rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 h-16 placeholder-transparent" placeholder="Feed formula name" autocomplete="off" />
      <label for="name" class="peer-placeholder-shown:opacity-100   opacity-75 peer-focus:opacity-75 peer-placeholder-shown:scale-100 scale-75 peer-focus:scale-75 peer-placeholder-shown:translate-y-0 -translate-y-3 peer-focus:-translate-y-3 peer-placeholder-shown:translate-x-0 translate-x-1 peer-focus:translate-x-1 absolute top-0 left-0 px-3 py-5 h-full pointer-events-none transform origin-left transition-all duration-100 ease-in-out">Formulation name</label>
    </div>
    <div class="mb-5 relative">
        <input type="text" id="comment" name="feedcomment"class="peer pt-8 border border-gray-200 focus:outline-none rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 h-16 placeholder-transparent" placeholder="Feed formula name" autocomplete="off" />
        <label for="comment" class="peer-placeholder-shown:opacity-100   opacity-75 peer-focus:opacity-75 peer-placeholder-shown:scale-100 scale-75 peer-focus:scale-75 peer-placeholder-shown:translate-y-0 -translate-y-3 peer-focus:-translate-y-3 peer-placeholder-shown:translate-x-0 translate-x-1 peer-focus:translate-x-1 absolute top-0 left-0 px-3 py-5 h-full pointer-events-none transform origin-left transition-all duration-100 ease-in-out">Comment</label>
      </div>
    <button onclick="javascript:void(0);" class="w-full bg-indigo-600 text-white p-3 rounded-md">Create formulation
  </button>
  </form>
  <p class="border border-gray-400 mt-4 p-4">SELECT FEEDS MANUALLY</p>

<table class="table-auto w-full text-center">
    <thead>
        <tr class="bg-gray-200">
            <th class="px-4 py-2">ID</th>
            <th class="px-4 py-2">Name</th>
            <th class="px-4 py-2">Type</th>
            <th class="px-4 py-2">ME</th>
            <th class="px-4 py-2">DE</th>
            <th class="px-4 py-2">CP</th>
            <th class="px-4 py-2">DCP</th>
            <th class="px-4 py-2">LYS</th>
            <th class="px-4 py-2">M+C</th>
            <th class="px-4 py-2">METH</th>
            <th class="px-4 py-2">FAT</th>
            <th class="px-4 py-2">FIBRE</th>
            <th class="px-4 py-2">CA</th>   
            <th class="px-4 py-2">P</th>
            <th class="px-4 py-2">Cost</th>
            <th class="px-4 py-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($feeds as $feed )
            
       
        <tr class="hover:bg-gray-100">
            <td class="border px-4 py-2">{{ $feed->id }}</td>
            <td class="border px-4 py-2">{{ $feed->name }}</td>
            <td class="border px-4 py-2">{{ $feed->type }}</td>
            <td class="border px-4 py-2">{{ $feed->me }}</td>
            <td class="border px-4 py-2">{{ $feed->de }}</td>
            <td class="border px-4 py-2">{{ $feed->cp }}</td>
            <td class="border px-4 py-2">{{ $feed->dcp }}</td>
            <td class="border px-4 py-2">{{ $feed->lys }}</td>
            <td class="border px-4 py-2">{{ $feed->m }}</td>
            <td class="border px-4 py-2">{{ $feed->meth }}</td>
            <td class="border px-4 py-2">{{ $feed->fat }}</td>
            <td class="border px-4 py-2">{{ $feed->fibre }}</td>
            <td class="border px-4 py-2">{{ $feed->ca}}</td>
            <td class="border px-4 py-2">{{ $feed->p }}</td>
            <td class="border px-4 py-2">{{ $feed->cost }}</td>
                <td>
                    <a href="/add-to-tray/{{ $feed->id }} "class="mb-2 bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-full">Add to tray</a>
                </td>
            </tr>
      

        @endforeach
    </tbody>
</table>
</div>
</div>
<script>   
 $(".update-cart").change(function (event) {
    event.preventDefault();

    const ele = $(this);

    $.ajax({
        url: `{{ route('update.cart') }}`,
        method: "PATCH",
        data: {
            _token: `{{ csrf_token() }}`,
            id: ele.closest("tr").data("id"),
            quantity: ele.closest("tr").find(".quantity").val()
        },
        success: function (response) {
           location.reload();
        }
    });
});

$(".remove-from-cart").click(function (event) {
    event.preventDefault();

    const ele = $(this);

    if (confirm("{{__('Are you sure want to remove?')}}")) {
        $.ajax({
            url: `{{ route('remove.from.cart') }}`,
            method: "DELETE",
            data: {
                _token: `{{ csrf_token() }}`,
                id: ele.closest("tr").data("id")
            },
            success: function (response) {
                location.reload();
            }
        });
    }
});

</script>
@endsection
