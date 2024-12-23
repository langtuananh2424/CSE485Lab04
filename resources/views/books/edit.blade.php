
@extends('App.app')

@section('content')
    <h1>Sửa sách</h1>

    <form method="POST" action="{{ route('books.update', $book->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Tên sách</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $book->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
@endsection

