@extends('admin.master')
@section('title')
    Index Page
@endsection
@section('content')
    <section class="content add-cate">
        <div class="body">
            <?php
            $message = Session::get('message');
            if ($message) {
            echo '<span class="text-alert">' . $message . '</span>';
            Session::put('message', null);
            }
            ?>
            <div class="top">
                <div class="title">
                    Phòng Chiếu

                </div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Thêm Phòng
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role=" document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"> Thêm Phòng Chiếu</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <section class="panel">
                                    <div class="panel-body">

                                        <div class="position-center">
                                            <form role="form" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Tên Phòng Chiếu</label>
                                                    <input type="text" name="room_name" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" name="room-show" type="submit"
                                                        class="form-control btn btn-primary" placeholder="Tên danh mục..."
                                                        value="Thêm mới">
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mid">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Tên Phòng Chiếu</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roomlist as $room)               
                        <tr>
                            <td>{{ $room->room_name }}</td>
                            <td>
                                <a href="{{ asset('admin/delete-room/' . $room->room_id) }}"
                                    onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-trash"></span> Xóa</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@stop
