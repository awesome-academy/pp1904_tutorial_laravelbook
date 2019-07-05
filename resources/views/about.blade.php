@extends('master')
@section('title', trans('blog.menu_about.title'))

@section('content')
    <div class="container">
        <div class="content">
            <div class="title">{{ trans('blog.menu_about.textmain') }}</div>
            <div class="quote">{{ trans('blog.menu_about.text1') }}</div>
        </div>
    </div>
@endsection
