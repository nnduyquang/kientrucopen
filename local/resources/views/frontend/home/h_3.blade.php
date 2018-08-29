<style>
    {{--#h_3 {--}}
        {{--background-image: url({{URL::asset('images/bg/footer-background.jpg')}});--}}
        {{---webkit-background-size: cover;--}}
        {{--background-size: cover;--}}
        {{--background-color: #515151;--}}
        {{--color: #2a2a2a;--}}
        {{--padding-top: 68px;--}}
        {{--padding-bottom: 68px;--}}
        {{--color: whitesmoke;--}}
    {{--}--}}

    {{--#h_3 a {--}}
        {{--color: whitesmoke;--}}
    {{--}--}}

    {{--#h_3 h3 {--}}
        {{--font-size: 24px;--}}
        {{--position: relative;--}}
    {{--}--}}

    {{--#h_3 h3:before {--}}
        {{--position: absolute;--}}
        {{--content: '';--}}
        {{--height: 3px;--}}
        {{--width: 58px;--}}
        {{--background-color: #fff;--}}
        {{--top: 130%;--}}
        {{--left: 48%;--}}
        {{--transform: skewX(38deg) translateX(-50%);--}}
    {{--}--}}

    {{--#h_3 h3:after {--}}
        {{--position: absolute;--}}
        {{--content: '';--}}
        {{--height: 3px;--}}
        {{--width: 38px;--}}
        {{--background-color: #edb50c;--}}
        {{--top: 130%;--}}
        {{--left: calc(45% + 66px);--}}
        {{--/*transform: translateX(-40%);*/--}}
        {{--transform: skewX(38deg);--}}
    {{--}--}}

    {{--#h_3 h3 span, #h_3 h4 span {--}}
        {{--color: #edb50c;--}}
    {{--}--}}

    {{--#h_3 h4 {--}}
        {{--width: fit-content;--}}
        {{--margin: auto;--}}
        {{--margin-top: 26px;--}}
        {{--font-size: 20px;--}}
    {{--}--}}

    {{--#h_3 p {--}}
        {{--width: 90%;--}}
        {{--margin: auto;--}}
        {{--font-size: 12px;--}}
        {{--line-height: 20px;--}}
        {{--padding-top: 10px;--}}
    {{--}--}}

    {{--#h_3 .thuc-hien {--}}

        {{--position: relative;--}}
        {{--width: 90%;--}}
        {{--margin: auto;--}}
        {{--height: 218px;--}}
        {{--border: 5px whitesmoke solid;--}}
        {{--cursor: pointer;--}}
        {{--transition: .3s;--}}

    {{--}--}}

    {{--#h_3 .thuc-hien:hover {--}}
        {{--/*overflow: hidden;*/--}}
    {{--}--}}

    {{--#h_3 .thuc-hien .img-bg {--}}
        {{--position: absolute;--}}
        {{--top: 5%;--}}
        {{--left: 4%;--}}
        {{--width: 100%;--}}
        {{--height: 100%;--}}
        {{---webkit-background-size: cover;--}}
        {{--background-size: cover;--}}
        {{--background-position: center center;--}}
        {{--overflow: hidden;--}}
        {{--transition: .3s;--}}
        {{--/*transform: scale(1.2);*/--}}
    {{--}--}}

    {{--#h_3 .thuc-hien:hover .img-bg {--}}
        {{--top: 0%;--}}
        {{--left: 0%;--}}
        {{--/*transform: scale(1.2);*/--}}
    {{--}--}}

    {{--#h_3 .btn-xct {--}}
        {{--width: fit-content;--}}
        {{--margin: auto;--}}
        {{--margin-top: 30px;--}}
        {{--padding: 16px 0px 14px 0px;--}}
        {{--border: 2px solid #edb50c;--}}
        {{--background-color: transparent;--}}
        {{--transition: .3s;--}}
        {{--position: relative;--}}
    {{--}--}}

    {{--#h_3 .btn-xct:after {--}}
        {{--position: absolute;--}}
        {{--content: '';--}}
        {{--width: 38px;--}}
        {{--height: 1px;--}}
        {{--background-color: #edb50c;--}}
        {{--top: 50%;--}}
        {{--transform: translateY(-50%);--}}
        {{--left: 90%;--}}
    {{--}--}}

    {{--#h_3 .btn-xct a {--}}
        {{--color: #edb50c;--}}
        {{--font-size: 14px;--}}
        {{--transition: .3s;--}}
        {{--padding: 16px 22px 14px 22px;--}}
    {{--}--}}

    {{--#h_3 .btn-xct:hover {--}}
        {{--background-color: #edb50c;--}}
    {{--}--}}

    {{--#h_3 .btn-xct:hover a {--}}
        {{--color: whitesmoke;--}}
    {{--}--}}

    {{--@media only screen and (max-width: 800px) {--}}

        {{--#h_3 h3:before {--}}
            {{--position: absolute;--}}
            {{--content: '';--}}
            {{--height: 3px;--}}
            {{--width: 58px;--}}
            {{--background-color: #fff;--}}
            {{--top: 130%;--}}
            {{--left: 42%;--}}
            {{--transform: skewX(38deg) translateX(-50%);--}}
        {{--}--}}

        {{--#h_3 h3:after {--}}
            {{--position: absolute;--}}
            {{--content: '';--}}
            {{--height: 3px;--}}
            {{--width: 38px;--}}
            {{--background-color: #edb50c;--}}
            {{--top: 130%;--}}
            {{--left: calc(45% + 16px);--}}
            {{--/*transform: translateX(-40%);*/--}}
            {{--transform: skewX(38deg);--}}
        {{--}--}}

        {{--#h_3 .btn-xct{--}}
            {{--margin-bottom: 30px;--}}
        {{--}--}}

    {{--}--}}

</style>

<div class="container-fluid" id="h_3" style="background-image: url({{URL::asset('images/bg/footer-background.jpg')}});">
    <div class="container pb-5">
        <div class="row">
            <div class="col-md-12 text-center pb-5">
                <h3><span>CHÚNG TÔI</span> THỰC HIỆN</h3>
            </div>

            <div class="col-md-4 wow fadeInLeft" data-wow-delay="200ms">
                <div class="thuc-hien">
                    <div class="img-bg"
                         style="background-image: url({{URL::asset('images/v1-Hoan-thien-768x462.jpg')}});"></div>
                </div>

                <h4>THIẾT KẾ <span>NHÀ Ở</span></h4>
                <p>Với nhân sự gồm 10 Kiến Trúc Sư Dự Án trẻ, nhiệt huyết, sáng tạo cùng với môi trường làm việc khoa
                    học, chuyên nghiệp. Open Design cam kết với khách hàng tạo ra những sản phẩm đảm bảo các nhu cầu ở
                    hoàn hảo nhất !</p>
                <div class="btn-xct"><a href="{{URL::asset('chi-tiet-du-an.html')}}">XEM CHI TIẾT</a></div>
            </div>
            <div class="col-md-4 wow fadeInLeft" data-wow-delay="400ms">
                <div class="thuc-hien">
                    <div class="img-bg" style="background-image: url({{URL::asset('images/h2-700x466.jpg')}});"></div>
                </div>
                <h4>THIẾT KẾ <span>VĂN PHÒNG</span></h4>
                <p>Với nhân sự gồm 10 Kiến Trúc Sư Dự Án trẻ, nhiệt huyết, sáng tạo cùng với môi trường làm việc khoa
                    học, chuyên nghiệp. Open Design cam kết với khách hàng tạo ra những sản phẩm đảm bảo các nhu cầu ở
                    hoàn hảo nhất !</p>
                <div class="btn-xct"><a href="{{URL::asset('chi-tiet-du-an.html')}}">XEM CHI TIẾT</a></div>
            </div>
            <div class="col-md-4  wow fadeInLeft" data-wow-delay="600ms">

                <div class="thuc-hien">
                    <div class="img-bg" style="background-image: url({{URL::asset('images/n-700x466.jpg')}});"></div>
                </div>
                <h4>THIẾT KẾ <span>QUÁN COFFEE</span></h4>
                <p>Với nhân sự gồm 10 Kiến Trúc Sư Dự Án trẻ, nhiệt huyết, sáng tạo cùng với môi trường làm việc khoa
                    học, chuyên nghiệp. Open Design cam kết với khách hàng tạo ra những sản phẩm đảm bảo các nhu cầu ở
                    hoàn hảo nhất !</p>
                <div class="btn-xct"><a href="{{URL::asset('chi-tiet-du-an.html')}}">XEM CHI TIẾT</a></div>

            </div>


            <div class="col-md-12 pt-5 text-center pb-5">
                <h3><span>DỰ ÁN</span> GẦN ĐÂY</h3>
            </div>



            <div class="col-md-12 text-center">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                           aria-controls="home" aria-selected="true">TẤT CẢ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                           aria-controls="profile" aria-selected="false">COFFEE SHOP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab"
                           aria-controls="messages" aria-selected="false">HOMESTAY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab"
                           aria-controls="settings" aria-selected="false">KHÁCH SẠN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="home-tab" data-toggle="tab" href="#home2" role="tab"
                           aria-controls="home" aria-selected="true">NHÀ PHỐ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile2" role="tab"
                           aria-controls="profile" aria-selected="false">NỘI THẤT NHÀ Ở</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages2" role="tab"
                           aria-controls="messages" aria-selected="false">SHOP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="home-tab" data-toggle="tab" href="#home3" role="tab"
                           aria-controls="home" aria-selected="true">VILLA</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane pt-3 pb-3 active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-3 p-0 col-sm-4 col-6 du-an">
                                <div class="du-an-overlay"
                                     style="background-image:url({{URL::asset('images/project/a3-700x466.jpg')}});">

                                </div>
                                <a href="">KHÁCH SẠN MINI ĐÀ NẴNG
                                </a>
                            </div>
                            <div class="col-md-3 p-0 col-sm-4 col-6 du-an">
                                <div class="du-an-overlay"
                                     style="background-image: url({{URL::asset('images/project/a2-700x466.jpg')}});">

                                </div>
                                <a href="">KHÁCH SẠN MINI
                                </a>
                            </div>
                            <div class="col-md-3 p-0 col-sm-4 col-6 du-an">
                                <div class="du-an-overlay"
                                     style="background-image: url({{URL::asset('images/project/1-4-700x466.jpg')}});">

                                </div>
                                <a href="">HOMESTAY HỘI AN
                                </a>
                            </div>
                            <div class="col-md-3 p-0 col-sm-4 col-6 du-an">
                                <div class="du-an-overlay"
                                     style="background-image: url({{URL::asset('images/project/12421420_10209464547034338_502459870_n-700x466.jpg')}});">

                                </div>
                                <a href="">NAIL MINH THIÊN ĐÀ NẴNG
                                </a>
                            </div>
                            <div class="col-md-3 p-0 col-sm-4 col-6 du-an">
                                <div class="du-an-overlay"
                                     style="background-image: url({{URL::asset('images/project/4-3-700x466.jpg')}});">

                                </div>
                                <a href="">HOMESTAY QUẢNG BÌNH
                                </a>
                            </div>
                            <div class="col-md-3 p-0 col-sm-4 col-6 du-an">
                                <div class="du-an-overlay"
                                     style="background-image: url({{URL::asset('images/project/NHÀ-HÀNG-2-700x466.jpg')}});">

                                </div>
                                <a href="">HOMESTAY HỘI AN
                                </a>
                            </div>
                            <div class="col-md-3 p-0 col-sm-4 col-6 du-an">
                                <div class="du-an-overlay"
                                     style="background-image: url({{URL::asset('images/project/v5-hoan-thien-700x466.jpg')}});">

                                </div>
                                <a href="">VILLA HỘI AN
                                </a>
                            </div>
                            <div class="col-md-3 p-0 col-sm-4 col-6 du-an">
                                <div class="du-an-overlay"
                                     style="background-image: url({{URL::asset('images/project/2-2-700x466.jpg')}});">

                                </div>
                                <a href="">PHÒNG NGỦ MỘC
                                </a>
                            </div>
                            <div class="col-md-3 p-0 col-sm-4 col-6 du-an">
                                <div class="du-an-overlay"
                                     style="background-image: url({{URL::asset('images/project/1-2-700x466.jpg')}});">

                                </div>
                                <a href="">NHÀ PHỐ 3 TẦNG
                                </a>
                            </div>
                            <div class="col-md-3 p-0 col-sm-4 col-6 du-an">
                                <div class="du-an-overlay"
                                     style="background-image: url({{URL::asset('images/project/1.5-700x466.jpg')}});">

                                </div>
                                <a href="">NHÀ PHỐ MẶT TIỀN
                                </a>
                            </div>
                            <div class="col-md-3 p-0 col-sm-4 col-6 du-an">
                                <div class="du-an-overlay"
                                     style="background-image: url({{URL::asset('images/project/h2-700x466.jpg')}});">

                                </div>
                                <a href="">NỘI THẤT NHÀ PHỐ
                                </a>
                            </div>
                            <div class="col-md-3 p-0 col-sm-4 col-6 du-an">
                                <div class="du-an-overlay"
                                     style="background-image: url({{URL::asset('images/project/dang-1-700x466.jpg')}});">

                                </div>
                                <a href="">NỘI THẤT NHÀ HỘI AN
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane pt-3 pb-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-md-12 text-center">

                                <img class="pt-3" src="{{URL::asset('images/update.png')}}" alt=""
                                     style="width: 100px;height: auto;">
                                <p class="pt-3">OPPPS DỮ LIỆU ĐANG UPDATE......!</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane pt-3 pb-3" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                        <div class="row">

                            <div class="col-md-3 p-0 col-sm-4 col-6 du-an">
                                <div class="du-an-overlay"
                                     style="background-image: url({{URL::asset('images/project/4-3-700x466.jpg')}});">

                                </div>
                                <a href="">HOMESTAY QUẢNG BÌNH
                                </a>
                            </div>
                            <div class="col-md-3 p-0 col-sm-4 col-6 du-an">
                                <div class="du-an-overlay"
                                     style="background-image: url({{URL::asset('images/project/NHÀ-HÀNG-2-700x466.jpg')}});">

                                </div>
                                <a href="">HOMESTAY HỘI AN
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane pt-3 pb-3" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                        <div class="row">
                            <div class="col-md-3 p-0 col-sm-4 col-6 du-an">
                                <div class="du-an-overlay"
                                     style="background-image:url({{URL::asset('images/project/a3-700x466.jpg')}});">

                                </div>
                                <a href="">KHÁCH SẠN MINI ĐÀ NẴNG
                                </a>
                            </div>
                            <div class="col-md-3 p-0 col-sm-4 col-6 du-an">
                                <div class="du-an-overlay"
                                     style="background-image: url({{URL::asset('images/project/a2-700x466.jpg')}});">

                                </div>
                                <a href="">KHÁCH SẠN MINI
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane pt-3 pb-3" id="home2" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-3 p-0 col-sm-4 col-6 du-an">
                                <div class="du-an-overlay"
                                     style="background-image: url({{URL::asset('images/project/1-2-700x466.jpg')}});">

                                </div>
                                <a href="">NHÀ PHỐ 3 TẦNG
                                </a>
                            </div>
                            <div class="col-md-3 p-0 col-sm-4 col-6 du-an">
                                <div class="du-an-overlay"
                                     style="background-image: url({{URL::asset('images/project/1.5-700x466.jpg')}});">

                                </div>
                                <a href="">NHÀ PHỐ MẶT TIỀN
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane pt-3 pb-3" id="profile2" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-md-3 p-0 col-sm-4 col-6 du-an">
                                <div class="du-an-overlay"
                                     style="background-image: url({{URL::asset('images/project/h2-700x466.jpg')}});">

                                </div>
                                <a href="">NỘI THẤT NHÀ PHỐ
                                </a>
                            </div>
                            <div class="col-md-3 p-0 col-sm-4 col-6 du-an">
                                <div class="du-an-overlay"
                                     style="background-image: url({{URL::asset('images/project/dang-1-700x466.jpg')}});">

                                </div>
                                <a href="">NỘI THẤT NHÀ HỘI AN
                                </a>
                            </div>
                            <div class="col-md-3 p-0 col-sm-4 col-6 du-an">
                                <div class="du-an-overlay"
                                     style="background-image: url({{URL::asset('images/project/2-2-700x466.jpg')}});">

                                </div>
                                <a href="">PHÒNG NGỦ MỘC
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane pt-3 pb-3" id="messages2" role="tabpanel" aria-labelledby="messages-tab">
                        <div class="row">
                            <div class="col-md-3 p-0 col-sm-4 col-6 du-an">
                                <div class="du-an-overlay"
                                     style="background-image: url({{URL::asset('images/project/12421420_10209464547034338_502459870_n-700x466.jpg')}});">

                                </div>
                                <a href="">NAIL MINH THIÊN ĐÀ NẴNG
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane pt-3 pb-3" id="home3" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-3 p-0 col-sm-4 col-6 du-an">
                                <div class="du-an-overlay"
                                     style="background-image: url({{URL::asset('images/project/NHÀ-HÀNG-2-700x466.jpg')}});">

                                </div>
                                <a href="">HOMESTAY HỘI AN
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-md-12 text-center mt-5">
                <div><a class="btn-xtcdan d-flex align-items-center" href="{{URL::asset('du-an')}}"><span>XEM TẤT CẢ DỰ ÁN</span> <i
                                class="pl-2 fas fa-angle-right"></i></a></div>
            </div>

        </div>
    </div>
</div>