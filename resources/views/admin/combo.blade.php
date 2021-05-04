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
                                    ComBo
                                </div>
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Thêm Combo
                                </button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role=" document" style="max-width: 45% !important">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title"> Thêm Combo</h5>
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
                                                                    <label for="exampleInputEmail1">Tên Combo</label>
                                                                    <input type="text" name="tencombo"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Chi Tiết</label>
                                                                    <input type="text" name="chitiet"
                                                                        class="form-control">
                                                                </div> 
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Giá</label>
                                                                    <input type="text" name="gia"
                                                                        class="form-control">
                                                                </div>                                      
                                                                <div class="form-group">
                                                                    <input type="submit" name="show_times" type="submit"
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
                                <li class="breadcrumb-item"><a href="{{ asset('admin/index') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">quản lý Combo</li>
                            </ol>
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table mr-1"></i>
                                   Lịch Chiếu
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Tên ComBo</th>
                                                    <th>Chi Tiết</th>
                                                    <th>Giá</th>
                                                    <th>Crate Date</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Tên ComBo</th>
                                                    <th>Chi Tiết</th>
                                                    <th>Giá</th>
                                                    <th>Crate Date</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                @foreach ($combolist as $combo)
                                                
                                                    <tr>
                                                        <td>{{ $combo->id }}</td>
                                                        <td>{{ $combo->tencombo }}</td>
                                                        <td>{{ $combo->chitiet}}</td>
                                                        <td>{{ $combo->gia }}</td>
                                                        <td>{{ $combo->created_at }}</td>
                                                        <td>
                                                            <a href="{{ asset('admin/delete-combo/' .$combo->id) }}"
                                                                onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger">
                                                                <span class="glyphicon glyphicon-trash"></span> Xóa</a>
                                                        </td>                                             
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>                             
                            </div>
                       </div>
                    </main>
                </div>
            </body>
        </div>
    </section>
@stop
