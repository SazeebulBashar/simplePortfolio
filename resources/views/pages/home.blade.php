@extends('layouts.master')

@section('title')
    Home Page
@endsection

@section('content')
    @include('components.header')
    @include('components.about')
    @include('components.skills')
    @include('components.contact')


@endsection