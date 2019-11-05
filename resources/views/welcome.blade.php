@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    <div class="header bg-gradient-primary py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-8">
                        <h1 class="text-white display-3">{{ __('Chào mừng đến với Techviews') }}</h1>
                        <p class="text-white">Nhìn gì nữa! Ngại gì mà không nhấn đi....Không có mất nick đâu!</p>
                        <div class="btn-wrapper mt-5">
                            <a href="{{ route('login', 'facebook') }}" class="btn btn-white btn-icon text-primary">
                                <span class="btn-inner--icon">
                                    <i class="fab fa-facebook-square"></i>
                                </span>
                                <span class="btn-inner--text">Đăng nhập</span>
                            </a>
                            <a href="#" class="btn btn-white btn-icon text-primary">
                                <span class="btn-inner--icon">
                                    <i class="fab fa-facebook-square"></i>
                                </span>
                                <span class="btn-inner--text">Group trên FB</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>

    <div class="container py-5">
        <h2 class="text-white text-center mb-5">Giới thiệu về Techviews bla bla .....</h2>

        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <img class="w-25" src="{{ asset('argon') }}/img/theme/angular.jpg">
                        <h3 class="m-0">Mô tả website</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <img class="w-25" src="{{ asset('argon') }}/img/theme/bootstrap.jpg">
                        <h3 class="m-0">Mô tả website</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <img class="w-25" src="{{ asset('argon') }}/img/theme/react.jpg">
                        <h3 class="m-0">Mô tả website</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <img class="w-25" src="{{ asset('argon') }}/img/theme/vue.jpg">
                        <h3 class="m-0">Mô tả website</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt--10 pb-5"></div>
@endsection
