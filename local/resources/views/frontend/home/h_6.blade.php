<style>
    {{--#h_6{--}}
    {{--background-image: url({{URL::asset('images/bg/footer-background.jpg')}});--}}
    {{---webkit-background-size: cover;--}}
    {{--background-size: cover;--}}
    {{--background-color: #515151;--}}
    {{--color: #2a2a2a;--}}
    {{--padding-top: 68px;--}}
    {{--padding-bottom: 68px;--}}
    {{--}--}}

    {{--#h_6 h3{--}}
    {{--font-size: 24px;--}}
    {{--color: white;--}}
    {{--}--}}

    {{--#h_6 h3 span{--}}
    {{--color: #edb50c;--}}
    {{--}--}}

    {{--#h_6 p{--}}
    {{--max-width: 310px;--}}
    {{--font-size: 15px;--}}
    {{--color: whitesmoke;--}}
    {{--line-height: 20px;--}}
    {{--margin: auto;--}}
    {{--padding-top: 10px;--}}
    {{--}--}}

    {{--#h_6 #owl_ykkh .owl-items{--}}
    {{--height: 200px;--}}
    {{--width: auto;--}}
    {{--background-color: #1c1c1c;--}}
    {{--overflow: hidden;--}}

    {{--}--}}
    {{--#h_6 #owl_ykkh .owl-items .owl-img{--}}
    {{--height: 100%;--}}
    {{--width: 168px;--}}
    {{--background-position: center center;--}}
    {{---webkit-background-size: cover;--}}
    {{--background-size: cover;--}}
    {{--position: relative;--}}
    {{--}--}}

    {{--#h_6 #owl_ykkh .owl-items .owl-img:after{--}}
    {{--position: absolute;--}}
    {{--content: '';--}}
    {{--width: 0;--}}
    {{--height: 0;--}}
    {{--right: 0;--}}
    {{--top: 18%;--}}
    {{--border-top: 10px solid transparent;--}}
    {{--border-right: 10px solid #1c1c1c;--}}
    {{--border-bottom: 10px solid transparent;--}}
    {{--}--}}

    {{--#h_6 #owl_ykkh .owl-items p i{--}}
    {{--color: #edb50c;--}}
    {{--font-size: 26px;--}}

    {{--}--}}
    {{--#h_6 #owl_ykkh .owl-items h5{--}}
    {{--color: #edb50c;--}}
    {{--font-size: 16px;--}}
    {{--}--}}

    {{--#h_6 #owl_ykkh .owl-items span{--}}
    {{--color: whitesmoke;--}}
    {{--font-size: 12px;--}}

    {{--}--}}

    {{--@media only screen and (max-width: 800px) {--}}
    {{--#h_6 #owl_ykkh .owl-items .owl-img{--}}
    {{--height: 168px;--}}
    {{--width: 168px;--}}
    {{--border-radius: 50%;--}}
    {{--margin-top: 20px;--}}
    {{--}--}}

    {{--#h_6 #owl_ykkh .owl-items {--}}
    {{--height: auto;--}}
    {{--}--}}
    {{--#h_6 #owl_ykkh .owl-items h5{--}}
    {{--margin-right: 20px;--}}
    {{--padding-bottom: 10px;--}}
    {{--}--}}

    {{--#h_6 #owl_ykkh .owl-items span{--}}
    {{--color: whitesmoke;--}}
    {{--font-size: 12px;--}}

    {{--}--}}
    {{--}--}}
</style>

<div class="container-fluid" id="h_6" style="background-image: url({{URL::asset('images/bg/footer-background.jpg')}});">
    <div class="container pb-4">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3><span>KHÁCH HÀNG</span> NÓI VỀ CHÚNG TÔI</h3>
                <p>Chúng tôi luôn làm việc lấy tiêu chí hài lòng khách hàng là ưu tiên đầu tiên.</p>
            </div>

            <div class="col-md-12 mt-5 text-center">
                <div id="owl_ykkh" class="owl-carousel owl-theme">
                    @for ($i = 0; $i < 3; $i++)
                        @if($i==0)
                            <div class="owl-items d-flex flex-md-row flex-column justify-content-lg-start justify-content-center align-items-center">
                                <div class="owl-img"
                                     style="background-image:url({{URL::asset('images/icon/musterihizmetleri.jpg')}});">

                                </div>
                                <div class="pl-3">
                                    <p><i class="fas fa-quote-left pr-2"></i> Ban đầu tôi cũng có chút lo lắng khi Open
                                        Design còn quá trẻ và mới mẻ, nhưng khi mọi thứ đã xong tôi cảm thấy rất hài
                                        lòng với ngôi nhà của mình do công ty Open Design trực tiếp thiết kế và thi công
                                        !&nbsp;</p>
                                    <h5 class="text-right pt-3">Mr Hà<br>
                                        <span class="text-right">Customer</span></h5>

                                </div>
                            </div>
                        @elseif($i==1)
                            <div class="owl-items d-flex flex-md-row flex-column justify-content-lg-start justify-content-center align-items-center">
                                <div class="owl-img"
                                     style="background-image:url({{URL::asset('images/icon/musterihizmetleri.jpg')}});">

                                </div>
                                <div class="pl-3">
                                    <p><i class="fas fa-quote-left pr-2"></i> Tôi thực sự không
                                        quan tâm nhiều vào thiết kế vì chỉ nghĩ xây nhà nhờ thầu là được. Nhưng đến khi thiết kế xong
                                        tôi mới cảm thấy thật ngỡ ngàng. Cảm ơn công ty Open Design đã giúp tôi có được
                                        căn nhà mơ muốn.&nbsp;</p>
                                    <h5 class="text-right pt-3">Ms Ngọc<br>
                                        <span class="text-right">Customer</span></h5>

                                </div>
                            </div>

                        @else
                            <div class="owl-items d-flex flex-md-row flex-column justify-content-lg-start justify-content-center align-items-center">
                                <div class="owl-img"
                                     style="background-image:url({{URL::asset('images/icon/musterihizmetleri.jpg')}});">

                                </div>
                                <div class="pl-3">
                                    <p><i class="fas fa-quote-left pr-2"></i> Nếu hỏi a đánh giá thế nào về Open Design thì a chỉ có chúc mừng Open Design đã xây dựng được nền tảng rất tốt trong công việc từ chính sự uy tín, rõ ràng và tinh thần trách nhiệm cao. Chúc mừng công ty và hãy luôn luôn cố gắng hơn nữa !&nbsp;</p>
                                    <h5 class="text-right pt-3">Mr Vinh<br>
                                        <span class="text-right">Customer</span></h5>

                                </div>
                            </div>
                        @endif
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>