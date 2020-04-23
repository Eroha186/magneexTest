@extends('master')

@php
    $title = 'Контакты'
@endphp

@section('content')
    @include('blocks.filter', [
        'hide' => true,
    ])
    @include('contact.blocks.contacts')
    @include('contact.blocks.map')
@endsection
