@extends('admin.main')

@section('content')
<main class="dash-content">
    <div class="container-fluid">
        <h1 class="dash-title">Trang chủ / Profile</h1>
        <div class="row">
            <!-- Profile Card -->
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-header text-center">
                        <img src="https://via.placeholder.com/150" alt="Avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        <h3 class="mt-2">Admin Name</h3>
                        <p class="text-muted">admin@example.com</p>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-3">
                                <i class="fas fa-briefcase fa-fw me-3"></i><span>Admin</span>
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-map-marker-alt fa-fw me-3"></i><span>Location</span>
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-phone fa-fw me-3"></i><span>+123 456 7890</span>
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-envelope fa-fw me-3"></i><span>admin@example.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Profile Details and Recent Activities -->
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="mb-0">Chi tiết thông tin</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row mb-3">
                                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Tên</label>
                                <div class="col-md-8 col-lg-9">
                                    <input type="text" class="form-control" id="fullName" value="Admin Name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                <div class="col-md-8 col-lg-9">
                                    <input type="email" class="form-control" id="email" value="admin@example.com">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="phone" class="col-md-4 col-lg-3 col-form-label">Số điện thoại</label>
                                <div class="col-md-8 col-lg-9">
                                    <input type="text" class="form-control" id="phone" value="+123 456 7890">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="address" class="col-md-4 col-lg-3 col-form-label">Địa chỉ</label>
                                <div class="col-md-8 col-lg-9">
                                    <input type="text" class="form-control" id="address" value="Location">
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Recent Activities</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Logged in at 10:00 AM</li>
                            <li class="list-group-item">Updated profile information</li>
                            <li class="list-group-item">Posted a new article</li>
                            <li class="list-group-item">Commented on a post</li>
                            <li class="list-group-item">Logged out at 6:00 PM</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection