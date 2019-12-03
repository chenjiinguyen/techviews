@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row mt-5">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header bg-transparent border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Bài viết Ẩn</h3>
                            </div>
                            <div class="col text-right">
                                <a href="#!" class="btn btn-sm btn-primary">Xem Tất Cả Các Bài Viết Ẩn</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush text-center">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Tiêu Đề</th>
                                    <th scope="col">Tác Giả</th>
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
                                    <?php $author = App\User::where('real_id',$post->id_author)->first(); ?>
                                        <a href="https://www.facebook.com/{{ $post->id_author }}" target="_blank" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="{{ $author->name }}">
                                        <img alt="Image placeholder" src="{{ $author->avatar }}" class="rounded-circle">
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
            <div class="col-xl-4">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Thành Viên Nhiều Bài Viết</h3>
                            </div>
                            <!-- <div class="col text-right">
                                <a href="#!" class="btn btn-sm btn-primary">Xem</a>
                            </div> -->
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush text-center">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Thành Viên</th>
                                    <th scope="col">Bài Viết</th>
                                    <th scope="col">Chiếm Phần Trăm</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach(App\User::select(DB::raw('users.*, count(*) as total_posts'))->join('posts', 'users.real_id', '=', 'posts.id_author')->groupBy('real_id')->orderBy('total_posts', 'desc')->get() as $user)
                                <tr>
                                    <th scope="row">
                                        <a href="https://www.facebook.com/{{ $user->real_id }}" target="_blank" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="{{ $user->name }}">
                                        <img alt="Image placeholder" src="{{ $user->avatar }}" class="rounded-circle">
                                    </th>
                                    <td>
                                        {{ $user->total_posts }}
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="mr-2">{{ $phantram = Round(100/App\Post::all()->count()*$user->total_posts) }}%</span>
                                            <div>
                                                <div class="progress">
                                                <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="{{ $phantram }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $phantram }}%;"></div>
                                                </div>
                                            </div>
                                        </div>
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

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush