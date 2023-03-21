

@extends('layouts.main')
@section('content')
        
   
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
  

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="flex justify-end mb-4">
                        <a href="{{ route('animal.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            {{ __('Add  animal classification e.g ruminants poultry') }}
                        </a>
                    </div>

                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">{{ __('ID') }}</th>
                                <th class="px-4 py-2">{{ __('Name') }}</th>
                                <th class="px-4 py-2">{{ __('Created At') }}</th>
                                <th class="px-4 py-2">{{ __('Updated At') }}</th>
                                <th class="px-4 py-2">{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($animal as $animal)
                                <tr>
                                    <td class="border px-4 py-2">{{ $animal->id }}</td>
                                    
                                    <td class="border px-4 py-2">{{ $animal->name }}</td>
                                    <td class="border px-4 py-2">{{ $animal->created_at }}</td>
                                    <td class="border px-4 py-2">{{ $animal->updated_at }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('animal.show', $animal) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                            {{ __('View') }}
                                        </a>
                                     
                                        <form action="{{ route('animal.destroy', $animal) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">{{ __('Delete') }}</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection
