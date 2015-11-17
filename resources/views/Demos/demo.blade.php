@extends('app')

@section('title') Demo Page @endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="jumbotron">
                <h1>Demo Page</h1>
            </div>
        </div>


        {{--Bootstrap Vertical Form (default)--}}
        <div class="row">
            {!! Form::open(array('url' => 'demopage', 'role' => 'form')) !!}
                {{--published_at--}}
                <div class="form-group">
                    {!! Form::label('published_at', 'Published On:') !!}
                    {!! Form::date('published_at', date('Y-m-d'),['class' =>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Submit',['class' => 'btn btn-primary form-control']) !!}
                </div>
            {!! Form::close() !!}



        </div>
    </div>

@endsection