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
@stop
@section('slider')
    @include('frontend.common.slider')

@stop
@section('container')
    @include('frontend.home.h_1')
    @include('frontend.home.h_2')
    @include('frontend.home.h_3')
    @include('frontend.home.h_5')
    @include('frontend.home.h_6')
    @include('frontend.common.partner')
@stop

@section('jv-scripts')
    {{ Html::script('js/fe.h.index.js') }}
    {{ Html::script('js/fe.common.partner.js') }}
@stop