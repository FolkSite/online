<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, array('required'=> '', 'class'=>'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, array('min'=>0, 'step'=>10, 'required'=>'', 'class'=>'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('export_prefix', 'Prefix:') !!}
    {!! Form::text('export_prefix', null, array('required'=> '', 'class'=>'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('css_class_name', 'CSS:') !!}
    {!! Form::text('css_class_name', null, array('required'=> '', 'class'=>'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn btn-primary']) !!}
    <a href="{{ route('boards.types.index') }}" class="btn btn-default">Cancel</a>
</div>
