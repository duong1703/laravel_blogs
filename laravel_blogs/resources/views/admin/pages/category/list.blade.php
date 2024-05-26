@extends('admin.main')

@section('content')
<main class="dash-content">
    <div class="container-fluid">
        <h1 class="dash-title">Trang chủ / Danh mục / Danh sách</h1>
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
                        <div class="easion-card-title">Danh sách danh mục</div>
                    </div>
                    <div class="card-body text-center ">
                        <table id="example" class="cell-border" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="text-center" scope="col">ID</th>
                                    <th class="text-center" scope="col">Danh mục bài viết</th>
                                    <th class="text-center" scope="col">Danh mục con</th>
                                    <th class="text-center" scope="col">Ngày tạo</th>
                                    <th class="text-center" scope="col">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php
                            $count = 1; 
                            @endphp
                                @foreach ($data as $category)

                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>{{ $category->category }}</td>
                                    <td>{{ $category->subcategory }}</td>
                                    <td>{{ $category->created_at }}</td>
                                    <td>
                                        <form action="{{ route('CategoryDelete', $category->id) }}" method="POST"
                                            onsubmit="return confirm('Bạn có chắc chắn muốn xóa {{ $category->subcategory }} ?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger ml-5"> <i
                                                    class="fa fa-trash"></i> Xóa</button>
                                        </form>
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