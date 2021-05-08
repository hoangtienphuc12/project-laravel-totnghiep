@extends('layouts.master')
@section('title')
    Index Page
@endsection
@section('content')
    <section class="portfolio-section grid-portfolio ratio2_4 portfolio-padding">
        <div class="container">
            <div class="title mb-5 "><span
                    style="font-family: -webkit-body;font-size: xx-large;font-weight: 500; box-shadow: 0 3px tomato;">
                    Phim Sắp Chiếu </span></div>
            <div class="row  zoom-gallery ">
                @foreach ($phimsc as $phim)
                    <div class="isotopeSelector filter fashion col-lg-4 col-sm-6">
                        <div class="overlay">
                            <div class="border-portfolio">
                                <img src="{{ asset('./images/' . $phim->movie_image) }}" style="height: 350px !important">
                            </div>
                        </div>
                        <div class="tieudephimdc mt-2" style="text-align: center">
                            <h5 class="text-uppercase ">{{ $phim->movie_name }}</h5>
                        </div>
                        <div class="ramat mt-2" style="text-align: center">
                            <h5 class="text-ramat"
                                style="    font-size: initial;font-family: auto;color: tomato; box-shadow: 0 2px orange;">
                                ngày ra mắt : {{ $phim->movie_releasetime }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@stop
