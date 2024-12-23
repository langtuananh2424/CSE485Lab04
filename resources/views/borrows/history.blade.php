@extends('App.app')

@section('content')
    <h1>Lịch sử mượn sách của {{ $reader->name }}</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Sách</th>
                <th>Ngày mượn</th>
                <th>Ngày trả (dự kiến)</th>
                <th>Ngày trả (thực tế)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($borrows as $borrow)
                <tr>
                    <td>{{ $borrow->book->name }}</td>
                    <td>{{ $borrow->borrowed_at }}</td>
                    <td>{{ $borrow->returned_at }}</td>
                    <td>{{ $borrow->actual_return_date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection