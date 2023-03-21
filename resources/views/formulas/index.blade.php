@extends('layouts.main')
{{-- foreach ($data['cart'] as $cart) {
    $orders=new order();
    $orders->name=$cart['name'];
    $orders->product_id=$cart['id'];
    $orders->price=$cart['price'];
    $orders->quantity=$cart['quantity'];
    $orders->image=$cart['image'];
    $orders->buyer=Auth::user()->id;
    $orders->seller=$cart['seller'];
    } --}}
@section('content')
@foreach ($formula as $formula )
<div class="container min-h-screen mx-auto mt-10">
    <div class="bg-white p-6 rounded-lg shadow-lg">
                <h1>{{$formula->name}}</h1>
                <h1>{{$formula->comment}}</h1>
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
                            <th class="px-4 py-2">KG</th>
                            <th class="px-4 py-2">Cost</th>
                        </tr>
                    </thead>
                    <tbody>
@php
    $data=json_decode($formula->content, true);
@endphp
    
@foreach ( $data as $details )
   
    <tr  class="hover:bg-gray-100">
      <td class="border px-4 py-2">{{$details['id'] }}</td>
      <td class="border px-4 py-2">{{ $details['name']}}</td>
      <td class="border px-4 py-2">{{ $details['type'] }}</td>
      <td class="border px-4 py-2">{{ $details['me']}}</td>
      <td class="border px-4 py-2">{{ $details['de'] }}</td>
      <td class="border px-4 py-2">{{$details['cp'] }}</td>
      <td class="border px-4 py-2">{{ $details['name'] }}</td>
      <td class="border px-4 py-2">{{ $details['lys']  }}</td>
      <td class="border px-4 py-2">{{ $details['m'] }}</td>
      <td class="border px-4 py-2">{{ $details['meth']  }}</td>
      <td class="border px-4 py-2">{{$details['fat']  }}</td>
      <td class="border px-4 py-2">{{ $details['fibre']  }}</td>
      <td class="border px-4 py-2">{{ $details['ca'] }}</td>
      <td class="border px-4 py-2">{{$details['p'] }}</td>
      <td></td>
      <td class="border px-4 py-2">ksh/= {{ $details['cost'] }}</td>
          <td>
            
             
          </td>
      </tr>
@endforeach
    


</tbody>

<tfoot>
    
</tfoot>
</table>



 
@endforeach
@endsection