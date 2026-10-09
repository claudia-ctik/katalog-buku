@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <div class="page-heading">
        <div>
            <p class="eyebrow">Update</p>
            <h1>Edit Buku</h1>
        </div>
    </div>

    <form
        class="card"
        method="POST"
        action="{{ route('books.update', $book) }}"
    >
        @csrf
        @method('PUT')
        @include('books._form', ['book' => $book])
    </form>
@endsection
