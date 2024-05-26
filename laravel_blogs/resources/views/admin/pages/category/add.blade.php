@extends('admin.main')

@section('content')
<main class="dash-content">
    <div class="container-fluid">
        <h1 class="dash-title">Trang chủ / Danh mục / Thêm mới</h1>
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
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
                        <div class="easion-card-title">Thêm mới danh mục</div>
                    </div>

                    <form action="{{ route('CategoryPost') }}" method="post">
                        @csrf

                        <div id="category-container">
                            <div class="d-flex justify-content-between">
                                <div class="card-body col-lg-6 me-2">
                                    <label for="category" class="form-label">Danh mục bài viết</label>
                                    <input type="text" class="form-control" name="categories[]" required>
                                </div>

                                <div class="card-body col-lg-6">
                                    <label for="subcategory" class="form-label">Danh mục con</label>
                                    <input type="text" class="form-control" name="subcategories[]" required>
                                </div>

                            </div>
                        </div>

                        <div class="mt-3 ml-3 mb-2">
                            <button type="button" id="add-category" class="btn btn-secondary">Thêm trường</button>
                            <button type="submit" class="btn btn-primary">Thêm mới</button>
                            <a href="/views/admin/pages/category/add" type="button" class="btn btn-danger">Hủy</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    document.getElementById('add-category').addEventListener('click', function () {
        var container = document.getElementById('category-container');
        var newRow = document.createElement('div');
        newRow.classList.add('d-flex', 'justify-content-between', 'mt-2');
        newRow.innerHTML = `
            <div class="card-body col-lg-6 me-2">
                <label for="category" class="form-label">Danh mục bài viết</label>
                <input type="text" class="form-control" name="categories[]" required>
            </div>
            <div class="card-body col-lg-6">
                <label for="subcategory" class="form-label">Danh mục con</label>
                <input type="text" class="form-control" name="subcategories[]" required>
            </div>
        `;
        container.appendChild(newRow);
    });
</script>
@endsection