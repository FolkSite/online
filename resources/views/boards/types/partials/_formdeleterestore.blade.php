{!! Form::open(array('class' => 'form-inline pull-right', 'method' => $method, 'route' => array($route, $id))) !!}
{!! Form::submit($submit_text, array('class' => 'btn btn-default btn-sm')) !!}
{!! Form::close() !!}