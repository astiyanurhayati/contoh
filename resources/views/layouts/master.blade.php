<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titleheader')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('pluginsb/fontawesome-free/css/all.min.css')}}">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="icon" href="{{asset('generalimg/'.$general->logo1)}}" type="image/x-icon">
    

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
         
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('generalimg/'.$general->logo1)}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="{{route('dashboard')}}" class="d-block">{{Auth::user()->name}}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item">
                            <a href="{{route('dashboard')}}" class="nav-link {{ Route::is('dashboard') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="{{route('blog.index')}}" class="nav-link {{ Route::is('blog.index') ? 'active' : ''}}">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                    Blog
                                </p>
                            </a>
                        </li>

                        
                        <li class="nav-item">
                            <a href="{{route('portofolio.index')}}" class="nav-link {{ Route::is('portofolio.index') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Portofolio</p>
                            </a>
                        </li>
                      
                        <li class="nav-item">
                            <a href="#" class="nav-link {{Request('dashboard/admin/master-data*')  ? "active" : ""}}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Master Data
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                               
                           
                                <li class="nav-item">
                                    <a href="{{route('testimonial.index')}}" class="nav-link {{ Route::is('testimonial.index') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Testimonial</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('galery.index')}}" class="nav-link {{ Route::is('galery.index') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Galeri</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('iklan.index')}}" class="nav-link {{ Route::is('iklan.index') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Iklan Blog</p>
                                    </a>
                                </li>
                               
                                <li class="nav-item">
                                    <a href="{{route('category-porto.index')}}" class="nav-link {{ Route::is('category-porto.index') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kategori Portofolio</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('category-blog.index')}}" class="nav-link {{ Route::is('category-blog.index') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kategori Blog</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-cog nav-icon"></i>
                                <p>
                                    Konfigurasi
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('general.index')}}" class="nav-link {{ Route::is('general.index') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>General</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('template.index')}}" class="nav-link {{ Route::is('template.index') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Template</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Manajemen Menu
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('main-menu.index')}}" class="nav-link {{ Route::is('main-menu.index') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Main Menu</p>
                                    </a>
                                </li>
                    

                            </ul>
                        </li>
                        <li class="nav-header"></li>

                        <li class="nav-item">
                            <a href="{{route('logout')}}" class="nav-link">
                                <i class="fas fa-sign-out-alt nav-icon text-danger"></i>
                                <p class="text-danger">Logout</p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('title')</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">@yield('page1')</a></li>
                                <li class="breadcrumb-item active">@yield('title')</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="o">PT Wan Teknologi Internasional</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @if(session('alert'))
    <script>
        Swal.fire({
            title: 'Loading...'
            , allowEscapeKey: false
            , allowOutsideClick: false
            , didOpen: () => {
                Swal.showLoading();
                // Proses yang memerlukan waktu
                setTimeout(() => {
                    Swal.fire({
                        icon: 'success'
                        , title: 'Success!'
                        , text: 'Proses berhasil!'
                    });
                }, 1000);
            }
        });

    </script>
    @endif

    <!-- jQuery -->
    <script src="{{asset('pluginsb/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('pluginsb/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE -->
    <script src="{{asset('dist/js/adminlte.js')}}"></script>

    <script src="{{asset('dist/js/pages/dashboard3.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>
