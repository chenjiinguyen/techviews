<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
<<<<<<< HEAD
<<<<<<< HEAD
        <a class="navbar-brand pt-0" href="{{ route('home') }}">
            <img src="{{ asset('argon') }}/img/brand/red.png" class="navbar-brand-img" alt="...">
=======
=======
>>>>>>> 13adcff1f32da76d7d02b19b28b63d2466ab407f
        <a class="navbar-brand pt-0" href="#">
            <img src="{{ asset('argon') }}/img/brand/blue.png" class="navbar-brand-img" alt="...">
>>>>>>> 13adcff1f32da76d7d02b19b28b63d2466ab407f
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>{{ __('Settings') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>{{ __('Activity') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-support-16"></i>
                        <span>{{ __('Support') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="#">
                            <img src="{{ asset('argon') }}/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
<<<<<<< HEAD
<<<<<<< HEAD
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="ni ni-tv-2 text-primary"></i> {{ __('Trang Chủ') }}
                    </a>
                </li>

            </ul>
            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading text-muted">Documentation</h6>
            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">
=======
                    <a class="nav-link" href="#">
                        <i class="fa fa-home text-primary"></i> {{ __('Trang chủ') }}
=======
                    <a class="nav-link" href="#">
                        <i class="fa fa-home text-primary"></i> {{ __('Trang chủ') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-bolt text-blue"></i> {{ __('Bài viết mới') }}
>>>>>>> 13adcff1f32da76d7d02b19b28b63d2466ab407f
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
<<<<<<< HEAD
                        <i class="fa fa-bolt text-blue"></i> {{ __('Bài viết mới') }}
=======
                        <i class="fa fa-search text-blue"></i> {{ __('Tìm kiếm') }}
>>>>>>> 13adcff1f32da76d7d02b19b28b63d2466ab407f
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
<<<<<<< HEAD
                        <i class="fa fa-search text-blue"></i> {{ __('Tìm kiếm') }}
=======
                        <i class="fa fa-chart-bar text-primary"></i> {{ __('Xem rank top 50') }}
>>>>>>> 13adcff1f32da76d7d02b19b28b63d2466ab407f
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
<<<<<<< HEAD
                        <i class="fa fa-chart-bar text-primary"></i> {{ __('Xem rank top 50') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-lock text-primary"></i> {{ __('Khoá link') }}
                    </a>
                </li>
>>>>>>> 13adcff1f32da76d7d02b19b28b63d2466ab407f
=======
                        <i class="fa fa-lock text-primary"></i> {{ __('Khoá link') }}
                    </a>
                </li>
>>>>>>> 13adcff1f32da76d7d02b19b28b63d2466ab407f
                <li class="nav-item">
                    <a class="nav-link active" href="#hashtag" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="hashtag">
                        <i class="fas fa-hashtag text-blue"></i>
                        <span class="nav-link-text">{{ __('Hashtag') }}</span>
                    </a>

                    <div class="collapse show" id="hashtag">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link text-blue" href="#">
                                    <span class="nav-link-text">
                                        <i class="fas fa-hashtag"></i> 
                                        {{ __('techviews_share') }}
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-blue" href="{{ route('user.index') }}">
                                    <span class="nav-link-text">
                                        <i class="fas fa-hashtag"></i> 
                                        {{ __('techviews_relax') }}
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#follow" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="follow">
                        <i class="fas fa-star text-blue"></i>
                        <span class="nav-link-text">{{ __('Theo dõi') }}</span>
                    </a>

                    <div class="collapse" id="follow">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link text-default" href="#">
                                    <i class="fas fa-newspaper"></i>
                                    <span class="nav-link-text">{{ __('Bài viết') }}</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-default" href="#">
                                    <i class="fas fa-user"></i>
                                    <span class="nav-link-text">{{ __('Thành viên') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item nav-logout">
                    <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run text-primary"></i> {{ __('Đăng xuất') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>