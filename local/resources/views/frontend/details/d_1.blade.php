<div class="container-fluid" id="d_1">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>{{$data['post']->title}}</h3>
                <span class="sm-title">Dịch vụ {{$data['post']->title}} của kiến trúc Open Design</span>

                {!! $data['post']->content !!}

                <div class="row mt-4 mb-lg-1 mb-5">
                    <div class="col-12">
                        <div id="owl_project" class="owl-carousel owl-theme">
                            @foreach($data['post']->project()->get() as $key=>$item)
                                @foreach($item->posts()->get() as $key2=>$item2)
                                    <div class="owl-items"
                                         style="background-image:url({{URL::asset($item2->image)}});">
                                    </div>
                                @endforeach
                            @endforeach
                        </div>
                    </div>

                </div>

                <style>

                </style>

                <div class="row mt-4 mb-lg-1 mb-5">
                    <div class="col-12">
                        <div id="owl_project2" class="owl-carousel owl-theme">
                            @foreach($data['post']->project()->get() as $key=>$item)
                                @foreach($item->posts()->get() as $key2=>$item2)
                                    <div class="owl-items d-flex flex-column">

                                        <div class="owl-items-1">
                                        <div class="img-bg" style="background-image:url({{URL::asset($item2->image)}});">

                                        </div>
                                        <p><a href="">NHÀ NHỎ THIẾT KẾ</a></p>
                                        </div>

                                        <div class="owl-items-1">
                                            <div class="img-bg" style="background-image:url({{URL::asset($item2->image)}});">

                                            </div>
                                            <p><a href="">NHÀ NHỎ THIẾT KẾ</a></p>
                                        </div>

                                    </div>
                                @endforeach
                            @endforeach
                        </div>
                    </div>

                </div>







            </div>
            <div class="col-md-4" id="post_lq">
                <h3 class="mb-5">DỊCH VỤ <span>LIÊN QUAN</span></h3>

                <div class="d-flex mb-4">
                    <div class="over-lay">
                        <div class="img-overlay"
                             style="background-image:url({{URL::asset('images/h2-700x466.jpg')}});"></div>

                    </div>
                    <div>
                        <h5><a href="{{URL::asset('chi-tiet-du-an.html')}}">THIẾT KẾ VĂN PHÒNG</a></h5>
                        <p>Dịch vụ thiết kế văn phòng từ công ty kiến trúc open design</p>
                    </div>
                </div>

                <div class="d-flex mb-4">
                    <div class="over-lay">
                        <div class="img-overlay"
                             style="background-image:url({{URL::asset('images/n-700x466.jpg')}});"></div>

                    </div>
                    <div>
                        <h5><a href="{{URL::asset('chi-tiet-du-an.html')}}">THIẾT KẾ QUÁN COFFEE</a></h5>
                        <p>Dịch vụ thiết kế văn phòng từ công ty kiến trúc open design</p>
                    </div>
                </div>

                <h3 class="mb-4 mt-5">TAGS <span>LIÊN QUAN</span></h3>
                <div class="tag-lienquan">
                    <a href="">Thiết kế nhà ở</a>
                </div>
                <div class="tag-lienquan">
                    <a href="">Thiết kế văn phòng</a>
                </div>
                <div class="tag-lienquan">
                    <a href="">Open Design</a>
                </div>
                <div class="tag-lienquan">
                    <a href="">Thiết kế Quán Coffee</a>
                </div>
                <div class="tag-lienquan">
                    <a href="">Thiết kế văn phòng đẹp</a>
                </div>
                <div class="tag-lienquan">
                    <a href="">Thiết kế nhà</a>

                </div>
            </div>
        </div>
    </div>
</div>