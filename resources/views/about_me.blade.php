@extends('layout.main')

@section('main')
    <div class="container">
        <h1 class="text-center"> About Me</h1>
        <hr>
        <div class="row" style="min-height:500px">
            <div class="col-12 col-md-4 d-flex flex-column justify-content-center align-items-center">
                <img class="rounded-circle" src="{{ $user->img_path ?? 'https://fakeimg.pl/250/'}}">
                <div>{{ $user->name }}</div>
            </div>
            <div class="col-12 col-md-8">
                {{ $user->about_me }}
            </div>
        </div>
    </div>
@endsection

@section('title','Tag')