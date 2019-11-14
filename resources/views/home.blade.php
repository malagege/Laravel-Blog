@extends('layout.main')

@section('main')
<div class="container">
@for ($i = 0; $i < 10; $i++)
<div class="row">
    <div class="col">
        <div class="card mb-3">
        {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">閱讀更多</a>
        </div>
        </div>
    </div>
</div>
@endfor    
</div>
@endsection
