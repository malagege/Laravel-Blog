@extends('layout.main')

@section('main')
    <div class="container">
        <h1 class="text-center">Archive</h1>
        <hr>
@foreach ($group_posts as $key => $group_post)
<dl>
　<dt>{{ $key }}</dt>
@foreach($group_post as $post)
　<dd>{{ $post->title }}</dd>
@endforeach
</dl>
@endforeach
    </div>
@endsection

@section('title','Tag')