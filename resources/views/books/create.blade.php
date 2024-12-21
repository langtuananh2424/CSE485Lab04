<<<<<<< HEAD
@extends('App.app')

@section('content')
    <h1>Thêm sách mới</h1>

    <form method="POST" action="{{ route('books.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Tên sách</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
@endsection
=======
<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->
</div>
>>>>>>> origin/main
