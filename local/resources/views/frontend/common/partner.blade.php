<style>
    #footer_pn #footer_partner {
        background-image: url('images/bg/bg-partner.jpg');
        background-position: center center;
        -webkit-background-size: cover;
        background-size: cover;
        width: 100%;
        height: auto;
    }
</style>

<div class="container-fluid p-0" id="footer_pn">

    <div id="footer_partner" class="d-flex align-items-center">
        <div class="container pt-3 pb-3">
            <div class="row">
                <div class="col-md-12 text-center pl-1 pr-1 ">
                    <div id="owl_doitac" class="owl-carousel owl-theme">
                        @for ($i = 0; $i < 6; $i++)
                            @if($i==0)
                                <div class="owl-items d-flex align-items-center">
                                    <div style="background-image:url({{URL::asset('images/icon/logo-moi-2-e1509520466200.png')}});
                                            -webkit-background-size: 100% auto;background-size: 100% auto;
                                            background-position:center center;
                                            width: 158px;height: 138px;background-repeat: no-repeat;">
                                        {{--<img src="" alt=""--}}
                                        {{--style="--}}
                                        {{--width: 158px;height: auto;margin: auto">--}}
                                    </div>
                                </div>
                            @elseif($i==1)
                                <div class="owl-items d-flex align-items-center">
                                    <div style="background-image:url({{URL::asset('images/icon/logo3.png')}});
                                            -webkit-background-size: 100% auto;background-size: 100% auto;
                                            background-position:center center;
                                            width: 158px;height: 138px;background-repeat: no-repeat;">
                                        {{--<img src="" alt=""--}}
                                        {{--style="--}}
                                        {{--width: 158px;height: auto;margin: auto">--}}
                                    </div>
                                </div>
                            @elseif($i==2)
                                <div class="owl-items d-flex align-items-center">
                                    <div style="background-image:url({{URL::asset('images/icon/nguyenkim.png')}});
                                            -webkit-background-size: 100% auto;background-size: 100% auto;
                                            background-position:center center;
                                            width: 158px;height: 138px;background-repeat: no-repeat;">
                                    </div>
                                </div>
                            @elseif($i==3)
                                <div class="owl-items d-flex align-items-center">
                                    <div style="background-image:url({{URL::asset('https://dienmaycholon.vn/public/userupload/images/nhung-quy-dinh-ve-bao-hanh-san-pham-tivi-samsung-b%E1%BA%A1n-nen-biet-1.png')}});
                                            -webkit-background-size: 100% auto;background-size: 100% auto;
                                            background-position:center center;
                                            width: 158px;height: 138px;background-repeat: no-repeat;">
                                    </div>
                                </div>
                            @elseif($i==4)
                                <div class="owl-items d-flex align-items-center">
                                    <div style="background-image:url({{URL::asset('images/icon/logo.png')}});
                                            -webkit-background-size: 100% auto;background-size: 100% auto;
                                            background-position:center center;
                                            width: 158px;height: 138px;background-repeat: no-repeat;">
                                    </div>
                                </div>
                            @else
                                <div class="owl-items d-flex align-items-center">
                                    <div style="background-image:url({{URL::asset('http://www.tamvinhthai.com/Content/Layout/img/logo-tamvinhthai.png')}});
                                            -webkit-background-size: 100% auto;background-size: 100% auto;
                                            background-position:center center;
                                            width: 158px;height: 138px;background-repeat: no-repeat;">
                                    </div>
                                </div>

                            @endif
                        @endfor
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>