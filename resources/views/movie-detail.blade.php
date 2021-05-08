@extends('layouts.master')
@section('title','Index Page')
@section('content')
<link rel="stylesheet" href="/css/index.css">
    <div class="container mt-5">
        <div class="row">
            @foreach ($ctphim as $phim)
                {{-- {{ dd($phimlq) }} --}}
                {{-- {{ dd($phim) }} --}}
                <div class="col-xs-12 col-sm-8 col-md-8">
                    <div class="row">
                        <div class="col-xs-8 col-sm-4 col-md-4 image">
                            <img src="{{ asset('./images/' . $phim->movie_image) }}" alt="image" width="100%">
                        </div>
                        <div class="col-sx-12 col-sm-8 col-md-8">
                            <h2 class="text-uppercase title-movie">{{ $phim->movie_name }}</h2>
                            <div class="movie-info">
                                <div class="info">
                                    <label>Thời lượng:&nbsp;</label>
                                    <span>{{ $phim->movie_time }} phút</span>
                                </div>
                                <div class="info">
                                    <label>Thể loại:&nbsp;</label>
                                    <span>{{ $phim->category_name }}</span>
                                </div>
                                <div class="info">
                                    <label>Ngôn Ngữ:&nbsp;</label>
                                    <span>{{ $phim->movie_language }}</span>
                                </div>
                                <div class="info">
                                    <label>Đạo diễn:&nbsp;</label>
                                    <span>{{ $phim->movie_directors }}</span>
                                </div>
                                <div class="info">
                                    <label>Diễn viên:&nbsp;</label>
                                    <span>{{ $phim->movie_actors }}</span>
                                </div>
                                <div class="info">
                                    <label>Độ Tuổi:&nbsp;</label>
                                    <span>{{ $phim->movie_rated }}</span>
                                </div>
                                <div class="info">
                                    <label>Ngày khởi chiếu:&nbsp;</label>
                                    <span>{{ $phim->movie_releasetime }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row noidungphim">
                        <div class="col-12">
                            <div class="noidung">
                                <h3>Nội Dung Phim</h3>
                                <div class="content-text">
                                    <br>
                                    <p>{{ $phim->movie_description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row lichchieu">
                        <div class="col-12">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home">Lịch Chiếu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#menu1">Bình Luận</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="home" class="container tab-pane active"><br>
                                    @foreach ($timelist as $lich)
                                        <div class="lich mb-4">
                                            <div class="chitietlich">
                                                <ul>
                                                    {{ $lich->date }}
                                                    {{ $lich->time }}
                                                </ul>
                                                {{-- @foreach ($lich['date'] as $n)
                                                        <span>
                                                            <strong>{{ date('d-m-Y', strtotime($n->date)) }}</strong>
                                                        </span>
                                                        <ul>
                                                            @foreach ($n['id_phong'] as $p)
                                                                <div class="mb-4">
                                                                    <span
                                                                        class="lichphong">{{ $p->phong->tenphong }}</span>
                                                                    @foreach ($p['time'] as $t)
                                                                        <a href="datve/{{ $t->id }}">
                                                                            <li>{{ date('G:i', strtotime($t->time)) }}
                                                                            </li>
                                                                        </a>
                                                                    @endforeach
                                                                </div>
                                                            @endforeach
                                                        </ul>
                                                    @endforeach --}}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h3 class="phimlienquan">Phim Đang Chiếu</h3>
                <div class="row">
                    @foreach ($phimlq as $plq)
                        {{-- {{ dd($phimlq) }} --}}
                        <div class="col-12 ">
                            <div class="movie movielienquan">
                                <img src="{{ asset('./images/' . $plq->movie_image) }}" alt="image" width="100%">
                                <div class="decription-hover">
                                    <a href="{{ asset('movie-detail/' . $plq->id) }}"><button
                                            class="btn btn-outline-secondary">Xem chi tiết</button></a>
                                </div>
                            </div>
                            <div class="title-plq">
                                <h4 class="text-uppercase">{{ $plq->movie_name }}</h4>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="btn btn-outline-info mt-4 nutxemthem"> Xem Thêm</button>
            </div>
        </div>
    </div>
@stop
