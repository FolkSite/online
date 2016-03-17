@extends('app')

@section('headtitle', 'Типы объявлений / Частные объявления')
@section('pagetitle', 'Типы объявлений')
 
@section('content')

    <p><a href="{{ route('boards.types.create') }}" class="btn btn-default">Create</a></p>
 
    @if ( !$items->count() )
        Empty list
    @else
        <table class="table table-hover">
            <thead>
                <tr> 
                    <th>#</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Prefix</th>
                    <th>CSS</th>
                    <th></th>
                </tr> 
            </thead>
            <tbody>
                @foreach( $items as $i => $item )
                    <tr class="{{ isset($item->deleted_at) ? 'text-muted' : '' }}">
                        <td>{{ $i+1 }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->export_prefix }}</td>
                        <td>{{ $item->css_class_name }}</td>
                        <td class="text-right">
                            @if ( !isset($item->deleted_at) )
                                <a href="{{ route('boards.types.edit', array($item->id)) }}" class="btn btn-default btn-sm">Edit</a>&nbsp;
                                @include('boards/types/partials/_formdeleterestore', ['submit_text' => 'Delete', 'method' =>'DELETE', 'route' => 'boards.types.destroy', 'id' => $item->id])
                           @else
                                @include('boards/types/partials/_formdeleterestore', ['submit_text' => 'Restore', 'method' =>'PATCH', 'route' => 'boards.types.restore', 'id' => $item->id])
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection