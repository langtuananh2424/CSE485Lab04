<<<<<<< HEAD
@extends('App.app')

@section('content')
    <h1>Thêm độc giả mới</h1>

    <form method="POST" action="{{ route('readers.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Họ tên</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
@endsection
=======
<div>
    <!-- An unexamined life is not worth living. - Socrates -->
</div>
>>>>>>> origin/main
