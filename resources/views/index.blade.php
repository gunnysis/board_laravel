@extends('layout')

@section('content')
<h2 class="mt-4 mb-3">Product List</h2>

<a href="{{route("store")}}">
    <button type="button" class="btn btn-dark" style="float: right;">글 작성</button>
</a>


<table class="table table-striped table-hover">
    <colgroup>
        <col width="15%"/>
        <col width="15%"/>
        <col width="10%"/>
        <col width="50%"/>
        <col width="15%"/>
        <col width="15%"/>
    </colgroup>
    <thead>
    <tr>
        <th scope="col">Number</th>
        <th scope="col">Name</th>
        <th scope="col">Title</th>
        <th scope="col">content</th>
        <th scope="col">Created at</th>
        <th scope="col">Updated at</th>
    </tr>
    </thead>
    <tbody>
    {{-- blade 에서는 아래 방식으로 반복문을 처리합니다. --}}
    {{-- Product Controller의 index에서 넘긴 $products(product 데이터 리스트)를 출력해줍니다. --}}
    @foreach ($boards as $board)
        <tr>
            <th scope="row">{{ $board->id }}</th>
            <td>{{$board->name}}</td>
            <td>{{$board->title}}</td>
            <td>{{ $board->content }}</td>
            <td>{{$board->created_at}}</td>
            <td>{{ $board->updated_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

{{-- 라라벨 기본 지원 페이지네이션 --}}
{{ $boards->links() }}
@endsection
