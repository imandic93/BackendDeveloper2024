<x-app-layout>
    <x-slot:title>
        <x-title title="Zanrovi"/>
    </x-slot:title>

    @foreach ($genres as $genre)
        <p>{{ $genre->name }}</p>
    @endforeach
</x-app-layout>