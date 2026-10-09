@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <div class="page-heading">
        <div>
            <p class="eyebrow">Create</p>
            <h1>Tambah Buku</h1>
        </div>
    </div>

    <form class="card" method="POST" action="{{ route('books.store') }}">
        @csrf
        @include('books._form')
    </form>
@endsection
