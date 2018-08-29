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
    {{ Html::style('css/fe_p_index.css') }}
@stop
@section('slider')
    @include('frontend.common.banner-title')
@stop
@section('container')
@include('frontend.project.p_1')
@stop

@section('jv-scripts')

@stop