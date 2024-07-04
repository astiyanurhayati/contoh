@extends('layouts.master')

@section('titleheader', 'Admin')
@section('page1', 'Dashboard')
@section('content')

<h4> <b> Visitors </b></h4>
<div class="row">
    <div class="col-12 col-sm-12">
        <div class="card card-primary card-tabs">
            <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Hari ini</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Bulan ini</a>
                    </li>

                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                        <div class="row">

                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Home</span>
                                        <span class="info-box-number">{{count($visitor->where('url', url('/')))}}</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">About Us</span>
                                        <span class="info-box-number">{{count($visitor->where('url', url('/about')))}}</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Pricing Table</span>
                                        <span class="info-box-number">{{count($visitor->where('url', url('/price')))}}</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Recipe Grid</span>
                                        <span class="info-box-number">{{count($visitor->where('url', url('/recipe')))}}</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Portofolio</span>
                                        <span class="info-box-number">{{count($visitor->where('url', url('/portofolio')))}}</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Blog</span>
                                        <span class="info-box-number">{{count($visitor->where('url', url('/blog')))}}</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Shop</span>
                                        <span class="info-box-number">{{count($visitor->where('url', url('/shop')))}}</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Contact</span>
                                        <span class="info-box-number">{{count($visitor->where('url', url('/contact')))}}</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                        <div class="row">

                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Home</span>
                                        <span class="info-box-number">{{count($visitDay->where('url', url('/')))}}</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">About Us</span>
                                        <span class="info-box-number">{{count($visitDay->where('url', url('/about')))}}</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Pricing Table</span>
                                        <span class="info-box-number">{{count($visitDay->where('url', url('/price')))}}</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Recipe Grid</span>
                                        <span class="info-box-number">{{count($visitDay->where('url', url('/recipe')))}}</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Portofolio</span>
                                        <span class="info-box-number">{{count($visitDay->where('url', url('/portofolio')))}}</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Blog</span>
                                        <span class="info-box-number">{{count($visitDay->where('url', url('/blog')))}}</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Shop</span>
                                        <span class="info-box-number">{{count($visitDay->where('url', url('/shop')))}}</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Contact</span>
                                        <span class="info-box-number">{{count($visitDay->where('url', url('/contact')))}}</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                        <div class="row">

                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Home</span>
                                        <span class="info-box-number">{{count($visitMonth->where('url', url('/')))}}</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">About Us</span>
                                        <span class="info-box-number">{{count($visitMonth->where('url', url('/about')))}}</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Pricing Table</span>
                                        <span class="info-box-number">{{count($visitMonth->where('url', url('/price')))}}</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Recipe Grid</span>
                                        <span class="info-box-number">{{count($visitMonth->where('url', url('/recipe')))}}</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Portofolio</span>
                                        <span class="info-box-number">{{count($visitMonth->where('url', url('/portofolio')))}}</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Blog</span>
                                        <span class="info-box-number">{{count($visitMonth->where('url', url('/blog')))}}</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Shop</span>
                                        <span class="info-box-number">{{count($visitMonth->where('url', url('/shop')))}}</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Contact</span>
                                        <span class="info-box-number">{{count($visitMonth->where('url', url('/contact')))}}</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>

</div>



<h4> <b> Data </b></h4>
<div class="row">
 
    
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{count($blog)}}</h3>

                <p>Blog</p>
            </div>
            <div class="icon">
                <i class="fas fa-chart-pie"></i>
            </div>
            <a href="{{route('blog.index')}}" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
</div>



<div class="row">
  
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{count($portofolio)}}</sup></h3>

                <p>Portofolio</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{route('portofolio.index')}}" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
  
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{count($contactMessage)}}</h3>

                <p>Contact Message</p>
            </div>
            <div class="icon">
                <i class="fas fa-chart-pie"></i>
            </div>
            <a href="{{route('form.contact')}}" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
</div>

<h4><b>Items</b></h4>
<div class="row">
    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
            <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Slidder</span>
                <span class="info-box-number">{{count($slidder)}}</span>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
            <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Testimonial</span>
                <span class="info-box-number">{{count($testimonial)}}</span>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
            <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Galeri</span>
                <span class="info-box-number">{{count($galeri)}}</span>
            </div>
        </div>
    </div>

   
    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
            <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Kategori Portofolio</span>
                <span class="info-box-number">{{count($categoryporto)}}</span>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
            <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Kategori Produk / Shop</span>
                <span class="info-box-number">{{count($categoryporto)}}</span>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
            <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Kategori Blog</span>
                <span class="info-box-number">{{count($categoryblog)}}</span>
            </div>
        </div>
    </div>



</div>



@endsection
