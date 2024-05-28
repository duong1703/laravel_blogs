@extends('admin.main')

@section('content')
<main class="dash-content">
    <div class="container-fluid">
        <h1 class="dash-title">Trang chủ / Tài khoản / Danh sách</h1>
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
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
                        <div class="easion-card-title">Danh sách tài khoản</div>
                    </div>
                    <div class="card-body">
                        <table id="example" class="cell-border" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="text-center" scope="col">ID</th>
                                    <th class="text-center" scope="col">Tên</th>
                                    <th class="text-center" scope="col">Email</th>
                                    <th class="text-center" scope="col">Mật khẩu</th>
                                    <th class="text-center" scope="col">Ngày tạo</th>
                                    <th class="text-center" scope="col">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $count = 1;
                                @endphp
                                @foreach ($data as $adminaccount)

                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>{{ $adminaccount->name }}</td>
                                    <td>{{ $adminaccount->email }}</td>
                                    <td>{{ $adminaccount->password }}</td>
                                    <td>{{ $adminaccount->created_at }}</td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <form action="{{ route('AccountDelete', $adminaccount->id  ) }}"
                                                method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa ?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"> <i
                                                        class="fa fa-trash"></i></button>
                                            </form>

                                            <a href="{{ route('EditAccount' ,$adminaccount->id ) }}" type="button" class="btn btn-primary"> <i
                                                    class="fa fa-edit"></i></a>
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
    </div>
</main>
@endsection