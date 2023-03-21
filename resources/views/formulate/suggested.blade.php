@extends('layouts.main')

@section('content')
<div class="container min-h-screen mx-auto mt-10">
    <div class="bg-white p-6 rounded-lg shadow-lg">
                <h1>{{$statement}}</h1>
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
                        @foreach ($ingredient as $feed )
                            
                       
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
@endsection
