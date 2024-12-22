@extends('layouts.App')
@section('content')
    <div class="container">
        <h1>Danh sách Đọc Giả</h1>
        <a href="{{route('readers.create')}}" class="btn btn-primary">Add Reader</a>
        <table class="table table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Birthday</th>
                <th>Address</th>
                <th>Phone</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($readers as $reader)
                <tr>
                    <td>{{$reader->id}}</td>
                    <td>{{$reader->name}}</td>
                    <td>{{$reader->birthday}}</td>
                    <td>{{$reader->address}}</td>
                    <td>{{$reader->phone}}</td>
                    <td><a href="{{route('readers.show', $reader->id)}}" class="btn btn-info">Xem</a></td>
                    <td><a href="{{route('readers.edit', $reader->id)}}" class="btn btn-warning">Edit</a></td>
                    <td>
                        <form action="{{route('borrows.destroy', $reader->id)}}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xoá ?')">Xoá</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $readers->links('pagination::bootstrap-4') }}  <p>Showing page {{ $readers->currentPage() }} of {{ $readers->lastPage() }}</p>  </div>
@endsection
