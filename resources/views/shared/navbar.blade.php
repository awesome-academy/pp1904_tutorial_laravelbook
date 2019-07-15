<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">{{ trans('navbar.larabook') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">{{ trans('navbar.home') }}<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/blog">{{ trans('navbar.blog') }}</a>
                <a class="nav-link" href="/about">{{ trans('navbar.about') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">{{ trans('navbar.contact') }}</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ trans('navbar.member') }}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    @if (Auth::check())
                    @role('manager')
                    <a class="dropdown-item" href="/admin">{{ trans('navbar.admin') }}</a>
                    @endrole
                    <a class="dropdown-item" href="/users/logout">{{ trans('navbar.logout') }}</a>
                    @else
                    <a class="dropdown-item" href="/users/register">{{ trans('navbar.register') }}</a>
                    <a class="dropdown-item" href="/users/login">{{ trans('navbar.login') }}</a>
                    @endif
                </div>
            </li>
        </ul>
    </div>
</nav>
