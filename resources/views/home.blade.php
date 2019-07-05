@extends('master')
@section('title', trans('home.home'))
@section('content')
    <div class="container">
        <div class="row banner">

            <div class="col-md-12">

                <h1 class="text-center mt-5 editContent">
                    {{ trans('home.learningLaravel5') }}
                </h1>
                
                <h3 class="text-center mt-2 editContent">{{ trans('home.buildingPracticalApplications') }}</h3>
                
                <div class="text-center">
                    <img src="https://learninglaravel.net/img/LearningLaravel5_cover0.png" width="302" height="391" alt="">
                </div>

            </div>

        </div>
    </div>
@endsection