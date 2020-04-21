@extends('master')

@section('content')
    @include('main.blocks.filter')

    @include('main.blocks.news')

    @include('main.blocks.about-company')

    @include('popups.popup-feedback')
@endsection
