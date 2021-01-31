@extends('layouts.app')

@section('content')
    @include('web.includes.nav')
    @include('web.includes.header')
        @yield('page')
    @include('web.includes.footer')
@endsection