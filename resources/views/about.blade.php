@extends('master')
@section('title', 'About')

@section('content')
    <div class="container">
        <div class="content">
            <div class="title">{{ trans('about.title') }}</div>
            <div class="quote">{{ trans('about.quote') }}</div>
        </div>
    </div>
@endsection

