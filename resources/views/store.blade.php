@extends('layout')

@section('content')

<h2 class="mt-4 mb-3">Product Create</h2>


<form action="store2" method="post">
    {{-- 라라벨은 CSRF로 부터 보호하기 위해 데이터를 등록할 때의 위조를 체크 하기 위해 아래 코드가 필수 --}}
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control w-25" id="name" autocomplete="off">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="title" autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea rows="10" cols="40" name="content" class="form-control" id="content" autocomplete="off"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
