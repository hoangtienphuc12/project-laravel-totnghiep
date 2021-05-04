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

            <body class="sb-nav-fixed">
                <div id="layoutSidenav">
                    <main style="width: 100%">
                        <div class="container-fluid">
                            <div class="top">
                                <div class="title">
                                    Hàng Ghế
                                </div>
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Thêm Hàng
                                </button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                    <label for="exampleInputEmail1">Tên Ghế</label>
                                                                    <input type="text" name="seat_number"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Trạng Thái</label>
                                                                    <select name="movie_status" class="form-control">
                                                                        <option value="1">Trống</option>
                                                                        <option value="2">Đã Đặt</option>
                                                                    </select>    
                                                                </div>
                                                                <!-- Select Room -->
                                                                <div class="form-group">
                                                                    <label class="col-md-4 control-label" for="room_id">Room
                                                                        Show</label>
                                                                    <div class="col-md-4">
                                                                        <select id="room_id" name="room_id"
                                                                            class="form-control">
                                                                            {{-- {{ dd($roomlist) }} --}}
                                                                            @foreach ($roomlist as $room)
                                                                            <option value="{{ $room->room_id }}">
                                                                                {{ $room->room_name }}</option>

                                                                        @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-4 control-label" for="room_id">Row
                                                                        Seat</label>
                                                                    <div class="col-md-4">
                                                                        <select id="room_id" name="row_id"
                                                                            class="form-control">
                                                                            {{-- {{ dd($rowlist) }} --}}
                                                                            @foreach ($rowlist as $row)
                                                                            <option value="{{ $row->row_id }}">
                                                                                {{ $row->row_number }}</option>
                                                                        @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="submit" name="seats_number" type="submit"
                                                                        class="form-control btn btn-primary"
                                                                        placeholder="Tên danh mục..." value="Thêm mới">
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
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active">quản lý phòng chiếu</li>
                            </ol>
                            <div class="card mb-4">
                                <div class="card-body">
                                    <form role="form" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="room_id">Chọn Phòng Chiếu</label>
                                            <div class="col-md-4">
                                                <select id="room_id" name="room_id" class="form-control">
                                                    {{-- {{ dd($roomlist) }} --}}
                                                    @foreach ($roomlist as $room)
                                                    <a href="{{ asset('admin/show-room/' .$room->room_id)}}">
                                                    <option value="{{ $room->room_id }}">
                                                        {{ $room->room_name }}
                                                        </option></a>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table mr-1"></i>
                                    DataTable Example
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>NumberSeat</th>
                                                    <th>RowSeat</th>
                                                    <th>Statust</th>
                                                    <th>Age</th>
                                                    <th>Date Create</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>NumberSeat</th>
                                                    <th>RowSeat</th>
                                                    <th>Statust</th>
                                                    <th>Age</th>
                                                    <th>Date Create</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                @foreach ($seatlist as $seat)
                                                {{-- {{ dd($seat) }} --}}
                                                    <tr>
                                                        <td>{{ $seat->seat_number }}</td>
                                                        <td>{{ $seat->row_number }}</td>
                                                        <td>{{ $seat->status}}</td>
                                                        <td>61</td>
                                                        <td>{{ $seat->created_at }}</td>
                                                        <td>
                                                            <a href="{{ asset('admin/delete-seat/' .$seat->seat_id) }}"
                                                                onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger">
                                                                <span class="glyphicon glyphicon-trash"></span> Xóa</a>
                                                        </td>                                             
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    {{-- <div class="row">
        
                                        <div class="col-sm-5 text-center">
                                          <small class="text-muted inline m-t-sm m-b-sm">Hiện thị 5 sản phẩm trên 1 trang</small>
                                        </div>        
                                        <div class="col-sm-7 text-right text-center-xs">                
                                          <ul class="pagination pagination-sm m-t-none m-b-none">
                                            {!!$seatlist->links()!!}
                                          </ul>
                                        </div>
                                    </div>  --}}
                                </div>
                              
                             
                            </div>

                        </div>
                    </main>
                </div>
            </body>
        </div>
    </section>
@stop
