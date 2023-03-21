@extends('layouts.main')
@section('content')
<div class="flex justify-center">
    <div class="w-full max-w-sm">
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="text-lg font-medium mb-4">{{ $feed->name }}</div>
            <div class="text-gray-700 mb-4">Type : {{ $feed->type }}</div>
            <div class="text-gray-700 mb-4">ME : {{ $feed->me }}</div>
            <div class="text-gray-700 mb-4">DE : {{ $feed->de }}</div>
            <div class="text-gray-700 mb-4">CP : {{ $feed->cp }}</div>
            <div class="text-gray-700 mb-4">DCP : {{ $feed->dcp }}</div>
            <div class="text-gray-700 mb-4">LYS : {{ $feed->lys }}</div>
            <div class="text-gray-700 mb-4">M+C : {{ $feed->m }}</div>
            <div class="text-gray-700 mb-4">METH : {{ $feed->meth }}</div>
            <div class="text-gray-700 mb-4">FAT : {{ $feed->fat }}</div>
            <div class="text-gray-700 mb-4">FIBRE : {{ $feed->fibre }}</div>
            <div class="text-gray-700 mb-4">CA : {{ $feed->ca }}</div>
            <div class="text-gray-700 mb-4">P : {{ $feed->p }}</div>
            <div class="text-gray-700 mb-4">COST : {{ $feed->cost }}</div>
            <a href="{{ route('feed.edit', $feed->id) }}" class="px-2 py-1 text-green-500 hover:text-green-800">Edit</a>
        </div>
    </div>
</div>


@endsection