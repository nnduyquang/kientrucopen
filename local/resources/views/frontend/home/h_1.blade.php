<style>
    {{--#h_1{--}}
        {{--background-color: #232323;--}}
    {{--}--}}
    {{--#h_1 h1 {--}}
        {{--color: white;--}}
        {{--font-size: 26px;--}}
        {{--font-weight: 800;--}}
        {{--font-family: 'Sawarabi Gothic', sans-serif;--}}
    {{--}--}}

    {{--#h_1 p {--}}
        {{--line-height: 22px;--}}
        {{--color: #dad7d7;--}}
        {{--font-size: 16px;--}}
    {{--}--}}

    {{--#h_1 .btn-instro {--}}
        {{--width: fit-content;--}}
        {{--padding: 16px 22px 14px 22px;--}}
        {{--border: 2px solid #edb50c;--}}
        {{--background-color: transparent;--}}
        {{--transition: .3s;--}}
        {{--position: relative;--}}
    {{--}--}}

    {{--#h_1 .btn-instro:after{--}}
        {{--position: absolute;--}}
        {{--content: '';--}}
        {{--width: 68px;--}}
        {{--height: 1px;--}}
        {{--background-color: #edb50c;--}}
        {{--top: 50%;--}}
        {{--transform: translateY(-50%);--}}
        {{--left: 90%;--}}
    {{--}--}}

    {{--#h_1 .btn-instro a {--}}
        {{--color: #edb50c;--}}
        {{--font-size: 14px;--}}
        {{--transition: .3s;--}}
    {{--}--}}

    {{--#h_1 .btn-instro:hover{--}}
        {{--background-color: #edb50c;--}}
    {{--}--}}

    {{--#h_1 .btn-instro:hover a{--}}
        {{--color: white;--}}
    {{--}--}}


    {{--#h_1 #img_aboutus {--}}
        {{--position: relative;--}}
        {{--width: 90%;--}}
        {{--margin: auto;--}}
        {{--height: 386px;--}}
        {{--border: 6px #8a8a8a solid;--}}
        {{--cursor: grab;--}}

    {{--}--}}

    {{--#h_1 #img_aboutus:before{--}}
        {{--content: '';--}}
        {{--height: 86px;--}}
        {{--width: 1px;--}}
        {{--background-color:#8a8a8a;--}}
        {{--position: absolute;--}}
        {{--right: calc(100% + 20px);--}}
        {{--top: 26%;--}}
    {{--}--}}

    {{--#h_1 #img_aboutus p{--}}
        {{--position: absolute;--}}
        {{--width: fit-content;--}}
        {{--padding: 0;--}}
        {{--top:8%;--}}
        {{--transform: rotate(270deg);--}}
        {{--left: -13.5%;--}}
        {{--color:#8a8a8a ;--}}
        {{--font-size: 15px;--}}
        {{--font-weight: 600;--}}
    {{--}--}}

    {{--#h_1 #img_aboutus:hover .img-bg{--}}
        {{--top: 0%;--}}
        {{--left: 0%;--}}
    {{--}--}}
    {{--#h_1 #img_aboutus .img-bg{--}}
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

        {{--#h_1 #img_aboutus p{--}}
            {{--left: -20.5%;--}}
        {{--}--}}

    {{--}--}}

</style>

<div class="container-fluid pt-5 pb-5" id="h_1">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="pb-4 wow fadeIn">THÔNG TIN VỀ <br> <span style="font-size: 36px">OPEN DESIGN</span></h1>

                <p class="pb-4 wow fadeIn"  data-wow-delay="200ms">Their house is a museum where people come to see ‘em. They really are a scream the
                    Addams Family. They're creepy and they're kooky mysterious and spooky.</p>

                <p class="pb-4 wow fadeIn"  data-wow-delay="500ms">A shadowy flight into the dangerous world of a man who does not exist. Got kind of tired
                    packin' and unpackin town to town and up and down the dial! So join us here each week my
                    friends.</p>

                <div class="btn-instro mb-3 mt-3 wow bounceInDown slow"><a href="{{URL::asset('gioi-thieu')}}">XEM CHI TIẾT</a></div>
            </div>
            <div class="col-md-6 wow fadeIn slower">
                <div id="img_aboutus">
                    <div class="img-bg"  style="background-image: url({{URL::asset("images/4-3-700x466.jpg")}});"></div>
                    <p class="p-0">WHO WE ARE</p>
                </div>
            </div>
        </div>
    </div>
</div>