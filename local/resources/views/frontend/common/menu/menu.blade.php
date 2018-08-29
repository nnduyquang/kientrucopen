<style>
#menu{
    /*position: fixed;*/
    background-color: #2a2a2a;
    color: white;
    /*top: 0;*/
    /*left: 0;*/
    z-index: 10;
    /*margin-bottom: 60px;*/

}

#menu .logo img{
    width: 100px;
    height: auto;
    padding-top: 8px;
}

#menu .menu-right ul{
    list-style-type: none;
    margin: 0;
    padding: 0;

}

#menu .menu-right ul li{
    display: inline-flex;
    position: relative;
    padding: 20px 20px;
}

#menu .menu-right ul li:not(:last-child):after{
    position: absolute;
    content: '\f192';
    font-family: 'Font Awesome\ 5 Free';
    font-weight: 900;
    top: 49%;
    right: 0px;
    color: #edd531;
    font-size: 8px;
    font-style: normal;
    transform: translateY(-50%);

}
#menu .menu-right ul li a{
    font-size: 14px;
    color: #e7e7e6;
}

#menu .menu-right ul li a.active{
    color: #edd531;
}

#menu .menu-right ul li a i{
   font-size: 14px;
}


</style>

<div id="menu" class="container-fluid p-0 pt-2 pb-2 d-none d-md-block">

    <div class="container">
        <div class="row d-flex align-items-center justify-content-between">
            <div class="col-6 logo">
                <img class="" src="{{URL::asset('images/logo/open-logo.png')}}" alt="">
            </div>
            <div class="col-6 menu-right text-right">
                <ul>
                    <li><a class="{{ request()->is('/') ? 'active' : '/' }}" href="{{URL::asset('/')}}">TRANG CHỦ </a></li>
                    <li><a class="{{ request()->is('du-an') ? 'active' : '/' }}" href="{{URL::asset('/du-an')}}">DỰ ÁN </a></li>
                    <li><a class="{{ request()->is('gioi-thieu') ? 'active' : '/' }}" href="{{URL::asset('/gioi-thieu')}}">GIỚI THIỆU </a></li>
                    <li><a class="{{ request()->is('lien-he') ? 'active' : '/' }}" href="{{URL::asset('/lien-he')}}">LIÊN HỆ </a></li>
                    <li><a href=""><i class="fas fa-bars"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

</div>
