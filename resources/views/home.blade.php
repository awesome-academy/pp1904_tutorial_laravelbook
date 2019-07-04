@extends('master')
@section('title', trans('blog.menu_home.title'))
@section('content')
    <div class="container">
        <div class="row banner">
            <div class="col-md-12">

                <h1 class="text-center mt-5 editContent">
                    {{ trans('blog.menu_home.textmain') }}
                </h1>

                <h3 class="text-center mt-2 editContent">{{ trans('blog.menu_home.text1') }}</h3>

                <div class="text-center">
                    <img src="https://learninglaravel.net/img/LearningLaravel5_cover0.png" width="302" height="391" alt="">
                </div>

            </div>
        </div>
    </div>
@endsection
