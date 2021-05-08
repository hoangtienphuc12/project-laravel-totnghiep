@extends('admin.master')
@section('title')
    Index Page
@endsection
@section('content')
    <section class="content comming-soon">
        <div class="body">
            <div class="top">
                <div class="title"> Phim Sắp Chiếu </div>
                {{-- <a class="button-add" href="{{ asset('/admin/add-movies') }}">
                    <i class="bi bi-plus"></i>
                    <span>Thêm phim</span>
                </a> --}}
                {{-- <-----modal-------> --}}
                {{-- <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="/admin/coming-soon">
                    @csrf --}}
                @include('layouts.message')
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Thêm Phim
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role=" document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Movies</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="POST" role="form" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <fieldset>
                                        <!-- Text input-->
                                        <div class="parent w-100">
                                            <div class="form-group">

                                                <label class="col-md-4 control-label" for="movie_name"></i>Tên Phim</label>
                                                <div class="col-md-4">
                                                    <input id="movie_name" name="movie_name" placeholder="MOVIE NAME"
                                                        class="form-control input-md" required="" type="text">

                                                </div>

                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="movie_directors">Đạo Diễn</label>
                                                <div class="col-md-4">
                                                    <input id="movie_directors" name="movie_directors"
                                                        placeholder="MOVIE DESCRIPTION" class="form-control input-md"
                                                        required="" type="text">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="parent w-100">
                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="movie_actors">Diễn Viên</label>
                                                <div class="col-md-4">
                                                    <input id="movie_actors" name="movie_actors" placeholder="Movie Actors"
                                                        class="form-control input-md" required="" type="text">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="movie_time">Thời Lượng</label>
                                                <div class="col-md-4">
                                                    <input id="movie_time" name="movie_time" placeholder="Movie Time"
                                                        class="form-control input-md" required="" type="text">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="parent w-100">
                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="movie_language">NGôn Ngữ</label>
                                                <div class="col-md-4">
                                                    <input id="movie_language" name="movie_language"
                                                        placeholder="Movie Language" class="form-control input-md"
                                                        required="" type="text">

                                                </div>
                                            </div>

                                            <!-- Textarea -->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="movie_description">Chi Tiết
                                                    Phim</label>
                                                <div class="col-md-4">
                                                    <textarea class="form-control" id="movie_description"
                                                        name="movie_description"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="parent w-100">

                                            <!-- Textarea -->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="movie_rated">Độ Tuổi</label>
                                                <div class="col-md-4">
                                                    <input id="movie_rated" name="movie_rated" placeholder="Movie Rated"
                                                        class="form-control input-md" required="" type="text">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="movie_releasetime">Thời Gian Phát
                                                    Hành</label>
                                                <div class="col-md-4">
                                                    <input value="{{ date('Y/m/d') }}" id="movie_releasetime"
                                                        name="movie_releasetime" placeholder="Movie Releasetime"
                                                        class="form-control input-md" required="" type="date">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="parent w-100">
                                            <!-- Select Basic -->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="movie_cate">Thể Loại phim</label>
                                                <div class="col-md-4">
                                                    <select id="movie_cate" name="movie_cate" class="form-control">
                                                        <option selected>Danh Mục Phim</option>
                                                        @foreach ($catelist as $cate)
                                                            <option value="{{ $cate->category_id }}">
                                                                {{ $cate->category_name }}</option>

                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Trạng Thái</label>
                                                <select name="movie_status" class="form-control">
                                                    <option value="1">Sắp Chiếu</option>
                                                    <option value="2">Đang Chiếu</option>
                                                </select>
                                            </div>
                                            <!--Rating Movies-->
                                        </div>
                                        <!-- File Button -->
                                        <div class="parent w-100">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="filebutton">Movie Image</label>
                                                <div class="col-md-4">
                                                    <input id="movie_image" name="movie_image" class="input-file"
                                                        type="file">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="movie_rating">Rating</label>
                                                <div class="rating">
                                                    <span class="starRating">
                                                        <input id="movie_rating" type="radio" name="movie_rating" value="5">
                                                        <label for="movie_rating">5</label>
                                                        <input id="movie_rating" type="radio" name="movie_rating" value="4">
                                                        <label for="movie_rating">4</label>
                                                        <input id="movie_rating" type="radio" name="movie_rating" value="3"
                                                            checked>
                                                        <label for="movie_rating">3</label>
                                                        <input id="movie_rating" type="radio" name="movie_rating" value="2">
                                                        <label for="movie_rating">2</label>
                                                        <input id="movie_rating" type="radio" name="movie_rating" value="1">
                                                        <label for="movie_rating">1</label>
                                                    </span>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <div class="form-group">
                                                    <div class="col-md-4">
                                                        <button id="singlebutton" name="singlebutton" type="submit"
                                                            class="btn btn-primary">Thêm</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- </form> --}}
                                    </fieldset>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- </form> --}}


                {{-- <-----modal-------> --}}

            </div>
            <div class="mid">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tên Phim</th>
                            <th scope="col">Đạo Diễn</th>
                            <th scope="col">Thời Lượng</th>
                            <th scope="col">Trạng Thái</th>
                            <th scope="col">Ngôn Ngữ</th>
                            <th scope="col">Thời Gian Phát Hành</th>
                            <th scope="col">Thể Loại</th>
                            <th scope="col">Images</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($movielist as $movie)
                            <tr>
                                <th scope="row">{{ $movie->id }}</th>
                                <td>{{ $movie->movie_name }}</td>
                                <td>{{ $movie->movie_directors }}</td>
                                <td>{{ $movie->movie_time }}</td>
                                <td>{{ $movie->movie_status}}</td>
                                <td>{{ $movie->movie_language }}</td>
                                <td>{{ $movie->movie_releasetime }}</td>
                                <td>{{ $movie->category_name }}</td>
                                <td><a href="#"><img style="width: 100px"
                                            src="{{ asset('./images/' . $movie->movie_image) }}"
                                            class="img-thumbnail"></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            {{-- <div class="bottom"></div> --}}
        </div>
    </section>
@stop
