@extends('app')

@section('title') Reset your password @endsection

@section('content')
    <div class="container">
        <div class="row page-header">
            <h2>Reset</h2>

        </div>
        <div class="row">

            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>
                <div class="panel-body">

                    {!! Form::open(array('url' => URL::to('password/email'), 'method' => 'post', 'files'=> true)) !!}
                        <div class="form-group  ">
                            {!! Form::label('email', "Email Address", array('class' => 'control-label')) !!}
                            <div class="controls">
                                {!! Form::text('email', null, array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Send Password Reset Link
                                </button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </div>
@endsection