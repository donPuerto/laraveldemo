@extends('app')

@section('title') Show Article @endsection

@section('content')

    <div class="container">
        <div class="row">
            <h1>Show Article</h1>
            <hr>

            <h2>{{ $article->title }}</h2>
            <p>{{ $article->body }}</p>
            <p>{{ $article->published_at }}</p>


        </div>
    </div>


@endsection