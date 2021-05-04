@extends('layouts.master')
@section('title')
    Index Page
@endsection
@section('content')
<div class="slide">
    <div class="container-fluid p-10">
        
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>
          
            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active" style="height: 100%">
                <img src="{{ asset('images/slide1.jpg') }}" style=""width="100%" height="100%"  alt="Los Angeles">
              </div>
              <div class="carousel-item" style="height: 100%">
                <img src="{{ asset('images/slide2.jpg') }}" width="100%" height="100%" alt="Chicago">
              </div>
              <div class="carousel-item" style="height: 100%">
                <img src="{{ asset('images/slide3.jpg') }}" width="100%" height="100%" alt="New York">
              </div>
            </div>
          
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          
          </div>
      </div>

    </div>
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="home-title">
                <h4 class="card-title">PHIM ĐANG CHIẾU</h4> 
            </div>
            <div class="row container-fluid">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            {{--  <h4 class="card-title">PHIM ĐANG CHIẾU</h4>  --}}
                            <div class="owl-carousel">
                                <div class="item"><a href="{{ asset('/detail') }}"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204172/banner_2.jpg" alt="image" /> </a></div>
                                <div class="item"><a href="{{ asset('/detail') }}"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204172/banner_2.jpg" alt="image" /> </a></div>
                                <div class="item"><a href="{{ asset('/detail') }}"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204172/banner_2.jpg" alt="image" /> </a></div>
                                <div class="item"><a href="{{ asset('/detail') }}"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204172/banner_2.jpg" alt="image" /> </a></div>
                                <div class="item"><a href="{{ asset('/detail') }}"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204172/banner_2.jpg" alt="image" /> </a></div>
                                <div class="item"><a href="{{ asset('/detail') }}"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204172/banner_2.jpg" alt="image" /> </a></div>
                                <div class="item"><a href="{{ asset('/detail') }}"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204172/banner_2.jpg" alt="image" /> </a></div>
                                <div class="item"><a href="{{ asset('/detail') }}"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204172/banner_2.jpg" alt="image" /> </a></div>
                                <div class="item"><a href="{{ asset('/detail') }}"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204172/banner_2.jpg" alt="image" /> </a></div>
                                <div class="item"><a href="{{ asset('/detail') }}"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204172/banner_2.jpg" alt="image" /> </a></div>
                                <div class="item"><a href="{{ asset('/detail') }}"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204172/banner_2.jpg" alt="image" /> </a></div>
                                <div class="item"><a href="{{ asset('/detail') }}"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204172/banner_2.jpg" alt="image" /> </a></div>
                                <div class="item"><a href="{{ asset('/detail') }}"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204172/banner_2.jpg" alt="image" /> </a></div>
                                <div class="item"><a href="{{ asset('/detail') }}"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204172/banner_2.jpg" alt="image" /> </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="home-title">
                 <h4 class="card-title">PHIM SẮP CHIẾU</h4> 
            </div>
            <div class="row container-fluid">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="owl-carousel">
                                <div class="item"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204172/banner_2.jpg" alt="image" /> </div>
                                <div class="item"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204172/banner_2.jpg" alt="image" /> </div>
                                <div class="item"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204663/park-4174278_640.jpg" alt="image" /> </div>
                                <div class="item"> <img src="http://www.urbanui.com/fily/template/images/carousel/banner_2.jpg" alt="image" /> </div>
                                <div class="item"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204172/banner_2.jpg" alt="image" /> </div>
                                <div class="item"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204663/park-4174278_640.jpg" alt="image" /> </div>
                                <div class="item"> <img src="http://www.urbanui.com/fily/template/images/carousel/banner_2.jpg" alt="image" /> </div>
                                <div class="item"> <img src="http://www.urbanui.com/fily/template/images/carousel/banner_2.jpg" alt="image" /> </div>
                                <div class="item"> <img src="http://www.urbanui.com/fily/template/images/carousel/banner_2.jpg" alt="image" /> </div>
                                <div class="item"> <img src="http://www.urbanui.com/fily/template/images/carousel/banner_2.jpg" alt="image" /> </div>
                                <div class="item"> <img src="http://www.urbanui.com/fily/template/images/carousel/banner_2.jpg" alt="image" /> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection