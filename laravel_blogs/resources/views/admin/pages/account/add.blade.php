@extends('admin.main')

@section('content')
<main class="dash-content">
    <div class="container-fluid">
        <h1 class="dash-title">Trang chủ / Tài khoản / Thêm mới</h1>
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                @foreach($errors->all() as $error)
                    {{ $error }}
                @endforeach
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <div class="card easion-card">
                    <div class="card-header">
                        <div class="easion-card-icon">
                            <i class="fas fa-list"></i>
                        </div>
                        <div class="easion-card-title">Thêm mới tài khoản</div>
                    </div>
                    <div class="card-body ">
                        <form action="{{ route('AccountPost') }}" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmai">Email</label>
                                    <input name="email" type="email" class="form-control" id="inputEmai"
                                        placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Tên hiển thị</label>
                                <input name="name" type="text" class="form-control col-md-6" id="inputAddress"
                                    placeholder="Tên hiển thị người dùng" required>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="password">Mật khẩu</label>
                                    <input name="password" type="password" class="form-control" id="password"
                                        placeholder="Nhập vào mật khẩu">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password-confirm">Xác nhận mật khẩu</label>
                                    <input name="password_confirm" type="password" class="form-control"
                                        id="password-confirm" placeholder="Xác nhận lại mật khẩu">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Đăng ký</button>
                            <button type="reset" class="btn btn-secondary">Nhập lại</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection