@extends('admin.master')
@section('title')
    Tạo tin tức
@endsection
@section('custom_css')
    <style>
        .button_outer {
            background: #00c6d7;
            text-align: center;
            height: 40px;
            width: 140px;
            border-radius: 4px;
            display: inline-block;
            transition: .2s;
            position: relative;
            overflow: hidden;
        }

        .button_outer:hover {
            background-color: #17a2b8;
        }

        .btn_upload {
            width: 100%;
            color: #fff;
            font-size: 15px;
            text-align: center;
            position: relative;
            display: inline-block;
            overflow: hidden;
            z-index: 3;
            white-space: nowrap;
        }

        .btn_upload input {
            position: absolute;
            width: 100%;
            left: 0;
            top: 0;
            height: 100%;
            cursor: pointer;
        }

        .uploaded_file_view {
            transition: .2s;
            display: none;
        }

        .uploaded_file_view.show {
            display: block; !important;
        }

        .btn_choose_images {
            width: 100%;
            height: 100%;
            border: none;
            background: none;
            padding: 9px;
            color: #fff;
            font-size: 15px;
        }

        .img-products {
            height: 140px;
            width: 140px;
            object-fit: cover;
            margin-right: 10px;
            margin-bottom: 10px;
        }
    </style>
@endsection
@section('content')
    <div class="row main-card mb-3 card">
        <div class="container">
            <div class="card-body mb-2"><h2 class="mb-2">
                    Sửa phản hồi
                </h2>
                @if(session('status'))
                    <div class="alert alert-success mb-1 mt-1">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="" method="POST">
                    @if($data)
                        @method('PUT')
                    @endif
                    @csrf
                    <div class="position-relative row form-group">
                        <label class="col-sm-1 col-form-label">Tên</label>
                        <div class="col-sm-5">
                            <input name="name" value="{{$data ? $data->name : ''}}" type="text"
                                   class="form-control form-control" placeholder="Nhập tên">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label class="col-sm-1">Hiển thị</label>
                        <div class="col-sm-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="show" id="inlineRadio1" value="1" {{$data && $data->show == 1 ? 'checked' : ''}}>
                                <label class="form-check-label" for="inlineRadio1" >Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="show" id="inlineRadio2" value="0" {{$data && $data->show == 0 ? 'checked' : ''}} {{!$data ? 'checked' : ''}}>
                                <label class="form-check-label" for="inlineRadio2">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label class="col-sm-1 col-form-label">Quốc gia</label>
                        <div class="col-sm-3">
                            <input name="country" value="{{$data ? $data->country : ''}}" type="text"
                                   class="form-control form-control" placeholder="Nhập quốc gia">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label class="col-sm-2 col-form-label">Nội dung bài viết</label>
                        <div class="col-sm-12">
                            <textarea name="message" type="text" class="form-control"
                                      placeholder="Nhập nội dung"
                                      rows="3">{{$data ? $data->message : ''}}</textarea>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label class="col-sm-1 col-form-label"></label>
                        <div class="col-sm-11 d-flex justify-content-end">
                            <button class="btn btn-primary">Gửi</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection