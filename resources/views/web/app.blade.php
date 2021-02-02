@extends('layouts.app')

@push('stylesheet')
    <link rel="stylesheet" href="css/style-web.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
@endpush

@section('content')
    @if (Request::is('/'))
        @include('web.includes.header')
    @else
        @include('web.includes.header2')
    @endif
        @yield('page')
    @include('web.includes.footer')
@endsection