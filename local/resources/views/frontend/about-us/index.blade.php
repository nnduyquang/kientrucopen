@extends('frontend.master')
@section('title')
    KIẾN TRÚC DECOROPEN
@stop
@section('description')
    KIẾN TRÚC DECOROPEN
@stop
@section('keyword')

@stop
@section('url-og')

@stop
@section('image-og')

@stop
@section('styles')
    {{ Html::style('css/themes/default/default.css') }}
    {{ Html::style('css/slider.css') }}
    {{ Html::style('css/fe_a_index.css') }}
@stop
@section('slider')
    @include('frontend.about-us.banner-title')

@stop
@section('container')
    @include('frontend.about-us.a_1')
    @include('frontend.about-us.a_2')
@stop

@section('jv-scripts')


@stop