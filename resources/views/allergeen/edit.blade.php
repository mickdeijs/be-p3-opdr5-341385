@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="bg-white dark:bg-zinc-900 shadow ring-1 ring-black/5 dark:ring-white/5 rounded-lg p-6">
        <h1 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Bewerk Allergeen</h1>
        <form method="POST" action="{{ route('allergeen.update', $allergeen->Id) }}">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="Naam" class="block text-sm font-medium text-gray-700 dark:text-zinc-300 mb-2">Naam</label>
                <input type="text" name="Naam" id="Naam" value="{{ old('Naam', $allergeen->Naam) }}" required maxlength="50"
                    class="block w-full px-3 py-2 border border-gray-300 dark:border-zinc-700 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-zinc-800 dark:text-white">
                @error('Naam')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-6">
                <label for="Omschrijving" class="block text-sm font-medium text-gray-700 dark:text-zinc-300 mb-2">Omschrijving</label>
                <textarea name="Omschrijving" id="Omschrijving" maxlength="255"
                    class="block w-full px-3 py-2 border border-gray-300 dark:border-zinc-700 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-zinc-800 dark:text-white">{{ old('Omschrijving', $allergeen->Omschrijving) }}</textarea>
                @error('Omschrijving')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex justify-between items-center mt-4">
                <a href="{{ route('allergeen.index') }}" class="inline-block px-4 py-2 border border-gray-300 dark:border-zinc-700 rounded-md text-sm font-medium text-gray-700 dark:text-zinc-300 bg-white dark:bg-zinc-800 hover:bg-gray-50 dark:hover:bg-zinc-700">Annuleren</a>
                <div class="flex gap-2">
                    <form method="POST" action="{{ route('allergeen.destroy', $allergeen->Id) }}" onsubmit="return confirm('Weet je zeker dat je dit allergeen wilt verwijderen?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="inline-block px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Verwijderen</button>
                    </form>
                    <button type="submit" form="" class="inline-block px-6 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Opslaan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
