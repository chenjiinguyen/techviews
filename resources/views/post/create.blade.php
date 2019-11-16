@extends('layouts.app')

@section('pageTitle', $pageTitle)

@push("head")
<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
@endpush

@push("js")
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>

<script>
var editor = new SimpleMDE({
    textarea: $('#editor')
    //optional options
  });
</script>
@endpush
@section('content')
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 300px; background-image: url('https://c.wallhere.com/photos/b9/0d/trees_forest_Tatra_Mountains_Tatra_Slovakia_mist_pine_trees-1383935.jpg!d'); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->

    </div>

    <div class="container-fluid mt--7">
        <form action="{{ route('create.post') }}" method="POST" >
            {{ csrf_field() }}
            <div class="row">
                <div class="col-xl-9">
                    <div class="card bg-secondary shadow">
                        <div class="card-header bg-white border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                <h3 class="mb-0">Đăng Nội Dung Ẩn</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <textarea id="editor" name="text" autofocus></textarea>
                        </div>
                    </div>
                </div>
            <div class="col-xl-3 mb-5 mb-xl-0">
                <div class="card">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                        <h3 class="mb-0">Điều Kiện Mở Khóa</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0 pt-md-4">
                    <div class="form-group">
                            <label class="form-group" for="title">Tiêu Đề</label>
                            <input type="text" name="title" placeholder="Tiêu Đề..."  class="form-control" >
                    </div>
                    <div class="border-top my-3"></div>
                    <div class="custom-control custom-checkbox mb-3">
                            <input class="custom-control-input" id="ingroup" name="ingroup" type="checkbox" >
                            <label class="custom-control-label" for="ingroup">Khóa Thành Viên</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-3">
                            <input class="custom-control-input" id="reaction" name="reaction" type="checkbox" >
                            <label class="custom-control-label"  for="reaction">Khóa Tương Tác</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-3">
                            <input class="custom-control-input" id="comment" name="comment" type="checkbox" >
                            <label class="custom-control-label" for="comment">Khóa Bình Luận</label>
                    </div>
                    <div class="form-group">
                            <input type="text" name="password" placeholder="Nhập mật khẩu..."  class="form-control" >
                    </div>
                    <button class="btn btn-icon btn-block btn-danger">
                        <span class="btn-inner--icon"><i class="fas fa-plus-square"></i></span>
                        <span class="btn-inner--text">Đăng Bài Viết</span>
                    </button>
                </div>
                </div>
            </div>

            </div>
        </form>

      </div>

@endsection


