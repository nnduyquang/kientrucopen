<style>

    {{--#a_1 {--}}
    {{--background-color: #232323;--}}
    {{--}--}}

    {{--#a_1 h1 {--}}
    {{--color: white;--}}
    {{--font-size: 26px;--}}
    {{--font-weight: 800;--}}
    {{--font-family: 'Sawarabi Gothic', sans-serif;--}}
    {{--}--}}

    {{--#a_1 p {--}}
    {{--line-height: 22px;--}}
    {{--color: #dad7d7;--}}
    {{--font-size: 15px;--}}
    {{--}--}}

    {{--#a_1 p i{--}}
    {{--font-size: 8px;--}}
    {{--padding-right: 6px;--}}
    {{--color: #edb50c;--}}
    {{--}--}}

    {{--#a_1 p span{--}}
    {{--color: #edb50c;--}}
    {{--}--}}

    {{--#a_1 .btn-instro {--}}
    {{--width: fit-content;--}}
    {{--padding: 16px 22px 14px 22px;--}}
    {{--border: 2px solid #edb50c;--}}
    {{--background-color: transparent;--}}
    {{--transition: .3s;--}}
    {{--position: relative;--}}
    {{--}--}}

    {{--#a_1 .btn-instro:after {--}}
    {{--position: absolute;--}}
    {{--content: '';--}}
    {{--width: 68px;--}}
    {{--height: 1px;--}}
    {{--background-color: #edb50c;--}}
    {{--top: 50%;--}}
    {{--transform: translateY(-50%);--}}
    {{--left: 90%;--}}
    {{--}--}}

    {{--#a_1 .btn-instro a {--}}
    {{--color: #edb50c;--}}
    {{--font-size: 14px;--}}
    {{--transition: .3s;--}}
    {{--}--}}

    {{--#a_1 .btn-instro:hover {--}}
    {{--background-color: #edb50c;--}}
    {{--}--}}

    {{--#a_1 .btn-instro:hover a {--}}
    {{--color: white;--}}
    {{--}--}}

    {{--#a_1 #img_aboutus {--}}
    {{--position: relative;--}}
    {{--width: 90%;--}}
    {{--margin: auto;--}}
    {{--height: 386px;--}}
    {{--border: 6px #8a8a8a solid;--}}
    {{--cursor: grab;--}}
    {{--}--}}

    {{--#a_1 #img_aboutus:before {--}}
    {{--content: '';--}}
    {{--height: 86px;--}}
    {{--width: 1px;--}}
    {{--background-color: #8a8a8a;--}}
    {{--position: absolute;--}}
    {{--right: calc(100% + 20px);--}}
    {{--top: 26%;--}}
    {{--}--}}

    {{--#a_1 #img_aboutus p {--}}
    {{--position: absolute;--}}
    {{--width: fit-content;--}}
    {{--padding: 0;--}}
    {{--top: 8%;--}}
    {{--transform: rotate(270deg);--}}
    {{--left: -13.5%;--}}
    {{--color: #8a8a8a;--}}
    {{--font-size: 15px;--}}
    {{--font-weight: 600;--}}
    {{--margin: auto;--}}
    {{--margin-right: 20px;--}}
    {{--}--}}

    {{--#a_1 #img_aboutus:hover .img-bg {--}}
    {{--top: 0%;--}}
    {{--left: 0%;--}}
    {{--}--}}

    {{--#a_1 #img_aboutus .img-bg {--}}
    {{--position: absolute;--}}
    {{--top: 5%;--}}
    {{--left: 5%;--}}
    {{--width: 100%;--}}
    {{--height: 100%;--}}
    {{--background-image: url({{URL::asset('images/4-3-700x466.jpg')}});--}}
    {{---webkit-background-size: cover;--}}
    {{--background-size: cover;--}}
    {{--background-position: center center;--}}
    {{--overflow: hidden;--}}
    {{--transition: .3s;--}}
    {{--}--}}

    {{--@media only screen and (max-width: 800px) {--}}

    {{--#a_1 #img_aboutus p {--}}
    {{--left: -20.5%;--}}
    {{--}--}}

    {{--}--}}

</style>

<div class="container-fluid pt-5 pb-5" id="a_1">
    <div class="container">
        <div class="row">
            @if(request()->is('gioi-thieu'))
                <div class="col-md-12">

                    <h1 class="pb-4 wow fadeIn">THÔNG TIN VỀ <br> <span style="font-size: 36px">OPEN DESIGN</span></h1>

                    <p class="pb-4 wow fadeIn" data-wow-delay="200ms" style="font-size: 20px"><span></span>CÔNG TY CHÚNG
                        TÔI XIN KÍNH CHÀO QUÝ KHÁCH</p>

                    <p class="pb-4 wow fadeIn" data-wow-delay="500ms"><span>OPEN DESIGN</span> trụ sở được đặt tại Đà
                        Nẵng .cung cấp dịch
                        vụ thiết kế Kiến trúc, Nội thất, Quy hoạch và Thi công với tất cả công trình Nhà ở, Dân dụng,
                        Công
                        Nghiệp, Công cộng và đặc biệt là mảng Cafe shop .</p>


                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div id="img_aboutus">
                                <div class="img-bg"
                                     style="background-image: url({{URL::asset('images/4-3-700x466.jpg')}});"></div>
                                <p class="p-0">WHO WE ARE</p>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <p class="mt-lg-0 mt-5"><i class="fas fa-dot-circle"></i> Mỗi dự án được phân tích và thiết
                                kế kĩ lưỡng, chuyên nghiệp với đội
                                ngủ có chuyên môn cao và cơ sở hạ tầng máy móc hiện đại . chúng tôi sẽ mang đến cho
                                bạn những sản phẩm tốt nhất !</p>

                            <p class="pt-3"><i class="fas fa-dot-circle"></i> Những điều làm nên uy tín của chúng tôi :

                            <p class="pt-3"><i class="fas fa-dot-circle"></i> Đúng giờ được đặt lên hàng đầu.</p>
                            <p class="pt-2" style="text-indent: 30px">
                                <i class="fas fa-dot-circle"></i> Sản phẩm chúng tôi làm ra phải đạt được chất lượng
                                hoàn hảo nhất trước khi đến tay khách
                                hàng.</p>

                            <p class="pt-2" style="text-indent: 30px">

                                <i class="fas fa-dot-circle"></i> Luôn lắng nghe ý kiến của chủ đầu tư, vì chính họ mới
                                là người ở trong không gian chúng tôi thiết kế. Và từ đó chúng tôi sẽ đưa ra những
                                phương án thiết kế để phù hợp nhất với yêu cầu mỗi khách hàng

                            </p>

                            <p class="pt-2" style="text-indent: 30px">

                                <i class="fas fa-dot-circle"></i> Được quan tâm đến tất cả các yếu tố cấu thành công
                                trình như : không gian , phong thủy ,kinh tế tối ưu…..

                            </p>

                            </p>
                        </div>
                    </div>

                    <div class="col-12 pt-5">
                        <p class="pb-3"><i class="fas fa-dot-circle"></i> Chúng tôi sẽ làm bạn hài lòng nhất có thể .
                        </p>
                        <p class="pb-3"><i class="fas fa-dot-circle"></i> Hãy kích chuột vào những chuyên mục của chúng
                            tôi đã làm nếu bạn muốn xem : Thiết kế, Thi công, Dự án, Tham khảo ….</p>
                        <p class="pb-3"><i class="fas fa-dot-circle"></i> Hãy kích chuột vào chuyên mục Tuyển nhân sự
                            nếu bạn có khả năng và muốn hợp tác làm việc với chúng tôi.</p>
                        <p class="pb-3"><i class="fas fa-dot-circle"></i>Hãy kích chuột vào Liên hệ nếu bạn muốn chúng
                            tôi tạo ra những không gian tốt nhất có thể cho bạn .
                        </p>
                        <p class="pb-3">Xin chân Thành cảm ơn !</p>

                        <p class="pb-3"><span>Email:</span> Congtykientrucopendesign@gmail.com</p>
                        <p class="pb-3"><span>Office:</span> 16 Nguyễn Sơn Trà, Phường Hòa Cường Bắc, Quận Hải Châu, TP
                            .Đà Nẵng</p>
                        <p class="pb-3"><span>Mobile:</span> 0905.725.255 hoặc 0905.888.435</p>
                    </div>
                </div>
            @else
                <div class="col-md-12">
                    <h1 class="pb-4 wow fadeIn">BÁO GIÁ</h1>
                    {!! $data['post']->description !!}
                </div>
            @endif

        </div>
    </div>
</div>