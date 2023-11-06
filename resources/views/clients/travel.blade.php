@extends('clients.page')
@section('page_img')url(https://azlocaltrip.com/wp-content/uploads/2019/11/tam-bac-lake-hai-phong.jpg)@endsection
@section('page_title')Du lịch @endsection
@section('page_content')
    <!-- About Start -->
    <div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6 d-flex align-items-center" style="background: #f6f6f9">
                    <div class="p-5">
                        <h1 class=" mb-4">Đồ Sơn</h1>
                        <p class=" mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="team-item" style="height: 100%">
                       <div class="overflow-hidden">
                       <img class="img-fluid" style="width: 100%; height:100%; object-fit:cover" src="https://senviettravel.com/wp-content/uploads/2022/06/Kinh-nghiem-du-lich-Do-Son-nen-o-khach-san-resort-nao.jpg" alt="">  
                       </div>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="team-item" style="height: 100%">
                       <div class="overflow-hidden">
                       <img class="img-fluid" style="width: 100%; height:100%; object-fit:cover" src="https://flamingoresortcatba.com/wp-content/uploads/2021/10/Background-scaled-2.jpg" alt="">  
                       </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center" style="background: #f6f6f9">
                    <div class="p-5">
                        <h1 class=" mb-4">Cát Bà</h1>
                        <p class=" mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-md-6 d-flex align-items-center" style="background: #f6f6f9">
                    <div class="p-5">
                        <h1 class=" mb-4">Vịnh Lan Hạ</h1>
                        <p class=" mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="team-item" style="height: 100%">
                       <div class="overflow-hidden">
                       <img class="img-fluid" style="width: 100%; height:100%; object-fit:cover" src="https://vj-prod-website-cms.s3.ap-southeast-1.amazonaws.com/shutterstock1057030175huge-1669090477974.jpg" alt="">  
                       </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- About End -->

         <!-- Package Start -->
         <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Du lịch</h6>
                <h1 class="mb-5">Bài viết về du lịch</h1>
            </div>
            <div class="row g-4 justify-content-center mb-5">
                @foreach($article as $item)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <a href="{{route('detail', $item->id)}}">
                                <img class="img-fluid" src="{{$item->images}}" alt="" style="height: 300px; object-fit: cover">
                                </a>
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-map-marker-alt text-primary me-2"></i>{{$item->type_id}}</small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-calendar-alt text-primary me-2"></i>{{date_format($item->created_at, 'd M Y')}}</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>{{$item->author}}</small>
                            </div>
                            <div class="text-center p-4">
                                <p>{{$item->title}}</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="{{route('detail', $item->id)}}" class="btn btn-sm btn-primary px-3" style="border-radius: 30px;">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
@endsection