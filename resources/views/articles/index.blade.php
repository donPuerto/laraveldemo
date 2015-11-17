@extends('app')

@section('title') Articles @endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="jumbotron">
                <h1>Article</h1>
            </div>

            @if(Session::has('flash_message'))
                <div class="alert alert-success">
                    {{ Session::get('flash_message') }}
                </div>
            @endif

            @foreach ($articles as $article)
                <a href="{{ url('/articles', $article->id) }}"><h2>{{ $article->title }}</h2></a>
                <p>{{ $article->body }}</p>

            @endforeach


        </div>
    </div>


@endsection