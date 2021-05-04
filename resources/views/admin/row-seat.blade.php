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
                    Hàng Ghế

                </div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Thêm Hàng
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role=" document" style="max-width: 45% !important">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"> Thêm Hàng ghế</h5>

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
                                                    <label for="exampleInputEmail1">Tên Hàng</label>
                                                    <input type="text" name="row_number" class="form-control">
                                                </div>
                                                <!-- Select Room -->
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" for="room_id">Room Show</label>
                                                    <div class="col-md-4">
                                                        <select id="room_id" name="room_id" class="form-control">
                                                            {{-- {{ dd($roomlist) }} --}}
                                                            @foreach ($roomlist as $room)
                                                                <option value="{{ $room->room_id }}">
                                                                    {{ $room->room_name }}</option>

                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" name="row-seats" type="submit"
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
                        <th scope="col">Tên Hàng Ghế</th>
                        <th scope="col">Tên Phòng Chiếu</th>
                        <th scope="col">Tùy Chỉnh</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    @foreach ($rowlist as $row)
                        <tr>
                            {{-- {{ dd($row) }} --}}
                            <td>{{$row->row_number}}</td>
                            <td>{{$row->room_name}}</td>
                            <td>
                                <a href="{{ asset('admin/delete-row/' .$row->row_id) }}"
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
