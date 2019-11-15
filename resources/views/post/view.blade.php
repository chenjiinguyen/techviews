@extends('layouts.app')

@section('pageTitle', $pageTitle)
@section('dataProtect',$dataProtect)
@section('author',$author)
@section('userAction',$userAction)

@section('content')
    <?php $action =json_decode($userAction,true) ?>
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 300px; background-image: url('https://c.wallhere.com/photos/b9/0d/trees_forest_Tatra_Mountains_Tatra_Slovakia_mist_pine_trees-1383935.jpg!d'); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container align-items-center">
            <div class="row">
              <div class="col-lg-12 col-md-12 text-center">
                <img src="{{ $author->avatar }}" width="128px" class="rounded-circle text-center">
                <h3 class="display-3 text-white">{{ $author->name }}</h3>
                <p class="text-white mt-0 mb-2"><b>Bài Viết: {{ $author->countPost }}| </b></p>
                <a href="https://fb.com/{{ $author->real_id }}" target="_blank" class="btn btn-sm btn-info"><i class="fas fa-user"></i> Trang Cá Nhân</a>
                @if (!empty($dataProtect->id_post)) <a href="https://fb.com/{{ $dataProtect->id_post }}"  target="_blank" class="btn btn-sm btn-warning"><i class="fas fa-file-alt"></i> Bài Viết Gốc</a> @endif
              </div>
            </div>
          </div>
    </div>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-9">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                            <h3 class="mb-0">Nội Dung Ẩn</h3>
                            </div>
                            <div class="col-4 text-right">
                                <div class="btn btn-sm btn-warning"><i class="fas fa-eye"></i> {{ $dataProtect->views }}</div>
                                <div class="btn btn-sm btn-success"><i class="fas fa-unlock"></i> {{ $dataProtect->unlock }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>{!! $dataProtect->text !!}</p>
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
                <div class="mb-3"><i class="fas fa-clock"></i> Tạo lúc {{ date("d/m/Y H:i:s",strtotime($dataProtect->created_at)) }}</div>
                @if (!(empty($dataProtect->updated_at) || $dataProtect->created_at == $dataProtect->updated_at))<div class="mb-3"><i class="fas fa-clock"></i> Cập nhật lúc {{ date("d/m/Y H:i:s",strtotime($dataProtect->updated_at)) }}</div> @endif
                @if (!empty($dataProtect->in_group))
                <div class="custom-control custom-checkbox mb-3">
                        <input class="custom-control-input" id="ingroup" type="checkbox" disabled @if($action["member"]) checked @endif>
                        <label class="custom-control-label" for="ingroup">Khóa Thành Viên</label>
                </div>
                @endif
                @if (!empty($dataProtect->reaction))
                <div class="custom-control custom-checkbox mb-3">
                        <input class="custom-control-input" id="reaction" type="checkbox" disabled @if($action["reaction"]) checked @endif >
                        <label class="custom-control-label" for="reaction">Khóa Tương Tác</label>
                </div>
                @endif
                @if (!empty($dataProtect->comment))
                <div class="custom-control custom-checkbox mb-3">
                        <input class="custom-control-input" id="comment" type="checkbox" disabled @if($action["comment"]) checked @endif >
                        <label class="custom-control-label" for="comment">Khóa Bình Luận</label>
                </div>
                @endif
                @if (!empty($dataProtect->point))
                <div class="custom-control custom-checkbox mb-3">
                        <input class="custom-control-input" id="point" type="checkbox" disabled>
                        <label class="custom-control-label" for="point">Khóa Điểm</label>
                </div>
                @endif
                @if (!empty($dataProtect->password))
                <div class="form-group">
                        <input type="text" placeholder="Nhập mật khẩu..."  class="form-control" >
                </div>
                @endif
            </div>
            </div>
          </div>

        </div>

      </div>

@endsection


