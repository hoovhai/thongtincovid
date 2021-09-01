@extends('admin.main')
@section('admin_content')
    <!-- form start -->
        <form action="" method="post">
            {{ csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Sửa Tên Tin Tức </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" {{ $new->title }} " name="title">
                </div>

                <div class="form-group">
                    <label for="nameauthor">Sửa Tác Giả </label>
                    <input type="text" class="form-control" id="nameauthor" placeholder="{{ $new->author }}" name="author">
                </div>

                <div class="form-group">
                    <label for="source">Sửa Nguồn Bài Viết </label>
                    <input type="text" class="form-control" id="nameauthor" placeholder="{{ $new->source }}" name="source">
                </div>

                <div class="form-group">
                    <label for="editor1">Sửa Mô Tả Chi Tiết </label>
                    <textarea class="form-control" id="editor1" name="content"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="form-control" id="upload">
                        </div>
                    </div>
                    <div id="image_show">
                            <img style="width:100px;" src="{{ $new->thumb }}">
                    </div>
                    <input type="hidden" name="thumb" id="file"> 
                </div>
                <div class="form-group">
                    <label for="form-check">Sửa Trạng Thái  </label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="exampleCheck1" name="active" value="1" @if($new->active==1) checked @endif>
                        <label class="form-check-label" for="exampleCheck1"> Kích hoạt </label>
                        <br>
                        <input type="radio" class="form-check-input" id="exampleCheck2" name="active" value="0" @if($new->active==0) checked @endif>
                        <label class="form-check-label" for="exampleCheck2"> Ẩn </label>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary"> Sửa Tin Tức </button>
            </div>
        </form>
        <!-- /.card-body -->
@endsection