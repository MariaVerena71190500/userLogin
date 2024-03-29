@php
$current_route=request()->route()->getName();
@endphp
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{asset('admin-assets/dist/img/crossWhite.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-10">

    <span class="brand-text font-weight-light">&nbsp; <b>Data</b> Jemaat</span>

  </a>

  <!-- Sidebar -->
    <div class="sidebar mt-2">
    <a class="brand-link">&nbsp;&nbsp;
        <i class="nav-icon fas fa-user-circle user-icon"></i>
        <span class="brand-text font-weight-light" style="text-transform: capitalize;">&nbsp;&nbsp; <b>{{ auth()->user()->name }}</b></span>

    </a>



    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

       <li class="nav-item">
          <a href="{{route('dashboard')}}" class="nav-link {{$current_route=='dashboard'?'active':''}}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('att')}}" class="nav-link {{$current_route=='att'?'active':''}}">
            <i class="nav-icon fas fa-handshake" aria-hidden="true"></i>
            <p>
              Attestasi
            </p>
          </a>
       </li>
        <li class="nav-item">
          <a href="{{route('baptis')}}" class="nav-link {{$current_route=='baptis'?'active':''}}">
            <i class="nav-icon far fas fa-cross"></i>
            <p>
              Baptis
            </p>
          </a>
       </li>
       <li class="nav-item">
          <a href="{{route('jemaat')}}" class="nav-link {{$current_route=='jemaat'?'active':''}}">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Jemaat
            </p>
          </a>
       </li>
       <li class="nav-item">
          <a href="{{route('kematian')}}" class="nav-link {{$current_route=='kematian'?'active':''}}">
            <i class="nav-icon fas fa-flag" aria-hidden="true"></i>
            <p>
              Kematian
            </p>
          </a>
       </li>
       <li class="nav-item">
          <a href="{{route('nikah')}}" class="nav-link {{$current_route=='nikah'?'active':''}}">
            <i class="nav-icon fas fa-heart"></i>
            <p>
              Pernikahan
            </p>
          </a>
       </li>
       <li class="nav-item">
          <a href="{{route('sidhi')}}" class="nav-link {{$current_route=='sidhi'?'active':''}}">
            <i class="nav-icon far fas fa-star"></i>
            <p>
              Sidhi
            </p>
          </a>
       </li>
       <li class="nav-item">
          <a href="{{route('wilayah')}}" class="nav-link {{$current_route=='wilayah'?'active':''}}">
            <i class="nav-icon fas fa-map-marker"></i>
            <p>
              Wilayah
            </p>
          </a>
       </li>
      </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
