@extends('layouts.App')
@section('content')
    <form method="POST" action="{{route('books.store')}}" class="container">
        @csrf
        <div class="mb-3">
            <label for="bookname" class="form-label">Tên Sách</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="bookauthor" class="form-label">Tác Giả</label>
            <input type="text" name="author" id="author" class="form-control">
        </div>
        <div class="mb-3">
            <label for="bookcategory" class="form-label">Thể Loại</label>
            <select name="category" id="category" class="form-control">
                <option value="Khoa học viễn tưởng">Khoa học viễn tưởng</option>
                <option value="Lịch sử">Lịch sử</option>
                <option value="Tiểu thuyết">Tiểu thuyết</option>
                <option value="Kinh doanh">Kinh doanh</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Năm Phát Hành</label>
            <input type="text" name="year" id="year" class="form-control">
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Chất Lượng</label>
            <input type="text" name="quantity" id="quantity" class="form-control" placeholder="1-10">
        </div>
        <button type="submit" class="btn btn-primary"> Thêm Sách</button>
    </form>
@endsection
