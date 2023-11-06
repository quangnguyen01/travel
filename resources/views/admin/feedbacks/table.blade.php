@extends('admin.master')
@section('title')
    Admin | Phản hồi
@endsection
@section('content')
    <div class="row main-card mb-3 card">
        <div class="container">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <h2 class="">Danh sách phản hồi</h2>
                    </div>
                </div>
                @if ($message = \Illuminate\Support\Facades\Session::get('success'))
                    <div class="alert alert-success">
                        <p class="m-0">{{ $message }}</p>
                    </div>
                @endif
                <table class="mb-0 table table-bordered">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th style="width:10%">Thông tin</th>
                        <th>Phản hồi</th>
                        <th>Hiển thị</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($feedbacks as $data)
                        <tr>
                            <td class="text-center">{{$data->id}}</td>
                            <td>{{$data->name}} - {{$data->country}}</td>
                            <td>{{$data->message}}</td>
                            <td>{{$data->show}}</td>
                            <td>
                                <a class="btn btn-primary mr-2" href="{{route('editFeedback', $data->id)}}"><i
                                        class="fas fa-edit"></i></a>
                                <a type="submit" href="{{route('deleteFeedback', $data->id)}}"
                                   class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xoá ?')">
                                    <i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                <div class="row justify-content-end mt-3">
                    <div class="col-4">
                        @include('admin.components.pagination',['list' => $feedbacks])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom_js')
    <script>
        let submit = false
        $('#search').click(function () {
            if (submit) {
                $('#filterForm').submit()
            } else {
                submit = true
            }
        })
        $('#sort').change(function () {
            $('#filterForm').submit()
        })

    </script>
@endsection
