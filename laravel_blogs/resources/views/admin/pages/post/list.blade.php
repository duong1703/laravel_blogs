@extends('admin.main')

@section('content')
<main class="dash-content">
    <div class="container-fluid">
        <h1 class="dash-title">Trang chủ / Bài viết / Danh sách</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="card easion-card">
                    <div class="card-header">
                        <div class="easion-card-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="easion-card-title">Danh sách bài viết</div>
                    </div>
                    <div class="card-body ">
                        <table id="example" class="cell-border" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Ảnh</th>
                                    <th scope="col">Tiêu đề</th>
                                    <th scope="col">Nội dung</th>
                                    <th scope="col">Danh mục</th>
                                    <th scope="col">Ngày tạo</th>
                                    <th scope="col">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <tr>
                                    <td>id 3</td>
                                    <td>name 3</td>
                                    <td>email 3</td>
                                    <td>role 3</td>
                                    <td class="text-center">
                                        <a href="user-edit.html" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                        <a data-url="" class="btn btn-danger btn-del-confirm"><i
                                                class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection