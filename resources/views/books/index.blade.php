@extends('layouts.app')

@section('title', 'Data Buku')

@section('content')
    <div class="page-heading">
        <div>
            <h1>Data Buku</h1>
        </div>
        <a class="button primary" href="{{ route('books.create') }}">
             Tambah Buku
        </a>
    </div>
    
<form method="GET" action="{{ route('books.index') }}">
    <input
        type="search"
        name="q"
        value="{{ $keyword }}"
        placeholder="Cari judul, penulis, atau ISBN"
    >
    <button type="submit">Cari</button>
    <a href="{{ route('books.index') }}">Reset</a>
</form>


    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($books as $book)
                    <tr>
                        <td>{{ $books->firstItem() + $loop->index }}</td>
                        <td>
                            <strong>{{ $book->title }}</strong><br>
                            <small>{{ $book->isbn ?: 'Tanpa ISBN' }}</small>
                        </td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->published_year ?: '-' }}</td>
                        <td>{{ $book->stock }}</td>
                        <td>
                            Rp {{ number_format((float) $book->price, 0, ',', '.') }}
                        </td>
                        <td class="actions">
                            <a href="{{ route('books.show', $book) }}">Detail</a>
                            <a href="{{ route('books.edit', $book) }}">Edit</a>

                            <form method="POST" action="{{ route('books.destroy', $book) }}"onsubmit="return confirm('Hapus data buku ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="link-danger" type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="empty-state" colspan="7">
                            Data buku belum tersedia.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if ($books->hasPages())
        <nav class="pagination" aria-label="Navigasi halaman">
            @if ($books->onFirstPage())
                <span class="disabled"> Sebelumnya</span>
            @else
                <a href="{{ $books->previousPageUrl() }}"> Sebelumnya</a>
            @endif

            <span>
                Halaman {{ $books->currentPage() }} dari {{ $books->lastPage() }}
            </span>

            @if ($books->hasMorePages())
                <a href="{{ $books->nextPageUrl() }}">Berikutnya </a>
            @else
                <span class="disabled">Berikutnya </span>
            @endif
        </nav>
    @endif
@endsection
