@extends('layouts.app')

@section('main-content')
    <section class="container mt-5">
        <h1 class="text-light text-center">{{ $comic->name }}</h1>

        <a class="btn btn-primary mt-3 mb-4" href="{{ route('comics.create') }}">Create</a>
        <a class="btn btn-primary mt-3 mb-4" href="{{ route('comics.index') }}">Back to Comics List</a>

        @if (!is_null($comic->description))
            <div class="mb-2"><b class="fs-5">Description:</b> {{ $comic->description }}</div>
        @endif

        <div class="mb-2"><b class="fs-5">Title:</b> {{ $comic->title }}</div>
        <div class="mb-2"><b class="fs-5">Series:</b> {{ $comic->series }}</div>
        <div class="mb-2"><b class="fs-5">Sale Date:</b> {{ $comic->sale_date }}</div>
        <div class="mb-2"><b class="fs-5">Type:</b> {{ $comic->type }}</div>

    </section>
@endsection

{{-- modal --}}
@section('modal')
    @foreach ($comics as $comic)
        <div class="modal fade" id="delete-comic-{{ $comic->id }}" tabindex="-1"
            aria-labelledby="delete-comic-{{ $comic->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Delete {{ $comic->name }}
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        This Comic will be eliminated. Are you sure?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" value="Delete">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
