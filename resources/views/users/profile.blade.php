@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Hello') . ' '. auth()->user()->name,
        'description' => __('This is your profile page. You can see the progress you\'ve made with your work and manage your projects or assigned tasks'),
        'class' => 'col-lg-10'
    ])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image pt-md-4 pb-md-4 mb-md-4">
                                <a href="#">
                                    <img src="{{ auth()->user()->avatar  }}" class="rounded-circle">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-between mt-md-5">
                                    <div>
                                        <span class="heading">{{ __($totalPost) }}</span>
                                        <span class="description">{{ __('Post') }}</span>
                                    </div>

                                    <div>
                                        <span class="heading">89</span>
                                        <span class="description">{{ __('Follows') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-2 mb-3">
                            <h3>{{ auth()->user()->name }}</h3>
                            <div class="h5">Thành viên của {{ config('app.name')}}</div>
                        </div>
                        <div class="font-weight-light"><hr>4 người theo dõi</div>
                        <div class="avatar-group mt-4">
                            <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
                              <img alt="Image placeholder" src="{{ auth()->user()->avatar  }}" class="rounded-circle">
                            </a>
                            <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Romina Hadid">
                              <img alt="Image placeholder" src="{{ auth()->user()->avatar  }}" class="rounded-circle">
                            </a>
                            <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexander Smith">
                              <img alt="Image placeholder" src="{{ auth()->user()->avatar  }}" class="rounded-circle">
                            </a>
                            <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Jessica Doe">
                              <img alt="Image placeholder" src="{{ auth()->user()->avatar  }}" class="rounded-circle">
                            </a>
                          </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header bg-transparent border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Bài viết Của Tôi</h3>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush text-center">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Tiêu Đề</th>
                                    <th scope="col">Ngày tạo</th>
                                    <th scope="col">Lượt Xem</th>
                                    <th scope="col">Lượt Mở Khóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( App\Post::all()->sortByDesc('created_at') as $post)
                                <tr>
                                    <th scope="row">
                                        <a href="/post/{{ $post->id }}" >{{ $post->title }}</a>
                                    </th>
                                    <td>
                                        {{ $post->created_at }}
                                    </td>
                                    <td>
                                        {{ $post->views }}
                                    </td>
                                    <td>
                                        {{ $post->unlock }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection