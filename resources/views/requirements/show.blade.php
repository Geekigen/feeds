@extends('layouts.main')
@section('content')
<div class="container mx-auto mt-10">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-medium mb-2">Requirement Details</h1>
        <div class="text-gray-600 mb-4">
            <p><strong>Animal:</strong> {{ $requirement->animal }}</p>
            <p><strong>Category:</strong> {{ $requirement->category }}</p>
            <p><strong>ME Max:</strong> {{ $requirement->me_max }}</p>
            <p><strong>ME Min:</strong> {{ $requirement->me_min }}</p>
            <p><strong>DE:</strong> {{ $requirement->de }}</p>
            <p><strong>CP Max:</strong> {{ $requirement->cp_max }}</p>
            <p><strong>CP Min:</strong> {{ $requirement->cp_min }}</p>
            <p><strong>DCP:</strong> {{ $requirement->dcp }}</p>
            <p><strong>Lys:</strong> {{ $requirement->lys }}</p>
            <p><strong>M:</strong> {{ $requirement->m }}</p>
            <p><strong>Meth:</strong> {{ $requirement->meth }}</p>
            <p><strong>Fat:</strong> {{ $requirement->fat }}</p>
            <p><strong>Fibre:</strong> {{ $requirement->fibre }}</p>
            <p><strong>CA Max:</strong> {{ $requirement->ca_max }}</p>
            <p><strong>CA Min:</strong> {{ $requirement->ca_min }}</p>
            <p><strong>P Max:</strong> {{ $requirement->p_max }}</p>
            <p><strong>P Min:</strong> {{ $requirement->p_min }}</p>
        </div>
        <div class="text-right">
            <a href="{{ route('req.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-full">Back</a>
            <a href="{{ route('req.edit', $requirement->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-full">Edit</a>
        </div>
    </div>
</div>
           
        


@endsection