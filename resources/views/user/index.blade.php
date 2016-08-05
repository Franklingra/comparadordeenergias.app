@extends('layouts.dashboard_layout')
    @section('title')
    | usuarios
    @endsection
    @section('content')
        <h3>Lista de usuario</h3>
        @include('user.partials._list')
    @endsection
    @yield('scripts')