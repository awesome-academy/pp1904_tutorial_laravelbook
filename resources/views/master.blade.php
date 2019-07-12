<html>
<head>
    <title> @yield('title') </title>
    <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
</head>
<body>
    @include('shared.navbar')

    @yield('content')

  	<script src="{!! asset('js/jquery-3.4.1.min.js') !!}"></script>
	<script src="{!! asset('js/popper.min.js') !!}"></script>
	<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
</body>
</html>

