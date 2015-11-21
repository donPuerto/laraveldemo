@extends('app')

{{-- Web site Title --}}
@section('title') Register @endsection

{{-- Content --}}
@section('content')

    <div class="container">
        <div class="row">
            <div class="page-header">
                <h2> Register </h2>
            </div>
        </div>

        <div class="row">
            @include('errors.validationerror')
            {!! Form::open(array('url' => URL::to('auth/register'), 'method' => 'post', 'files'=> true)) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Name', array('class' => 'control-label')) !!}
                    <div class="controls">
                        {!! Form::text('name', null, array('class' => 'form-control')) !!}
                    </div>
                </div>



                <div class="form-group">
                    {!! Form::label('email',"Email Address", array('class' => 'control-label')) !!}
                    <div class="controls">
                        {!! Form::text('email', null, array('class' => 'form-control')) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('password', "Password", array('class' => 'control-label')) !!}
                    <div class="controls">
                        {!! Form::password('password', array('class' => 'form-control')) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('password_confirmation', "Confirm Password", array('class' => 'control-label')) !!}
                    <div class="controls">
                        {!! Form::password('password_confirmation', array('class' => 'form-control')) !!}
                    </div>
                </div>

                <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection