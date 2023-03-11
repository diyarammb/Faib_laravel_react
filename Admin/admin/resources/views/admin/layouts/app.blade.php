@extends('admin.layouts.master')

@section('content')
    
        @include('admin.partials.header')
        @include('admin.partials.sidebar')

       

                @yield('panel')


            

@endsection
