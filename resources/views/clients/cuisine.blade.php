@extends('clients.master')
@section('content')
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100"
                             src="https://go2joy.s3.ap-southeast-1.amazonaws.com/blog/wp-content/uploads/2022/05/12103118/oc-hai-phong.jpg"
                             alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Ẩm thực</h6>
                    <h1 class="mb-4">Ẩm thực <span class="text-primary">Hải Phòng</span></h1>
                    <p class="mb-4">Ẩm thực Hải Phòng là một trong những phong cách chế biến ẩm thực địa phương của Việt Nam và cụ thể hơn là của vùng đồng bằng Bắc Bộ, với nền tảng nguyên liệu là nguồn thủy hải sản vô cùng phong phú của vùng biển Hải Phòng[1] và khu vực Vịnh Bắc Bộ xung quanh cũng như một số nguyên liệu đặc sản của địa phương như nước mắm Cát Hải, bánh đa (bánh đa đỏ kiểu Hải Phòng rất phù hợp khi chế biến với các nguyên liệu thủy hải sản dù thuộc vùng nước mặn hay nước lợ như tôm, cua chẳng hạn), tương ớt (người Hải Phòng thường gọi là chí chương),... được dùng trong chế biến nhiều món ăn đặc trưng của Hải Phòng</p>
                    <p class="mb-4"></p>
                </div>
            </div>

        </div>
    </div>
    <!-- About End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Ẩm thực Hải Phòng</h6>
                <h1 class="mb-5">Các món ăn tiêu biểu</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="https://daotaobeptruong.vn/wp-content/uploads/2020/03/banh-da-cua.jpg" alt="" style="height: 200px;object-fit:cover">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Bánh đa cua</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="https://cdn.tgdd.vn/Files/2021/12/24/1406445/cach-lam-che-dua-dam-ngon-chuan-vi-hai-phong-tai-nha-202112240108007211.jpg" alt="" style="height: 200px;object-fit:cover">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Dừa dầm</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="https://cdn.tgdd.vn/2020/12/CookProduct/1260-1200x643-42.jpg" alt="" style="height: 200px;object-fit:cover">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Bánh mỳ que</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="https://static.vinwonders.com/production/bun-ca-cay-hai-phong-o-ha-noi-12.jpg" alt="" style="height: 200px;object-fit:cover">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Bún cá cay</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection