<?php header("Set-Cookie: HttpOnly;Secure;SameSite=None"); //HTTP 1.1?>

@extends('layouts.app', ['class' => 'bg-default'])
@section('pageTitle', $pageTitle)
@section('content')
    @include('layouts.headers.guest')

    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <legend>Xác nhận tài khoản dành cho thành viên trong nhóm</legend>
                        <form href="{{ __('/verify') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Mã xác nhận của bạn</label>
                                <div class="input-group mb-4">
                                    <input type="text" class="form-control" name="code" value="{{ auth()->user()->provider_id }}" readonly="">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-hashtag"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="link">Nhập liên kết tới bình luận có mã xác nhận của bạn</label>
                                <div class="input-group mb-4">
                                    <input type="url" class="form-control" id="link" id="url" name="url" placeholder="https://protect.databird.xyz/verify?comment_id=XXX"  autofocus="" required="" autocomplete="off">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-link"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                   <button type="submit" class="btn btn-success" id="submitBtn"><span class="fas fa-ok" aria-hidden="true"></span> Kích hoạt</button>
                                </div>
                            </div>
                        </form>
                        <div class="mt-3">
                            <div class="lead">Hướng dẫn</div>
                            <ol>
                                <li>Comment ID vào Bài Viết</li>
                                <li>Click chuột phải vào thời gian bình luận phía dưới và chọn Sao chép liên kết</li>
                                <li>Dán liên kết vào khung</li>
                                <li>Nhấn Kích hoạt để xác minh bạn là thành viên của Group</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <legend>{{ __('Xác Minh Tài Khoản') }}</legend>
                        </div>
                        <div>
                            <div style="width: 100%px; height: 485px; overflow-y: scroll;">
                                <div class="fb-comments" order_by="reverse_time" data-href="{{ route('verify') }}" data-width="100%" data-numposts="5"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
               <div class="text-center"><img class="img-thumbnail" src="https://i.imgur.com/LGRgfbx.gif" /></div>
            </div>
        </div>
    </div>
@endsection
