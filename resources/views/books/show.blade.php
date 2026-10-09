@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
    <div class="page-heading">
        <div>
            <p class="eyebrow">Read</p>
            <h1>Detail Buku</h1>
        </div>
        <div class="actions-inline">
            <a class="button secondary" href="{{ route('books.edit', $book) }}">
                Edit
            </a>
            <a class="button ghost" href="{{ route('books.index') }}">
                Kembali
            </a>
        </div>
    </div>

    <article class="card detail-grid">
        <div><span>Judul</span><strong>{{ $book->title }}</strong></div>
        <div><span>ISBN</span><strong>{{ $book->isbn ?: '-' }}</strong></div>
        <div><span>Penulis</span><strong>{{ $book->author }}</strong></div>
        <div><span>Penerbit</span><strong>{{ $book->publisher ?: '-' }}</strong></div>
        <div><span>Tahun Terbit</span><strong>{{ $book->published_year ?: '-' }}</strong></div>
        <div><span>Stok</span><strong>{{ $book->stock }}</strong></div>
        <div>
            <span>Harga</span>
            <strong>Rp {{ number_format((float) $book->price, 0, ',', '.') }}</strong>
        </div>
        <div class="full">
            <span>Deskripsi</span>
            <p>{{ $book->description ?: 'Tidak ada deskripsi.' }}</p>
        </div>
    </article>
@endsection
