@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="bg-white dark:bg-zinc-900 shadow ring-1 ring-black/5 dark:ring-white/5 rounded-lg p-6">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">Beheer Allergenen</h1>
            <a href="{{ route('allergeen.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 dark:border-zinc-700 rounded-md shadow-sm text-sm font-medium text-gray-700 dark:text-zinc-300 bg-white dark:bg-zinc-800 hover:bg-gray-50 dark:hover:bg-zinc-700">Terug naar overzicht</a>
        </div>
        <table class="min-w-full table-auto divide-y divide-gray-200 dark:divide-zinc-700">
            <thead class="bg-gray-50 dark:bg-zinc-900">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-zinc-400 uppercase tracking-wider">Naam</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-zinc-400 uppercase tracking-wider">Omschrijving</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-zinc-400 uppercase tracking-wider">Acties</th>
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-zinc-900 divide-y divide-gray-200 dark:divide-zinc-800">
                @foreach($allergenen as $allergeen)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">{{ $allergeen->Naam }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-zinc-400">{{ $allergeen->Omschrijving ?? '-' }}</td>
                        <td class="px-6 py-4 text-center">
                            <a href="{{ route('allergeen.edit', $allergeen->Id) }}" class="inline-block px-3 py-1 bg-yellow-400 text-white rounded hover:bg-yellow-500 mr-2">Bewerk</a>
                            <form action="{{ route('allergeen.destroy', $allergeen->Id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700" onclick="return confirm('Weet je zeker dat je dit allergeen wilt verwijderen?')">Verwijder</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
