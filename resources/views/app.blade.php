<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>@yield('headtitle', 'Главная') / Online</title>
        <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        {{ HTML::style('assets/css/common.css') }}
    </head>
    <body>
        <div class="container">
            {!! Breadcrumbs::renderIfExists() !!}
            <div class="content">
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                            @foreach ( $errors->all() as $error )
                                    <p>{{ $error }}</p>
                            @endforeach
                    </div>
                @endif
                
                <h1>@yield('pagetitle')</h1>
                @yield('content')
            </div>
        </div>
    </body>
</html>
