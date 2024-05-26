@extends('admin.main')

@section('content')
<main class="dash-content">
    <div class="container-fluid">
        <h1 class="dash-title">Trang chủ / Bài viết / Thêm mới</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="card easion-card">
                    <div class="card-header">
                        <div class="easion-card-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="easion-card-title">Thêm bài viết</div>
                    </div>
                    <form action="" method="post">
                        @csrf
                        <div class="row">
                            <div class="d-flex justify-content-between">
                                <div class="card-body col-lg-6 ">
                                    <label name="title" for="" class="">Tiêu đề bài viết</label>
                                    <input type="text" class="form-control" id="inputGroupFile02">
                                </div>

                                <div class="card-body col-lg-6">
                                    <label name="category" for="" class="">Ảnh bài viết</label>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputGroupFile02">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="d-flex justify-content-between">
                                <div class="card-body col-lg-6 ">
                                    <label name="category" for="" class="">Danh mục bài viết</label>
                                    <select class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option selected>Chọn danh mục bài viết</option>
                                        
                                    </select>
                                </div>

                                <div class="card-body col-lg-6">
                                    <label name="category" for="" class="">Danh mục con</label>
                                    <select class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option selected>Chọn danh mục con</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <label name="post" for="" class="">Viết bài</label>
                            <textarea></textarea>
                        </div>
                        <div class="mb-2 ml-5">

                            <button type="button" class="btn btn-primary">Đăng bài</button>
                            <a href="/views/admin/pages/post/list" type="button" class="btn btn-danger">Hủy</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>


<!-- Place the first <script> tag in your HTML's <head> -->
<script src="https://cdn.tiny.cloud/1/hbozepm8v83oquejurp97p1x4p1eymqxvifr4r4izmvfi34i/tinymce/7/tinymce.min.js"
    referrerpolicy="origin"></script>
<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount linkchecker',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
});
</script>
@endsection