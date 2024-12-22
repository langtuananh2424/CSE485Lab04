@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Chi tiết Sách</h1>
        <p><strong>Tên:</strong> {{ $reader->name }}</p>
        <p><strong>Ngày Sinh:</strong> {{ $reader->birthday }}</p>
        <p><strong>Địa Chỉ:</strong> {{ $reader->address }}</p>
        <p><strong>Số Điện Thoại:</strong> {{ $reader->phone }}</p>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Quay lại</a>
    </div>

    <div class="container">
        @if ($borrows->count() > 0)
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Tên Sách</th>
                    <th>Ngày Mượn</th>
                    <th>Ngày Trả</th>
                    <th>Trạng Thái</th>
                </tr>
                </thead>
                <tbody>
                @foreach($borrows as $borrow)
                    <tr>
                        <td>{{ $borrow->book->name}}</td>
                        <td>{{ $borrow->borrow_date}}</td>
                        <td>{{ $borrow->return_date}}</td>
                        <td>{{ $borrow->status ? "Đã trả" : "Chưa trả" }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>Chưa có ai mượn cuốn sách này.</p>
        @endif
    </div>
@endsection
