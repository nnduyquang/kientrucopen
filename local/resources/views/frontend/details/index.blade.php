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
    {{ Html::style('css/fe_d_index.css') }}
@stop
@section('slider')
    @include('frontend.details.banner-title')

@stop
@section('container')
    @include('frontend.details.d_1')
    @include('frontend.common.partner')
@stop

@section('jv-scripts')
    {{ Html::script('js/fe.common.partner.js') }}
    {{ Html::script('js/fe.details.js') }}



@stop