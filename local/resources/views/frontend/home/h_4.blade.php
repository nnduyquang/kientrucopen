<div id="h_4" class="col-md-12">
    <h3><span>DỰ ÁN</span> GẦN ĐÂY</h3>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
               aria-controls="home" aria-selected="true">TẤT CẢ</a>
        </li>
        @foreach($data['categoryPost'] as $key=>$item)
            <li class="nav-item">
                <a class="nav-link" id="procjec-{{$item->id}}-tab" data-toggle="tab" href="#project{{$item->id}}"
                   role="tab"
                   aria-controls="profile" aria-selected="false">{{$item->name}}</a>
                <div></div>
            </li>
        @endforeach
        {{--<li class="nav-item">--}}
        {{--<a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab"--}}
        {{--aria-controls="messages" aria-selected="false">HOMESTAY</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
        {{--<a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab"--}}
        {{--aria-controls="settings" aria-selected="false">KHÁCH SẠN</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
        {{--<a class="nav-link" id="home-tab" data-toggle="tab" href="#home2" role="tab"--}}
        {{--aria-controls="home" aria-selected="true">NHÀ PHỐ</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
        {{--<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile2" role="tab"--}}
        {{--aria-controls="profile" aria-selected="false">NỘI THẤT NHÀ Ở</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
        {{--<a class="nav-link" id="messages-tab" data-toggle="tab" href="#a2" role="tab"--}}
        {{--aria-controls="messages" aria-selected="false">SHOP</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
        {{--<a class="nav-link" id="home-tab" data-toggle="tab" href="#home3" role="tab"--}}
        {{--aria-controls="home" aria-selected="true">VILLA</a>--}}
        {{--</li>--}}
    </ul>
    <div class="tab-content">
        <div class="tab-pane pt-3 pb-3 active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="row">
                @foreach($data['categoryPost'] as $key=>$item)
                    @foreach($item->product as $key2=>$item2)
                        <div class="col-md-3 p-0 col-sm-4 col-6 du-an">
                            <div class="du-an-overlay"
                                 style="background-image:url({{URL::asset($item2->image)}});">

                            </div>

                            <style>

                            </style>
                            <a class="title_pro" href="">{{$item2->title}}
                            </a>
                            <div class="nav-btn d-flex">
                                <i class="fas fa-search"></i>
                                <div class="xem-chitiet ml-2 text-center"><a href="">CHI TIẾT</a></div>
                            </div>
                        </div>
                    @endforeach
                @endforeach


                {{--<div class="col-md-3 p-0 col-sm-4 col-6 du-an">--}}
                    {{--<div class="du-an-overlay"--}}
                         {{--style="background-image: url({{URL::asset('images/project/a2-700x466.jpg')}});">--}}

                    {{--</div>--}}
                    {{--<a href="">KHÁCH SẠN MINI--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 p-0 col-sm-4 col-6 du-an">--}}
                    {{--<div class="du-an-overlay"--}}
                         {{--style="background-image: url({{URL::asset('images/project/1-4-700x466.jpg')}});">--}}

                    {{--</div>--}}
                    {{--<a href="">HOMESTAY HỘI AN--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 p-0 col-sm-4 col-6 du-an">--}}
                    {{--<div class="du-an-overlay"--}}
                         {{--style="background-image: url({{URL::asset('images/project/12421420_10209464547034338_502459870_n-700x466.jpg')}});">--}}

                    {{--</div>--}}
                    {{--<a href="">NAIL MINH THIÊN ĐÀ NẴNG--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 p-0 col-sm-4 col-6 du-an">--}}
                    {{--<div class="du-an-overlay"--}}
                         {{--style="background-image: url({{URL::asset('images/project/4-3-700x466.jpg')}});">--}}

                    {{--</div>--}}
                    {{--<a href="">HOMESTAY QUẢNG BÌNH--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 p-0 col-sm-4 col-6 du-an">--}}
                    {{--<div class="du-an-overlay"--}}
                         {{--style="background-image: url({{URL::asset('images/project/NHÀ-HÀNG-2-700x466.jpg')}});">--}}

                    {{--</div>--}}
                    {{--<a href="">HOMESTAY HỘI AN--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 p-0 col-sm-4 col-6 du-an">--}}
                    {{--<div class="du-an-overlay"--}}
                         {{--style="background-image: url({{URL::asset('images/project/v5-hoan-thien-700x466.jpg')}});">--}}

                    {{--</div>--}}
                    {{--<a href="">VILLA HỘI AN--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 p-0 col-sm-4 col-6 du-an">--}}
                    {{--<div class="du-an-overlay"--}}
                         {{--style="background-image: url({{URL::asset('images/project/2-2-700x466.jpg')}});">--}}

                    {{--</div>--}}
                    {{--<a href="">PHÒNG NGỦ MỘC--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 p-0 col-sm-4 col-6 du-an">--}}
                    {{--<div class="du-an-overlay"--}}
                         {{--style="background-image: url({{URL::asset('images/project/1-2-700x466.jpg')}});">--}}

                    {{--</div>--}}
                    {{--<a href="">NHÀ PHỐ 3 TẦNG--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 p-0 col-sm-4 col-6 du-an">--}}
                    {{--<div class="du-an-overlay"--}}
                         {{--style="background-image: url({{URL::asset('images/project/1.5-700x466.jpg')}});">--}}

                    {{--</div>--}}
                    {{--<a href="">NHÀ PHỐ MẶT TIỀN--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 p-0 col-sm-4 col-6 du-an">--}}
                    {{--<div class="du-an-overlay"--}}
                         {{--style="background-image: url({{URL::asset('images/project/h2-700x466.jpg')}});">--}}

                    {{--</div>--}}
                    {{--<a href="">NỘI THẤT NHÀ PHỐ--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 p-0 col-sm-4 col-6 du-an">--}}
                    {{--<div class="du-an-overlay"--}}
                         {{--style="background-image: url({{URL::asset('images/project/dang-1-700x466.jpg')}});">--}}

                    {{--</div>--}}
                    {{--<a href="">NỘI THẤT NHÀ HỘI AN--}}
                    {{--</a>--}}
                {{--</div>--}}
            </div>
        </div>
        @foreach($data['categoryPost'] as $key=>$item)
            <div class="tab-pane pt-3 pb-3" id="project{{$item->id}}" role="tabpanel" aria-labelledby="messages-tab">
                <div class="row">
                    @if(count($item->product)!=0)
                        @foreach($item->product as $key2=>$item2)
                            <div class="col-md-3 p-0 col-sm-4 col-6 du-an">
                                <div class="du-an-overlay"
                                     style="background-image: url({{URL::asset($item2->image)}});">

                                </div>
                                <a href="">{{$item2->title}}
                                </a>
                            </div>
                        @endforeach
                    @else
                        <div class="col-md-12 text-center">

                            <img class="pt-3" src="{{URL::asset('images/update.png')}}" alt=""
                                 style="width: 100px;height: auto;">
                            <p class="pt-3">OPPPS DỮ LIỆU ĐANG UPDATE......!</p>
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
    <div class="col-md-12 text-center mt-5">
        <div><a class="btn-xtcdan d-flex align-items-center"
                href="{{URL::asset('du-an')}}"><span>XEM TẤT CẢ DỰ ÁN</span> <i
                        class="pl-2 fas fa-angle-right"></i></a></div>
    </div>
</div>