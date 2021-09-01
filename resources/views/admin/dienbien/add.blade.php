@extends('admin.main')
@section('admin_content')
    <!-- form start -->
        <form action="create" method="post">
            {{ csrf_field() }}
            <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputEmail1"> Thời Gian </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tên Tin Tức" name="time">
                </div>

                <div class="form-group">
                    <label for="editor1"> Mô Tả Chi Tiết </label>
                    <textarea class="form-control" id="editor1" name="content"></textarea>
                </div>

                <div class="form-group">
                    <label for="form-check"> Trạng Thái  </label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="exampleCheck1" name="active" value="1">
                        <label class="form-check-label" for="exampleCheck1"> Kích hoạt </label>
                        <br>
                        <input type="radio" class="form-check-input" id="exampleCheck2" name="active" value="0">
                        <label class="form-check-label" for="exampleCheck2"> Ẩn </label>
                    </div>
                </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"> Tạo Diễn Biến </button>
                </div>
        </form>
        <!-- /.card-body -->
@endsection