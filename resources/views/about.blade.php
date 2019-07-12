@extends('master')

@section('title', trans('about.about'))

@section('content')
    <div class="container">
        <div class="content">
            <div class="title">{{ trans('about.aboutPage') }}</div>
            <div class="quote">{{ trans('about.ourAboutPage') }}</div>
        </div>
    </div>
@endsection
