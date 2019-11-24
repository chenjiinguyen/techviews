<!-- Top navbar -->
<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
    <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="{{ URL::to('/') }}">{{ __('Tech Views Data') }}</a>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
            <li class="nav-item mr-3">
                <a href="{{ route('create.post') }}" class="btn btn-white btn-sm btn-icon">
                    <span class="btn-inner--icon">
                        <span class="btn-inner--icon">
                            <i class="fas fa-plus"></i>
                        </span>
                    </span>
                    <span class="btn-inner--text" >Đăng bài</span>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                            <img alt="Image placeholder" src="{{ auth()->user()->avatar }}">
                        </span>
                        <div class="media-body ml-2 d-none d-lg-block">
                            <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->name }}</span>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Chào Mừng!') }}</h6>
                    </div>
                    <a href="#" class="dropdown-item">
                        <i class="fa fa-user"></i>
                        <span>{{ __('Bài Viết Của Bạn') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>{{ __('Đăng Xuất') }}</span>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
