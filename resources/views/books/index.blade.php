
@extends('App.app')
@section('content')
    <div class="container">
        <h1>Danh sách Books</h1>
        <a href="{{route('books.create')}}" class="btn btn-primary">Add Book</a>
        <table>
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Author</th>
                <th>Category</th>
                <th>Year</th>
                <th>Quantity</th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->name}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->category}}</td>
                    <td>{{$book->year}}</td>
                    <td>{{$book->quantity}}</td>
                    <td><a href="{{route('books.show', $book->id)}}" class="btn btn-info">Xem</a></td>
                    <td><a href="{{route('books.edit', $book->id)}}" class="btn btn-warning">Edit</a></td>
                    <td>
                        <form action="{{route('books.destroy', $book->id)}}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xoá ?')">Xoá</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$books -> links('pagination::bootstrap-4')}}  
@endsection
</div>    
