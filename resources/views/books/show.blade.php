@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Chi tiết Sách</h1>
        <p><strong>Tên Sách:</strong> {{ $book->name }}</p>
        <p><strong>Tác giả:</strong> {{ $book->author }}</p>
        <p><strong>Thể loại:</strong> {{ $book->category}}</p>
        <p><strong>Năm phát hành:</strong> {{ $book->year}}</p>
        <p><strong>Chất lượng:</strong> {{ $book->quantity}}</p>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Quay lại</a>
    </div>


@endsection
