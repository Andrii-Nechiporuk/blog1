@extends('layouts.main')

@section('content')
    <div class="blog-post">
        @if ($item->exists)
            <h1 class="font-weight-bold text-center">{{$item->title }}</h1>
            <h3 class="text-center font-italic">{{$item->excerpt}}</h3>
            <p class="mt-4 mb-1">{{$item->content_raw}}</p>
            <p class="font-weight-light text-secondary ">{{$item->published_at}}</p>
        @endif
    </div>
@endsection
