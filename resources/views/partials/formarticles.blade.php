
{{--title --}}
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title',null,['class' =>'form-control']) !!}
</div>

{{--body--}}
<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body',null,['class' =>'form-control','rows' => 5,'cols'=>50]) !!}
</div>


{{--published_at--}}
<div class="form-group">
    {!! Form::label('published_at', 'Published On:') !!}
    {!! Form::date('published_at', date('Y-m-d'),['class' =>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitbutton,['class' => 'btn btn-primary form-control']) !!}

</div>