
@extends('main')

@section('content')
    
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="widget no-padding blank customtop">
                        <div class="timeline-sec">

                            @foreach ($dienbiens as $dienbien)

                            <ul>
                                <li>
                                    <div class="timeline">
                                        <div class="user-timeline">
                                            <span>
                                                <img src="/frontend/img/johnny-depp.jpg" alt="Icon diễn biến dịch">
                                                </span>
                                            </div>
                                            <div class="timeline-detail">
                                                <div class="timeline-head">
                                                    <h3> {{ $dienbien->time }}</h3>
                                                </div>
                                                <div class="timeline-content">
                                                    {!! $dienbien->content !!}
                                                </div>
                                            </div>
                                        </div>
                                </li>
                            </ul>
                            @endforeach

                            <ul class="phantrang">
                                {!! $dienbiens->links() !!}
                            </ul>
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