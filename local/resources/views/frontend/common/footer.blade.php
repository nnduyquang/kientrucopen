<style>

    #footer {
    }

    #footer_cp #copy-right {
        background-color: #111;
        /*border-top: 2px solid #626262;*/
        font-size: 12px;
        color: #6c757d;
    }

    #footer_middle #footer_content {
        background-image: url({{URL::asset('images/bg/bg-footer.jpg')}});
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center center;
    }

    #footer_middle #footer_content #footer_content_cover {
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: rgba(00, 00, 00, 0.6);
        z-index: 0;
        top: 0;
    }

    #footer_middle #footer_content .logo {
        width: 100px;
        height: auto;
        margin-bottom: 38px;
    }

    #footer_middle #footer_content .email-sub {
        width: fit-content;
        margin: auto;
    }

    #footer_middle #footer_content .email-sub input {
        border-radius: 20px 0px 0px 20px;
        padding: 10px 20px;
        border: none;
        height: 38px;
        font-size: 14px;
        color: #6c757d;
    }

    #footer_middle #footer_content .email-sub input::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: #6c757d;
        opacity: 0.6; /* Firefox */
        font-size: 14px;
    }

    #footer_middle #footer_content .email-sub input:focus {
        outline: none;

    }

    #footer_middle #footer_content .email-sub .btn_send {
        height: 38px;
        border-radius: 0px 20px 20px 0px;
        background-color: #edd531;
        /*color: white;*/
        font-size: 15px;
        border: none;
        margin-bottom: -1px;
        width: fit-content;
        line-height: 38px;
        padding: 0px 20px;
    }

    #footer_middle #footer_content .email-sub .btn_send a {
        color: white;
        font-size: 14px;
    }

    #footer_middle #footer_content ul {
        list-style-type: none;
    }

    #footer_middle #footer_content ul li {
        display: inline-flex;
        padding: 18px 10px;
    }

    #footer_middle #footer_content ul li a {
        color: whitesmoke;
        font-size: 14px;
    }

    #footer_middle #footer_content ul li a i {
        width: 30px;
        height: 30px;
        background-color: #6c757d;
        border-radius: 50%;
        line-height: 30px;
    }


</style>

@include('frontend.common.contact')
<div class="container-fluid p-0" id="footer_middle">

    <div class="pt-5 pb-5 position-relative" id="footer_content">

        <div id="footer_content_cover">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img class="logo" src="{{URL::asset('images/logo/open-logo.png')}}" alt="">
                    <div class="email-sub d-flex"><input type="text" placeholder="Your email...">
                        <div class="btn_send"><a href="">Send</a></div>
                    </div>
                </div>

                <div class="col-md-12 pt-4 text-center">
                    <ul>
                        <li><a href="">TRANG CHỦ</a></li>
                        <li><a href="">DỰ ÁN</a></li>
                        <li><a href="">GIỚI THIỆU</a></li>
                        <li><a href="">LIÊN HỆ</a></li>
                    </ul>
                </div>

                <div class="col-md-12 text-center">
                    <ul>
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>


        </div>
    </div>
</div>

<div class="container-fluid p-0" id="footer_cp">
    <div id="copy-right">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-3 pb-3 text-center">Copyright © 2017 Designed by <span><a
                                style="color: #0f74a8;font-weight: bold"
                                href="http://smartlinks.vn">Smartlinks.vn</a></span> . All rights reserved
                </div>
            </div>
        </div>
    </div>
</div>