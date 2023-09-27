@extends('layout.app')

@section('title', 'Creating Wealth Across Africa')

@section('content')
    @include('layout.components.about')
    @include('layout.components.service')
    @include('layout.components.pricing')
    @include('layout.components.roadmap')
    @include('layout.components.team')
    @include('layout.components.testimonial')
    @include('layout.components.faq')
    @include('layout.components.blog')
    @include('layout.components.cta')
@endsection
