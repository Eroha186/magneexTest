@extends('master')

@php
    $title = 'Главная'
@endphp

@section('content')
    @include('blocks.filter')

    @include('blocks.news')

    @include('blocks.about-company')

    @include('popups.popup-feedback')
@endsection
