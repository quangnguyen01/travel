@extends('clients.master')
@section('css')@yield('page_css')@endsection
@section('banner')
<div class="container-fluid bg-primary py-5 mb-5 hero-header" style="background: linear-gradient(rgba(20, 20, 31, .7), rgba(20, 20, 31, .7)), @yield('page_img');background-position: center center;background-repeat: no-repeat;background-size: cover;">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
            <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">@yield('page_title')</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Trang chủ</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">@yield('page_title')</li>
                            </ol>
                        </nav>
                    </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
@yield('page_content')
@endsection
