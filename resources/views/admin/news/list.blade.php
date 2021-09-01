@extends('admin.main')
@section('admin_content')
<div class="card-body">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width:50px">ID</th>
                <th>Tên</th>
                <th>Tác Giả</th>
                <th>Nội Dung</th>
                <th>Nguồn</th>
                <th>Ảnh</th>
                <th style="width:100px">Trạng Thái</th>
                <th style="width:100px"> &nbsp; </th>
            </tr>
        </thead>
        <tbody>
            {!! \App\Helpers\Helper::datas($news, 'news') !!}
        </tbody>
    </table>
    {!! $news->links() !!}
</div>
@endsection