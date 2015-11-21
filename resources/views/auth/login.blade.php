@extends('app')

{{-- Web site Title --}}
@section('title') Login @endsection

{{-- Content --}}
@section('content')


    <div class="container">
        <div class="row">
            <div class="page-header">
                <h2>Login</h2>
            </div>
        </div>

        <div class="row">
            {!! Form::open(array('url' => URL::to('auth/login'), 'files'=> true)) !!}

            <div class="form-group">
                {!! Form::label('email', "Email address", array('class' => 'control-label'))  !!}
                <div class="controls">
                    {!! Form::text('email', null, array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('password', "Password", array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::password('password', array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                </div>
            </div>
            <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
            </div>

            <div class="form-group">
                    <button type="submit" class="btn btn-primary" >
                        Login
                    </button>

                    <a href="{{ URL::to('/password/email') }}">Forgot Your Password?</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection