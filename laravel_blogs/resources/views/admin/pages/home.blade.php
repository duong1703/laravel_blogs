@extends('admin.main')

@section('content')

<div class="container-fluid">

    <div class="row dash-row">
        <div class="col-xl-3">
            <div class="stats stats-primary rounded-4">
                <h3 class="stats-title"> Tổng người dùng </h3>
                <div class="stats-content">
                    <div class="stats-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="stats-data">
                        <div class="stats-number"> {{ $totalAccount }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="stats stats-success rounded-4 ">
                <h3 class="stats-title"> Tổng số bài viết </h3>
                <div class="stats-content">
                    <div class="stats-icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <div class="stats-data">
                        <div class="stats-number"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="stats stats-warning rounded-4">
                <h3 class="stats-title"> Tổng số danh mục </h3>
                <div class="stats-content">
                    <div class="stats-icon">
                        <i class="fa fa-list"></i>
                    </div>
                    <div class="stats-data">
                        <div class="stats-number">{{ $totalCategory }} </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="stats stats-light rounded-4">
                <h3 class="stats-title"> Tổng số danh mục con </h3>
                <div class="stats-content">
                    <div class="stats-icon">
                        <i class="fa fa-list"></i>
                    </div>
                    <div class="stats-data">
                        <div class="stats-number">{{ $totalSubCategory }} </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="stats stats-primary rounded-4">
                <h3 class="stats-title"> Tổng lượt truy cập </h3>
                <div class="stats-content">
                    <div class="stats-icon">
                    <i class="fas fa-universal-access"></i>
                    </div>
                    <div class="stats-data">
                        <div class="stats-number"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection