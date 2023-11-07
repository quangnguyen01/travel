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
                        <p class=" mb-4"> Đồ Sơn là khu nghỉ mát và tắm biển nổi tiếng ở miền Bắc. Đồ Sơn là một bán đảo nhỏ do dãy núi Rồng vươn dài ra biển, với hàng chục mỏm cao tù 25 đến 130m, nơi đây có bãi cát mịn, bên bờ biển rợp bóng phi lao. Về phía tây và tây bắc, quận Đồ Sơn tiếp giáp với huyện Kiến Thụy, các hướng còn lại tiếp giáp với biển Đông. Do ở phía bắc và phía nam của quận là hai cửa sông Lạch Tray và Văn Úc thuộc hệ thống sông Thái Bình đổ ra biển đem theo nhiều phù sa ,cộng thêm việc quai đê lấn biển ở Đảo Hòn Dáu để xây dựng khu Resort cao cấp,nên nước biển ở khu vực này (nhất là khu II) đục nhưng vẫn có sức thu hút du khách. </p>
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
                        <p class=" mb-4">Đảo Cát Bà là tấm thảm xanh khổng lồ chứa đựng nhiều bí ẩn, hấp dẫn. Cát Bà xứng đáng là khu dự trữ sinh quyển thứ 3 Việt Nam, hiện đã được UNESCO công nhận là Khu dự trữ sinh quyển thế giới. Tổng diện tích khu dự trữ sinh quyển Cát Bà rộng hơn 26.000 ha, với 2 vùng lõi (bảo tồn nghiêm ngặt và không có tác động của con người), 2 vùng đệm (cho phép phát triển kinh tế hạn chế song kết hợp với bảo tồn) và 2 vùng chuyển tiếp (phát triển kinh tế). Khu dự trữ sinh quyển Cát Bà là vùng hội tụ đầy đủ cả rừng mưa nhiệt đới trên đảo đá vôi, rừng ngập mặn, các rạn san hô, thảm rong và đặc biệt là hệ thống hang động. Cát Bà còn có di chỉ Cái Bèo thuộc nền văn hóa Hạ Long, dân cư đã sinh sống cách đây 6475 – 4200 năm.</p>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-md-6 d-flex align-items-center" style="background: #f6f6f9">
                    <div class="p-5">
                        <h1 class=" mb-4">Vịnh Lan Hạ</h1>
                        <p class=" mb-4"> Vịnh Lan Hạ Cát Bà có diện tích hơn 7000m2 với rất nhiều những hòn đảo lớn nhỏ, nằm về phía Đông của đảo Cát Bà và phía Nam của vịnh Hạ Long. Với vẻ đẹp hoang sơ, sinh động của những bãi tắm chưa được khai thác nhiều, vịnh Lan Hạ đang là điểm đến hấp dẫn các tín đồ du lịch. Ghé thăm vịnh Lan Hạ, du khách sẽ được tham gia các hoạt động vui chơi trên biển, khám phá cuộc sống của các làng chài nơi đây.

</p>
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