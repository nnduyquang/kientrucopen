<div class="container-fluid" id="h_3" style="background-image: url({{URL::asset('images/bg/footer-background.jpg')}});">
    <div class="container pb-5">
        <div class="row">
            <div class="col-md-12 text-center pb-5">
                <h3><span>CHÚNG TÔI</span> THỰC HIỆN</h3>
            </div>
            @foreach($data['services'] as $key3=>$item3)
                <div class="col-md-4 wow fadeInLeft" data-wow-delay="200ms">
                    <div class="thuc-hien">
                        <div class="img-bg"
                             style="background-image: url({{URL::asset($item3->image)}});"></div>
                    </div>

                    <h4>{{$item3->title}}</h4>
                    <p>{{$item3->description}}</p>
                    <div class="btn-xct"><a href="{{URL::asset('dich-vu/'.$item3->path)}}">XEM CHI TIẾT</a></div>
                </div>
            @endforeach
            {{--<div class="col-md-4 wow fadeInLeft" data-wow-delay="400ms">--}}
            {{--<div class="thuc-hien">--}}
            {{--<div class="img-bg" style="background-image: url({{URL::asset('images/h2-700x466.jpg')}});"></div>--}}
            {{--</div>--}}
            {{--<h4>THIẾT KẾ <span>VĂN PHÒNG</span></h4>--}}
            {{--<p>Với nhân sự gồm 10 Kiến Trúc Sư Dự Án trẻ, nhiệt huyết, sáng tạo cùng với môi trường làm việc khoa--}}
            {{--học, chuyên nghiệp. Open Design cam kết với khách hàng tạo ra những sản phẩm đảm bảo các nhu cầu ở--}}
            {{--hoàn hảo nhất !</p>--}}
            {{--<div class="btn-xct"><a href="{{URL::asset('chi-tiet-du-an.html')}}">XEM CHI TIẾT</a></div>--}}
            {{--</div>--}}
            {{--<div class="col-md-4  wow fadeInLeft" data-wow-delay="600ms">--}}

            {{--<div class="thuc-hien">--}}
            {{--<div class="img-bg" style="background-image: url({{URL::asset('images/n-700x466.jpg')}});"></div>--}}
            {{--</div>--}}
            {{--<h4>THIẾT KẾ <span>QUÁN COFFEE</span></h4>--}}
            {{--<p>Với nhân sự gồm 10 Kiến Trúc Sư Dự Án trẻ, nhiệt huyết, sáng tạo cùng với môi trường làm việc khoa--}}
            {{--học, chuyên nghiệp. Open Design cam kết với khách hàng tạo ra những sản phẩm đảm bảo các nhu cầu ở--}}
            {{--hoàn hảo nhất !</p>--}}
            {{--<div class="btn-xct"><a href="{{URL::asset('chi-tiet-du-an.html')}}">XEM CHI TIẾT</a></div>--}}

            {{--</div>--}}
            @include('frontend.home.h_4')
        </div>
    </div>
</div>