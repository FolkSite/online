@extends('app')

@section('pagetitle', 'Редактируем &laquo;'.$item->name.'&raquo;')
 
@section('content')
    {!! Form::model($item, ['method' => 'PATCH', 'route' => ['boards.types.update', $item->id]]) !!}
        @include('boards/types/partials/_form', ['submit_text' => 'Save'])
    {!! Form::close() !!}
@endsection