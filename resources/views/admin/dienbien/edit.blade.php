@extends('admin.main')
@section('admin_content')
    <!-- form start -->
        <form action="" method="post">
            {{ csrf_field() }}
            <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputEmail1">Sửa Thời Gian </label> 
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="{{ $dienbien->time }}" name="time"> 
                </div>

                <div class="form-group">
                    <label for="editor1">Sửa Mô Tả Chi Tiết </label>
                    <textarea class="form-control" id="editor1" name="content"> {{ $dienbien->content }} </textarea>
                </div>

                <div class="form-group">
                    <label for="form-check">Sửa Trạng Thái  </label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="exampleCheck1" name="active" value="1" @if($dienbien->active==1) checked @endif>
                        <label class="form-check-label" for="exampleCheck1"> Kích hoạt </label>
                        <br>
                        <input type="radio" class="form-check-input" id="exampleCheck2" name="active" value="0" @if($dienbien->active==0) checked @endif>
                        <label class="form-check-label" for="exampleCheck2"> Ẩn </label>
                    </div>
                </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"> Sửa Diễn Biến </button>
                </div>
        </form>
        <!-- /.card-body -->
@endsection