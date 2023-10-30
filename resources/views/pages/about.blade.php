@extends('layout.master')

@section('content')
    <!-- Header Banner -->
        @include('partials.about.header')
    <!--  About -->
        @include('partials.about.about')
    <!-- Testimonials -->
        {{-- @include('partials.about.testimonial') --}}
    <!-- Team -->
        @include('partials.about.team')
@endsection

    