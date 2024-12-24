
@extends('App.app')

@section('content')
    <h1>Mượn sách</h1>

    <form method="POST" action="{{ route('borrows.store') }}">
        @csrf
        <div class="form-group">
            <label for="reader_id">Độc giả</label>
            <select name="reader_id" id="reader_id" class="form-control">
                </select>
        </div>
        <div class="form-group">
            <label for="book_id">Sách</label>
            <select name="book_id" id="book_id" class="form-control">
                </select>
        </div>
        <button type="submit" class="btn btn-primary">Mượn</button>
    </form>
@endsection
