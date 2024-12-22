@extends('layouts.App')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Thêm phiếu mượn</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('borrows.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="book_name">Tên sách</label>
                                <input type="text" class="form-control" id="book_name" name="book_name">
                            </div>
                            <div class="form-group">
                                <label for="reader_name">Tên độc giả</label>
                                <input type="text" class="form-control" id="reader_name" name="reader_name">
                            </div>
                            <div class="form-group">
                                <label for="borrow_date">Ngày mượn</label>
                                <input type="date" class="form-control" id="borrow_date" name="borrow_date">
                            </div>
                            <div class="form-group">
                                <label for="return_date">Ngày trả</label>
                                <input type="date" class="form-control" id="return_date" name="return_date">
                            </div>
                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
