@extends('app')

@section('title') Edit Article @endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="jumbotron">
                <h1>Edit: {!! $article->title !!}</h1>
            </div>
        </div>


        {{--Bootstrap Vertical Form (default)--}}
        <div class="row">
            @include('errors.validationerror')
            {!! Form::model($article,array('method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id], 'role' => 'form')) !!}
                @include('partials.formarticles',['submitbutton' => 'Update Article'])

            {!! Form::close() !!}
        </div>
    </div>

@endsection