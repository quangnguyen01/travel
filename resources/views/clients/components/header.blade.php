<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="{{route('home')}}" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Hải Phòng Travel</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{route('home')}}" class="nav-item nav-link {{url()->current() === route('home') ? 'active' : ''}}">Trang chủ</a>
                <a href="{{route('list')}}" class="nav-item nav-link {{url()->current() === route('list') ? 'active' : ''}}">Tin tức</a>
                <a href="{{route('about')}}" class="nav-item nav-link {{url()->current() === route('about') ? 'active' : ''}}">Giới thiệu</a>
                <a href="{{route('culture')}}" class="nav-item nav-link {{url()->current() === route('culture') ? 'active' : ''}}">Văn hóa</a>
                <a href="{{route('cuisine')}}" class="nav-item nav-link {{url()->current() === route('cuisine') ? 'active' : ''}}">Ẩm thực</a>
                <a href="{{route('travel')}}" class="nav-item nav-link {{url()->current() === route('travel') ? 'active' : ''}}">Du lịch</a>
            </div>
</nav>
