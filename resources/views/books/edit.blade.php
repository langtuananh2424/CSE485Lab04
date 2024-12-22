@extends('layouts.App')
@section('content')
    <form method="POST" action="{{route('books.update',$book->id)}}" class="container">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="bookname" class="form-label">Tên Sách</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$book->name}}">
        </div>
        <div class="mb-3">
            <label for="bookauthor" class="form-label">Tác Giả</label>
            <input type="text" name="author" id="author" class="form-control" value="{{$book->author}}">
        </div>
        <div class="mb-3">
            <label for="bookcategory" class="form-label">Thể Loại</label>
            <select name="category" id="category" class="form-control">
                <option value="{{$book->category}}">{{$book->category}}</option>
                @foreach($categories as $category)
                    <option value="{{$category->name}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Năm Phát Hành</label>
            <input type="text" name="year" id="year" class="form-control" value="{{$book->year}}">
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Chất Lượng</label>
            <input type="text" name="quantity" id="quantity" class="form-control" placeholder="1-10" value="{{$book->quantity}}">
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
@endsection
