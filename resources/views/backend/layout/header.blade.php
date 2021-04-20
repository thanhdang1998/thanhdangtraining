<div class="wrapper">

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('sanpham')}}" class="brand-link">
      <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Rivercrane Vietnam</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
        <div class="info">
          <a href="{{route('logout')}}" class="d-block" title="Đăng xuất"><i class="fas fa-door-open"></i></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="{{route('sanpham')}}" class="nav-link">
              <i class="fas fa-box-open"></i>
              <p>
                Sản phẩm
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('khachhang')}}" class="nav-link">
              <i class="fas fa-users"></i>
              <p>
                Khách hàng
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('taikhoan')}}" class="nav-link">
              <i class="fas fa-user"></i>
              <p>
                Tài khoản
              </p>
            </a>
          </li>

        </ul>
      </nav>
    </div>
  </aside>