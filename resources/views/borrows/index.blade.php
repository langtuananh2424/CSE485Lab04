@extends('layouts.App')
@section('content')
    <div class="container">
        <h1>Danh sách Mượn</h1>
        <a href="{{route('borrows.create')}}" class="btn btn-primary">Add Borrow</a>
        <table>
            <thead>
            <tr>
                <th>Id</th>
                <th>Book Id</th>
                <th>Reader Id</th>
                <th>Borrow Date</th>
                <th>Return Date</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach($borrows as $borrow)
                <tr>
                    <td>{{$borrow->id}}</td>
                    <td>{{$borrow->book_id}}</td>
                    <td>{{$borrow->reader_id}}</td>
                    <td>{{$borrow->borrow_date}}</td>
                    <td>{{$borrow->return_date}}</td>
                    <td>{{$borrow->status ? "Đã trả" : "Chưa trả"}}</td>
                    <td><a href="{{route('borrows.show', $borrow->id)}}" class="btn btn-info">Xem</a></td>
                    <td><a href="{{route('borrows.edit', $borrow->id)}}" class="btn btn-warning">Edit</a></td>
                    <td>
                        <form action="{{route('borrows.destroy', $borrow->id)}}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xoá ?')">Xoá</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $borrows->links('pagination::bootstrap-4') }}  <p>Showing page {{ $borrows->currentPage() }} of {{ $borrows->lastPage() }}</p>  </div>
@endsection
