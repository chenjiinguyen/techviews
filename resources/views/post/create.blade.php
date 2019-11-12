@extends('layouts.app')

@section('pageTitle', $pageTitle)

@push("head")
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/laravel-admin-ext/simditor/simditor-2.3.25/styles/simditor.css') }}" />
@endpush

@push("js")
<script type="text/javascript" src="{{ asset('vendor/laravel-admin-ext/simditor/simditor-2.3.25/scripts/dompurify.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/laravel-admin-ext/simditor/simditor-2.3.25/scripts/module.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/laravel-admin-ext/simditor/simditor-2.3.25/scripts/hotkeys.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/laravel-admin-ext/simditor/simditor-2.3.25/scripts/uploader.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/laravel-admin-ext/simditor/simditor-2.3.25/scripts/simditor.js') }}"></script>

<script>
var editor = new Simditor({
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
        <form action="post">
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
                            <textarea id="editor" autofocus></textarea>
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
                    <div class="custom-control custom-checkbox mb-3">
                            <input class="custom-control-input" id="ingroup" type="checkbox" >
                            <label class="custom-control-label" for="ingroup">Khóa Thành Viên</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-3">
                            <input class="custom-control-input" id="reaction" type="checkbox" >
                            <label class="custom-control-label" for="reaction">Khóa Tương Tác</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-3">
                            <input class="custom-control-input" id="comment" type="checkbox" >
                            <label class="custom-control-label" for="comment">Khóa Bình Luận</label>
                    </div>
                    <div class="form-group">
                            <input type="text" placeholder="Nhập mật khẩu..."  class="form-control" >
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


