@extends('app')

@section('headtitle', 'Типы объявлений / Частные объявления')
@section('pagetitle', 'Типы объявлений')
@section('breadcrumbs') {!! Breadcrumbs::render('boards.types') !!} @stop

@section('content')
    @if ( !$boards->count() )
        You have no projects
    @else
        <ul>
            @foreach( $boards as $board )
            <li>
                <a href="{{ route('boards.show', $board->id) }}">{{ $board->text }}</a>
                {!! link_to_route('boards.edit', 'Edit', array($board->id), array('class' => 'btn btn-info')) !!},
                {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('boards.destroy', $board->id))) !!}
                    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                {!! Form::close() !!}
            </li>
            @endforeach
        </ul>
    @endif
    {!! link_to_route('boards.create', 'Create') !!}
@endsection