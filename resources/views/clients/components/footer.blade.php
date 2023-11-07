<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Liên hệ hỗ trợ</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Hải Phòng, Việt Nam</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3"></h4>
                <div class="row g-2 pt-2">
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="/assets/img/package-1.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="/assets/img/package-2.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="/assets/img/package-3.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="/assets/img/package-2.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="/assets/img/package-3.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="/assets/img/package-1.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Đánh giá của bạn</h4>
                <p>Hãy để lại đánh giá của bạn tại đây</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                <form action="{{route('storeFeedback')}}" method="post">
                    @csrf
                    <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your name" name="name">
                    <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your country" name="country">
                    <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your message" name="message">
                    <input type="hidden" value="0" name="show">
                    <button type="submit" class="btn btn-primary py-2 position-absolute bot-0 end-0 mt-2 me-2">Gửi</button>
                </form>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Hải Phòng</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                </div>
            </div>
        </div>
    </div>
</div>
