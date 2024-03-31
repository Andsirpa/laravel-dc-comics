@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
    <section>
        <div class="container py-4">
            <h1>Comics List</h1>
            <a class="btn btn-primary mt-3 mb-4" href="{{ route('comics.create') }}">Create New Comic</a>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Series</th>
                        <th scope="col">Sale Date</th>
                        <th scope="col">Type</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($comics as $comic)
                        <tr>
                            <td>{{ $comic->id }}</td>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->description }}</td>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>{{ $comic->type }}</td>
                        </tr>
                        <td>
                            <a href="{{ route('comics.show', $comic) }}" class="me-2">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            {{-- al click del bottone faccio apparire la modal --}}
                            <button type="button" class="modal-button" data-bs-toggle="modal"
                                data-bs-target="#delete-comic-{{ $comic->id }}">
                                <i class="fa-solid fa-circle-xmark" style="color: red;"></i>
                            </button>
                        </td>
                    @empty
                        <tr>
                            <td colspan="100%">
                                No comics found
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $comics->links() }}
        </div>
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

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
