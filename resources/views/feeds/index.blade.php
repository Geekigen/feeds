@extends('layouts.main')
@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                <div class="flex justify-end mb-4">
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
        @foreach ($feeds as $feed)
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
                    <a href="{{ route('feed.show', $feed->id) }}">View</a>
                    <a href="{{ route('feed.edit', $feed->id) }}">Edit</a>
                    <form action="{{ route('feed.destroy', $feed->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
                </div></div></div></div></div>
@endsection