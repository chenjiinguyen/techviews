@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    @include('layouts.headers.guest')

    <div class="container mt--10 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-7">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <legend>Xác nhận tài khoản dành cho thành viên trong nhóm</legend>
                        <form href="{{ __("/verify") }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="code">Mã xác nhận của bạn</label>
                                <div class="input-group mb-4">
                                    <input type="text" class="form-control" id="code" onclick="select()" name="code" value="{{ auth()->user()->provider_id }}" readonly="">
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
                                <button type="submit" class="btn btn-success" id="submitBtn"><span class="fas fa-ok" aria-hidden="true"></span> Kích hoạt</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-7">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <legend>{{ __('Xác Minh Tài Khoản') }}</legend>
                        </div>
                        <div>
                            <div class="fb-comments" data-href="https://techviews.xyz/verify" data-width="100$" data-numposts="5"></div>
                            <div id="fb-root"></div>
                            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0&appId=505957909860537&autoLogAppEvents=1"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
