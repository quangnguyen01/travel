@extends('clients.page')
@section('page_img')url(https://azlocaltrip.com/wp-content/uploads/2019/11/tam-bac-lake-hai-phong.jpg)@endsection
@section('page_title') Chi tiết @endsection
@section('page_content')
    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="wow fadeInUp mb-5" data-wow-delay="0.1s">
                <h1>{{$article->title}}</h1>
                <p>{{$article->author}} - {{date_format($article->created_at, 'd M Y')}}</p>
            </div>
            <div class="row g-4 justify-content-center">
                    {!! html_entity_decode($article->content) !!}
            </div>
        </div>
    </div>
    <!-- Package End -->
@endsection
