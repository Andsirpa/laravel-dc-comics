@extends('layouts.app')

@section('main-content')
    <section class="container mt-5">
        <h1 class="text-light text-center">{{ $comic->name }}</h1>

        <a href="{{ route('comics.create') }}">Create</a>

        <ul>
            @if (!is_null($comic->description))
                <li>Desciption: {{ $comic->description }}</li>
            @endif

            <li>Series: {{ $comic->series }}</li>
            <li>Title: {{ $comic->title }}</li>
            <li>Sale Date: {{ $comic->sale_date }}</li>
            <li>Type: {{ $comic->type }}</li>
        </ul>


    </section>
@endsection
