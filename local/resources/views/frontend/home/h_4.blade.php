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
    </ul>
    <div class="tab-content">
        <div class="tab-pane pt-3 pb-3 active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="row">
                @foreach($data['categoryPost'] as $key=>$item)
                    @foreach($item->product as $key2=>$item2)
                        <div class="col-md-3 p-0 col-sm-4 col-6 du-an2">
                            <div class="du-an-overlay"
                                 style="background-image:url({{URL::asset($item2->image)}});">

                            </div>
                            <a class="title_pro" href="">{{$item2->title}}
                            </a>
                            <div class="nav-btn mt-2">

                                <a class="fancybox" data-fancybox="gallery"
                                   href="{{URL::to($item2->image)}}">
                                    <i class="fas fa-search">
                                    </i>
                                </a>

                                <div class="xem-chitiet d-flex justify-content-center align-items-center ml-2 text-center">
                                    <a class="chi-tiet" href="">CHI TIẾT</a>
                                </div>

                            </div>
                        </div>
                    @endforeach
                @endforeach

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