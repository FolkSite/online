@extends('app')

@section('pagetitle', 'Новый тип')
 
@section('content')
    {!! Form::model(new App\BoardsType, ['route' => ['boards.types.store']]) !!}
        @include('boards/types/partials/_form', ['submit_text' => 'Create'])
    {!! Form::close() !!}
@endsection