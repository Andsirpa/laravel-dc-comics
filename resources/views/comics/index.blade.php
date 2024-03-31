@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
    <section>
        <div class="container py-4">
            <h1>Comics List</h1>
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
                        @empty
                            <tr>
                                <td colspan="100%">
                                    No comics found
                                </td>
                            </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection
