@extends('layouts.main')
@section('banner')
@include('partials.welcome.banner')
@include('partials.welcome.dns')
@endsection
@section('content')
@include('partials.welcome.service')
{{-- @include('partials.welcome.pricing') --}}
{{-- @include('partials.welcome.testimorials') --}}
@include('partials.welcome.partners')
@include('partials.welcome.blog')
@include('partials.welcome.faq')
@include('partials.welcome.call_center')
@endsection