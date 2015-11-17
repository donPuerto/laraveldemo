@extends('app')

@section('title') Create Article @endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="jumbotron">
                <h1>Write a new Article</h1>
            </div>
        </div>


        {{--Bootstrap Vertical Form (default)--}}
        <div class="row">
            @include('errors.validationerror')
            {!! Form::open(array('url' => 'articles', 'role' => 'form')) !!}
                @include('partials.formarticles',['submitbutton' => 'Create Article'])

            {!! Form::close() !!}


        </div>


    </div>


@endsection