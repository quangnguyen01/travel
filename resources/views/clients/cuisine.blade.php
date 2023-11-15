@extends('clients.page')
@section('page_img')url(../assets/img/amthuc1.jpg)@endsection
@section('page_title')Ẩm thực @endsection
@section('page_css')
<style>
    .img-container {
  position: relative;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background: linear-gradient(rgba(20, 20, 31, .7),  rgba(20, 20, 31, .7));
}

.img-container:hover .overlay {
  opacity: 1;
}

.text {
    width:100%;
    padding: 5px;
  color: white;
  font-size: 12px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
</style>
@endsection
@section('page_content')
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
                        <a href="{{route('detail', 18)}}">
                        <div class="overflow-hidden img-container">
                            <img class="img-fluid" src="https://daotaobeptruong.vn/wp-content/uploads/2020/03/banh-da-cua.jpg" alt="" style="height: 200px;object-fit:cover">
                            <div class="overlay">
                                <div class="text">Món bánh đa cua (theo truyền thống địa phương luôn sử dụng cua đồng và bánh đa đỏ) và nem cua bể (theo phong cách địa phương hay được gói kiểu hình vuông giống như chiếc bánh chưng ngày Tết) được nhiều người xem là hai món ăn có tính đại diện rõ nhất cho phong cách chế biến ẩm thực của Hải Phòng</div>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Bánh đa cua</h5>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                    <a href="{{route('detail', 17)}}">
                        <div class="overflow-hidden img-container">
                            <img class="img-fluid" src="https://cdn.tgdd.vn/Files/2021/12/24/1406445/cach-lam-che-dua-dam-ngon-chuan-vi-hai-phong-tai-nha-202112240108007211.jpg" alt="" style="height: 200px;object-fit:cover">
                            <div class="overlay">
                                <div class="text">Thành phần chủ yếu của món ăn này đó chính là những nguyên liệu từ dừa tươi như: Cùi dừa, thạch rau câu làm từ dừa, sữa dừa,… Một cốc dừa dầm thơm ngon hòa tan trong những viên đá mát lạnh sẽ giúp cho bạn cực kỳ thư giãn, làm mát cơ thể trong những ngày hè nóng bức. Bên cạnh đó, vị mát của rau câu, vị ngọt của nước cốt dừa, vị thanh từ dừa tươi sẽ mang lại cho bạn dư vị rất khó quên</div>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Dừa dầm</h5>
                        </div>
                    </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <a href="{{route('detail', 19)}}">
                        <div class="overflow-hidden img-container">
                            <img class="img-fluid" src="https://cdn.tgdd.vn/2020/12/CookProduct/1260-1200x643-42.jpg" alt="" style="height: 200px;object-fit:cover">
                            <div class="overlay">
                                <div class="text">Bánh mì cay là một loại bánh mì có xuất xứ từ Hải Phòng. Sở dĩ có hậu tố "que" vì bánh to chỉ hơn đốt ngón tay và dài hơn một gang tay. Vì có hình dáng và hương vị đặc biệt nên loại bánh này đã trở nên nổi tiếng ở vùng đất mà chúng ra đời. Hơn nữa, cộng với giá thành bình dân, món này đã trở thành loại đồ ăn khoái khẩu của nhiều lứa tuổi và tầng lớp khác nhau</div>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Bánh mỳ que</h5>
                        </div>
                    </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <a href="{{route('detail', 20)}}">
                        <div class="overflow-hidden img-container">
                            <img class="img-fluid" src="https://static.vinwonders.com/production/bun-ca-cay-hai-phong-o-ha-noi-12.jpg" alt="" style="height: 200px;object-fit:cover">
                            <div class="overlay">
                                <div class="text">Sự hấp dẫn của bún cá cay đối với du khách du lịch Hải Phòng đến từ việc tuyển chọn nguyên liệu khắt khe: cá thu làm chả viên, cá trắm đồng chiên giòn... Bên cạnh đó, món ăn này còn thu hút thực khách bởi hương vị nước dùng ngọt thanh, đậm đà được ninh nhừ từ đầu cá, xương cá và xương heo.</div>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Bún cá cay</h5>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

       <!-- Package Start -->
       <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Ẩm thực</h6>
                <h1 class="mb-5">Bài viết về ẩm thực</h1>
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
        </div>  
        </div>
@endsection

