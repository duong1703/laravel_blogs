<div class="dash-nav bg-warning">
            <header>
                <a href="javascript::void()" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a class="text-center mt-3"  href="/views/admin/pages/home" class="easion-logo"><img src="{{ asset('img/logoadmin.png') }}" alt=""
                height="100px" width="100px"></a>
            </header>
            <nav class="dash-nav-list">
                <a href="/views/admin/pages/home" class="dash-nav-item">
                    <i class="fas fa-home"></i> Thống kê </a>
                <div class="dash-nav-dropdown">
                    <a href="javascript::void(0)" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-users"></i> Tài khoản </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="/views/admin/pages/account/list" class="dash-nav-dropdown-item">Danh sách</a>
                        <a href="/views/admin/pages/account/add" class="dash-nav-dropdown-item">Thêm mới</a>
                    </div>
                </div>
                <div class="dash-nav-dropdown">
                    <a href="javascript::void(0)" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-book"></i> Bài viết </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="/views/admin/pages/post/list" class="dash-nav-dropdown-item">Danh sách</a>
                        <a href="/views/admin/pages/post/add" class="dash-nav-dropdown-item">Thêm mới</a>
                    </div>
                </div>
                <div class="dash-nav-dropdown">
                    <a href="javascript::void(0)" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-list"></i> Danh mục</a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="/views/admin/pages/category/list" class="dash-nav-dropdown-item">Danh sách</a>
                        <a href="/views/admin/pages/category/add" class="dash-nav-dropdown-item">Thêm mới</a>
                    </div>
                </div>
                <div class="dash-nav-dropdown">
                    <a href="javascript::void(0)" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-comments"></i> Đánh giá </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="#" class="dash-nav-dropdown-item">Danh sách</a>
                        <a href="#" class="dash-nav-dropdown-item">Thêm mới</a>
                    </div>
                </div>
                <div class="dash-nav-dropdown">
                    <a href="javascript::void(0)" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fa fa-user-lock"></i> Profile </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="/views/admin/pages/profile/profile" class="dash-nav-dropdown-item">Thông tin Admin</a>
                    </div>
                </div>
            </nav>
        </div>