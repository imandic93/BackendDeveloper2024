<x-app>
    <x-slot:title>
        <x-title title="Novi zanr"/>
    </x-slot:title>

    <form action="{{ route('genres.store') }}" method="post">
        <label for="name">Naziv</label>
        <input type="text" name="name" value="{{ old('name') }}">
        <input type="submit" value="Spremi">

        @csrf

        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror
    </form>
</x-app>