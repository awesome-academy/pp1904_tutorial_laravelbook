@extends('layouts.app')

@section('title', trans('home.home'))

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


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
    </div>
</div>
@endsection
