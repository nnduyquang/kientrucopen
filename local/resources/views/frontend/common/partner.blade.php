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
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-md-12 text-center pl-1 pr-1">
                    <div id="owl_doitac" class="owl-carousel owl-theme">
                        @for ($i = 0; $i < 3; $i++)
                            @if($i==0)
                                <div class="owl-items">
                                    <img src="http://templates.aucreative.co/arch/img/partner-02.png" alt=""
                                         style="
                                         width: 158px;height: 50px;margin: auto">
                                </div>
                            @elseif($i==1)
                                <div class="owl-items">
                                    <img src="http://templates.aucreative.co/arch/img/partner-01.png" alt=""
                                         style="width: 168px;height: 50px;margin: auto">
                                </div>
                            @else
                                <div class="owl-items">
                                    <img src="http://templates.aucreative.co/arch/img/partner-03.png" alt=""
                                         style="width: 168px;height: 50px;margin: auto">
                                </div>
                            @endif
                        @endfor
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>