@extends('admin.main')
@section('admin_content')
<div class="card-body">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width:50px">ID</th>
                <th>Time</th>
                <th>Content</th>
                <th>Active</th>
                <th style="width:200px"> &nbsp; </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dienbiens as $dienbien)
                <tr>
                    <td>  {{ $dienbien->id }} </td>
                    <td>  {{ $dienbien->time }} </td>
                    <td>  {!! $dienbien->content !!} </td>
                    <td>  {!! \App\Helpers\Helper::getActive($dienbien->active) !!} </td>
                    <td>
                        <a href="/admin/dienbien/edit/{{$dienbien->id}}">
                            <i class="fas fa-edit"></i>
                        </a> &nbsp;
                        <a href="#" onclick=" removeRow({{$dienbien->id}}, '/admin/dienbien/destroy')">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $dienbiens->links() !!}
</div>
@endsection