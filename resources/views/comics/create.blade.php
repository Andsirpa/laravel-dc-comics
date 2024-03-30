@extends('layouts.app')

@section('main-content')
    <section class="container mt-5">
        <h1 class="text-light text-center">Create Comic</h1>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="row g-3">
                <div class="col-6">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="col-6">
                    <label for="description" class="form-label">Description</label>
                    <input type="number" class="form-control" id="description" name="description" required>
                </div>
                <div class="col-6">
                    <label for="series" class="form-label">Series</label>
                    <input type="number" class="form-control" id="series" name="series" required>
                </div>
                <div class="col-6">
                    <label for="sale-date" class="form-label">Sale Date</label>
                    <input type="number" class="form-control" id="sale-date" name="sale-date" required>
                </div>
                <div class="col-6">
                    <label for="type" class="form-label">Type</label>
                    <input type="number" class="form-control" id="type" name="type" required>
                </div>

            </div>

            <button class="btn btn-primary mt-3">
                Save
            </button>
        </form>


    </section>
@endsection
