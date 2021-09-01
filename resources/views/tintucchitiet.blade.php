@extends('main')

@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="widget no-padding blank customtop">
                        <div class="custom-chitiet mb-1">
							<div class="tags">
                                <a title="Nhấn enter để kich hoạt" href="/tin-tuc" class="color5">Tin tức</a>
                            </div>
						</div>
                        <h5>
                            <span class="asset-title d-inline">{{$new->title}}</span>
                        </h5>
                        <p class="text-justify">  {{$new->description}} </p>
                        <img src="{{$new->thumb}}">
                        <div class="content-news">
                            {!!$new->content!!}
                        </div>
                        <div class="content-author">
                            <span>Tác Giả: </span>{!!$new->author!!}
                        </div>
                        <div class="content-source">
                            <span> Nguồn </span> <a href="{!!$new->source!!}" target="_blank"> {!!$new->source!!} </a>
                        </div>
                    </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="box-ddn"><span class="text-vang">Đường dây nóng</span><br>
                    <a class="hotline1" href="tel:19009095" title="Nhấn enter để kich hoạt">19009095</a><br>
                </div>

                <div>
                    <a href="https://ncov.moh.gov.vn/documents/20182/6848000/Duongdaynong/69d6a130-defa-4cbc-92f7-67d50937d68f?t=1581123135834" title="Nhấn enter để kich hoạt"><img alt="" src="https://ncov.moh.gov.vn/documents/20182/6848000/dnnong.jpg/4cf1fea6-7856-4fe0-bbef-50a7c2dc0ba8?t=1581317123857" width="100%">
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection