{{-- @include('includes.top') --}}
{{-- @include('includes.loader') --}}
{{-- @include('includes.header') --}}
{{-- @yield('content') --}}
{{-- @include('includes.message') --}}
{{-- @include('includes.footer') --}}
{{-- @include('includes.footerjs') --}}

@include('includes.new.top')
@include('includes.new.loader')

@if ($pages == "Home")
@include('includes.new.fronthead')
@else
@include('includes.new.header')
    
@endif


@yield('content')
@include('includes.new.message')
@include('includes.new.footer')
@include('includes.new.footerjs')