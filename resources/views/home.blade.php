<html>
<head>
    <title>{{ trans('home.title') }}</title>


    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">{{ trans('home.navbar') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">{{ trans('home.home') }}<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ trans('home.link') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ trans('home.dropdown') }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">{{ trans('home.action') }}</a>
                        <a class="dropdown-item" href="#">{{ trans('home.another') }}</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">{{ trans('home.else') }}</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">{{ trans('home.disable') }}</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="{{ trans('home.hold') }}" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">{{ trans('home.search') }}</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <div class="content">
            <div class="title">{{ trans('home.head') }}</div>
            <div class="quote">{{ trans('home.quote') }}</div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
