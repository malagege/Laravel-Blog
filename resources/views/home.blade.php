@extends('layout.main')

@section('main')
<div class="container">
@foreach ($posts as $post)
<div class="row">
    <div class="col">
        <div class="card mb-3">
        {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->context }}</p>
            <a href="#" class="btn btn-primary">閱讀更多</a>
        </div>
        </div>
    </div>
</div>
@endforeach    
</div>
@endsection
