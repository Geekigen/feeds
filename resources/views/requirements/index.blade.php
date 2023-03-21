@extends('layouts.main')

@section('content')
<div class="container min-h-screen mx-auto mt-10">
    <div class="bg-white p-6 rounded-lg shadow-lg">
                <h1>Requirements</h1>
                <table  class="table-auto border">
                    <thead>
                        <tr>
                            <th class="border px-4 py-2">Animal</th>
                            <th class="border px-4 py-2">Category</th>
                            <th class="border px-4 py-2">ME Max</th>
                            <th class="border px-4 py-2">ME Min</th>
                            <th class="border px-4 py-2">DE</th>
                            <th class="border px-4 py-2">CP Max</th>
                            <th class="border px-4 py-2">CP Min</th>
                            <th class="border px-4 py-2">DCP</th>
                            <th class="border px-4 py-2">Lys</th>
                            <th class="border px-4 py-2">M</th>
                            <th class="border px-4 py-2">Meth</th>
                            <th class="border px-4 py-2">Fat</th>
                            <th class="border px-4 py-2">Fibre</th>
                            <th class="border px-4 py-2">Ca Max</th>
                            <th class="border px-4 py-2">Ca Min</th>
                            <th class="border px-4 py-2">P Max</th>
                            <th class="border px-4 py-2">P Min</th>
                            <th class="border px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($requirements as $requirement)
                        <tr>
                            <td class="border px-4 py-2">{{ $requirement->animal }}</td>
                            <td class="border px-4 py-2">{{ $requirement->category }}</td>
                            <td class="border px-4 py-2">{{ $requirement->me_max }}</td>
                            <td class="border px-4 py-2">{{ $requirement->me_min }}</td>
                            <td class="border px-4 py-2">{{ $requirement->de }}</td>
                            <td class="border px-4 py-2">{{ $requirement->cp_max }}</td>
                            <td class="border px-4 py-2">{{ $requirement->cp_min }}</td>
                            <td class="border px-4 py-2">{{ $requirement->dcp }}</td>
                            <td class="border px-4 py-2">{{ $requirement->lys }}</td>
                            <td class="border px-4 py-2">{{ $requirement->m }}</td>
                            <td class="border px-4 py-2">{{ $requirement->meth }}</td>
                            <td class="border px-4 py-2">{{ $requirement->fat }}</td>
                            <td class="border px-4 py-2">{{ $requirement->fibre }}</td>
                            <td class="border px-4 py-2">{{ $requirement->ca_max }}</td>
                            <td class="border px-4 py-2">{{ $requirement->ca_min }}</td>
                            <td class="border px-4 py-2">{{ $requirement->p_max }}</td>
                            <td class="border px-4 py-2">{{ $requirement->p_min }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('req.show', $requirement->id) }}"class="mb-2 bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-full">View</a>
                    <a href="{{ route('req.edit', $requirement->id) }}"class="mt-2 bg-yellow-500 hover:bg-yellow-600 text-white font-medium py-2 px-4 rounded-full">Edit</a>
                    <form action="{{ route('req.destroy', $requirement->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"class="mt-2 bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-full">Delete</button>
                    </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            
        </div>
    </div>
@endsection
