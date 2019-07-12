@extends('master')
@section('name', 'Login')
@section('content')

<div class="container col-md-6 col-md-offset-3">
    <div class="well well bs-component">
        <form class="form-horizontal" method="post">
            @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
            @endforeach

            {!! csrf_field() !!}
            <fieldset>
                <legend>{{ trans('login.login') }}</legend>
                <div class="form-group">
                    <label for="email" class="col-lg-12 control-label">{{ trans('login.email') }}</label>
                    <div class="col-lg-12">
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-lg-12 control-label">{{ trans('login.password') }}</label>
                        <div class="col-lg-12">
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember">{{ trans('login.remember') }}</label>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-primary">{{ trans('login.login') }}</button>
                        </div>
                    </div>
            </fieldset>
        </form>
    </div>
</div>
@endsection
