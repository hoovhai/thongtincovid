@extends('main')

@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="mapscovid" style="margin-top: 20px;">
                    @foreach($news as $new)
                    <div class="row news">
                        <div class="image col-md-6">
                            <img src="{{ $new->thumb }}" alt="thongtin">
                        </div>
                        <div class="info col-md-5">
                            <h2> <a href="/tin-tuc/chi-tiet/290012323-{{$new->id}}" target="_blank"> {!! $new->description !!} </a> </h2>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6">
                    <div class="statistical">
                        <div class="statistical_vn">
                            <span class="box-vn " tabindex="1">Việt Nam</span>
                            <div class="row" style="margin-top: 30px !important;">
                            
                                <div class="col text-center text-uppercase text-danger-new" tabindex="1">
                                    Số ca nhiễm <br> <span class="font24">{{$dataSum->socanhiemvn}}</span>
                                </div>
                                <div class="col text-center text-uppercase text-warning1" tabindex="1">
                                    Đang điều trị <br> <span class="font24">{{$dataSum->dangdieutrivn}}</span>
                                </div>
                                <div class="col text-center text-uppercase text-success" tabindex="1">
                                    Khỏi <br> <span class="font24">{{$dataSum->khoivn}}</span>
                                </div>
                                <div class="col text-center text-uppercase text-danger-new1" tabindex="1">
                                    Tử vong <br> <span class="font24">{{$dataSum->chetvn}}</span>
                                </div>
                                
                            </div>
                        </div>
                        <hr>
                        <span class="box-tg " tabindex="1">Thế giới</span>
                        <div class="statistical_world">
                            <div class="row" style="margin-top: 30px !important;">
                            
                                <div class="col text-center text-uppercase text-danger-new" tabindex="1">
                                Tổng ca nhiễm <br> <span class="font24">{{$dataSum->socanhiemtg}}</span>
                                </div>
                                <div class="col text-center text-uppercase text-warning1" tabindex="1">
                                    Đang nhiễm <br> <span class="font24">{{$dataSum->dangdieutritg}}</span>
                                </div>
                                <div class="col text-center text-uppercase text-success" tabindex="1">
                                    Khỏi <br> <span class="font24">{{$dataSum->khoitg}}</span>
                                </div>
                                <div class="col text-center text-uppercase text-danger-new1" tabindex="1">
                                    Tử vong <br> <span class="font24">{{$dataSum->chettg}}</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="table-responsive" id="sailorTableArea">
            <table id="sailorTable" class="table table-striped table-covid19">
                <thead>
                    <tr style="position: sticky;top: 0px; z-index: 1;">
                        <th scope="col">Tỉnh/TP</th>
                        <th scope="col">Tổng số ca</th>
                        <th scope="col">Hôm nay</th>
                        <th scope="col">Tử vong</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataTables as $dataTables)
                        <tr style="font-weight: 600">
                            <td> {{$dataTables->tinh}} </td>
                            <td style="font-weight: bold;"> {{$dataTables->tongsoca}} </td>
                            <td class="text-danger-new"> {{$dataTables->homnay}} </td>
                            <td>{{$dataTables->tuvong}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</div>
@endsection