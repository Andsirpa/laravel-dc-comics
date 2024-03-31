@extends('layouts.app')

@section('main-content')
    <section class="container mt-5">
        <h1 class="text-light text-center">{{ $comic->name }}</h1>


        <a class="btn btn-primary mt-3 mb-4" href="{{ route('comics.create') }}">Create</a>
        <a class="btn btn-primary mt-3 mb-4" href="{{ route('comics.index') }}">Back to Comics List</a>

        <ul>
            @if (!is_null($comic->description))
                <div class="mb-2"><b class="fs-5">Description:</b> {{ $comic->description }}</div>
            @endif

            <div class="mb-2"><b class="fs-5">Title:</b> {{ $comic->title }}</div>
            <div class="mb-2"><b class="fs-5">Series:</b> {{ $comic->series }}</div>
            <div class="mb-2"><b class="fs-5">Sale Date:</b> {{ $comic->sale_date }}</div>
            <div class="mb-2"><b class="fs-5">Type:</b> {{ $comic->type }}</div>

            {{-- <li>Series: {{ $comic->series }}</li>
            <li>Title: {{ $comic->title }}</li>
            <li>Sale Date: {{ $comic->sale_date }}</li>
            <li>Type: {{ $comic->type }}</li> --}}
        </ul>


    </section>
@endsection
