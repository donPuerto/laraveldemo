@extends('app')

@section('title') Articles @endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="jumbotron">
                <h1>Article</h1>
            </div>

            {{--@include('partials.flash')--}}
            @include('flash::message')

            @foreach ($articles as $article)
                <a href="{{ url('/articles', $article->id) }}"><h2>{{ $article->title }}</h2></a>
                <p>{{ $article->body }}</p>

            @endforeach


        </div>
    </div>


@endsection