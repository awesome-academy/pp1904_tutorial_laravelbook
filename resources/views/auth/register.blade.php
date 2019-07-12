@extends('master')
@section('name', 'Register')

@section('content')
<div class="container col-md-6 col-md-offset-3">
    <div class="card mt-5">
        <div class="card-header ">
            <h5 class="float-left">{{ trans('register.register') }}</h5>
            <div class="clearfix"></div>
        </div>
        <div class="card-body">
            <form method="post">
                @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name" class="col-lg-12 control-label">{{ trans('register.name') }}</label>
                    <div class="col-lg-12">
                        <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ old('name') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-lg-12 control-label">{{ trans('register.email') }}</label>
                    <div class="col-lg-12">
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ old('email') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-lg-12 control-label">{{ trans('register.password') }}</label>
                    <div class="col-lg-12">
                        <input type="password" class="form-control"  name="password">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-lg-12 control-label">{{ trans('register.confirm') }}</label>
                    <div class="col-lg-12">
                        <input type="password" class="form-control"  name="password_confirmation">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="reset" class="btn btn-default">{{ trans('register.cancel') }}</button>
                        <button type="submit" class="btn btn-primary">{{ trans('register.submit') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection