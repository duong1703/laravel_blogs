@extends('admin.main')

@section('content')
<main class="dash-content">
    <div class="container-fluid">
        <h1 class="dash-title">Trang chủ / Tài khoản / Sửa</h1>
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
            <div class="col-xl-12">
                <div class="card easion-card">
                    <div class="card-header">
                        <div class="easion-card-icon">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <div class="easion-card-title"> Thông tin tài khoản </div>
                    </div>
                    <div class="card-body ">
                        <form action="{{ route('UpdateAccount', $data->id) }}" method="post">
                            @csrf
                            @method('PUT')

                            <input name="id" hidden>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input value="{{ $data->email }}" name="email" type="email" class="form-control"
                                        id="inputEmail4" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Tên hiển thị</label>
                                <input value="{{ $data->name }}" name="name" type="text" class="form-control col-md-6"
                                    id="inputAddress" placeholder="Tên hiển thị người dùng" required>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="password">Mật khẩu</label>
                                    <input name="password" type="password" class="form-control" id="password"
                                        placeholder="Nhập vào mật khẩu" readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password-confirm">Xác nhận mật khẩu</label>
                                    <input name="password_confirm" type="password" class="form-control"
                                        id="password-confirm" placeholder="Xác nhận lại mật khẩu" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input name="change_password" type="checkbox" class="custom-control-input"
                                        id="change-password">
                                    <label class="custom-control-label" for="change-password">Thay đổi mật
                                        khẩu</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-"></i>Cập nhật</button>
                            <button id="btn-reset-edit-user" type="reset" class="btn btn-secondary">Nhập
                                lại</button>
                            <a href="{{ route('ListAccount') }}" id="btn-return-edit-user" type="return" class="btn btn-warning">Quay lại</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<script>
$('#change-password').change(function() {
    let status = !$(this).is(":checked");
    showChangePassword(status)
});

$("#btn-reset-edit-user").click(function() {
    showChangePassword(true);
});

function showChangePassword(status) {
    $("#password").attr('readonly', status);
    $("#password-confirm").attr('readonly', status);

    $("#password").val("");
    $("#password-confirm").val("");
}
</script>

@endsection