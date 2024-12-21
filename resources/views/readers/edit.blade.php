<<<<<<< HEAD
@extends('App.app')

@section('content')
    <h1>Sửa thông tin độc giả</h1>

    <form method="POST" action="{{ route('readers.update', $reader->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Họ tên</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $reader->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
@endsection
=======
<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
</div>
>>>>>>> origin/main
