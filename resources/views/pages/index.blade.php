@extends('layout.master')

@section('content')
    <!-- Slider -->
    <header class="header slider-fade">
       
        @include('partials.index.carousel')
        
        <!-- Left Panel -->
        <div class="left-panel">
            <div class="left-txt">
                {{-- <a href="#" target="_blank">Behance</a> <span>-</span> --}}
                <a href="https://www.facebook.com/WeAreGroup226/" target="_blank">Facebook</a> <span>-</span>
                {{-- <a href="#" target="_blank">Twitter</a> <span>-</span> --}}
                {{-- <a href="#" target="_blank">Instagram</a> --}}
            </div>
        </div>
    </header>
    <!-- About Us -->
        @include('partials.index.about')
    <!-- Gallery -->
        @include('partials.index.gallery')
    <!-- Services -->
        @include('partials.index.services')
@endsection
   
