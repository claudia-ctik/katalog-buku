<div class="form-grid">
    <div class="field full">
        <label for="title">Judul <span>*</span></label>
        <input
            id="title"
            name="title"
            type="text"
            value="{{ old('title', $book->title ?? '') }}"
        >
        @error('title') <small class="error">{{ $message }}</small> @enderror
    </div>

    <div class="field">
        <label for="isbn">ISBN</label>
        <input
            id="isbn"
            name="isbn"
            type="text"
            value="{{ old('isbn', $book->isbn ?? '') }}"
        >
        @error('isbn') <small class="error">{{ $message }}</small> @enderror
    </div>

    <div class="field">
        <label for="author">Penulis <span>*</span></label>
        <input
            id="author"
            name="author"
            type="text"
            value="{{ old('author', $book->author ?? '') }}"
        >
        @error('author') <small class="error">{{ $message }}</small> @enderror
    </div>

    <div class="field">
        <label for="publisher">Penerbit</label>
        <input
            id="publisher"
            name="publisher"
            type="text"
            value="{{ old('publisher', $book->publisher ?? '') }}"
        >
        @error('publisher') <small class="error">{{ $message }}</small> @enderror
    </div>

    <div class="field">
        <label for="published_year">Tahun Terbit</label>
        <input
            id="published_year"
            name="published_year"
            type="number"
            min="1900"
            max="{{ date('Y') }}"
            value="{{ old('published_year', $book->published_year ?? '') }}"
        >
        @error('published_year')
            <small class="error">{{ $message }}</small>
        @enderror
    </div>

    <div class="field">
        <label for="price">Harga <span>*</span></label>
        <input
            id="price"
            name="price"
            type="number"
            min="0"
            step="0.01"
            value="{{ old('price', $book->price ?? 0) }}"
        >
        @error('price') <small class="error">{{ $message }}</small> @enderror
    </div>

    <div class="field">
        <label for="stock">Stok <span>*</span></label>
        <input
            id="stock"
            name="stock"
            type="number"
            min="0"
            value="{{ old('stock', $book->stock ?? 0) }}"
        >
        @error('stock') <small class="error">{{ $message }}</small> @enderror
    </div>

    <div class="field full">
        <label for="description">Deskripsi</label>
        <textarea id="description" name="description" rows="5">{{ old('description', $book->description ?? '') }}</textarea>
        @error('description')
            <small class="error">{{ $message }}</small>
        @enderror
    </div>
</div>

<div class="form-actions">
    <button class="button primary" type="submit">Simpan</button>
    <a class="button ghost" href="{{ route('books.index') }}">Batal</a>
</div>
