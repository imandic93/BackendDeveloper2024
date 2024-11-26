@extends('layout.app')

<x-title title="Zanrovi"/>

@section('content')
    @foreach ($genres as $genre)
        <p>{{ $genre }}</p>
    @endforeach
@endsection