@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
    <section>
        <div class="container py-4">
            <h1>Comics List</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Series</th>
                        <th>Sale Date</th>
                        <th>Type</th>
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
