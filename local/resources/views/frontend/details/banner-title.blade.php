<style>
#banner_title{
    background-image: url({{URL::asset('images/bg/bg-head-04.jpg')}});
    background-position: center center;
    -webkit-background-size: cover;
    background-size: cover;
    background-attachment: fixed;
}

#banner_title h2{
    font-size: 20px;
    padding-top: 68px;
    padding-bottom: 8px;
    color: white;
}

#banner_title p{
    color: white;
    font-size: 14px;
    padding-bottom: 68px;
}

#banner_title h2 a{
    color:#f5d314 ;
}

#banner_title h2 a:hover{
    color: white;
}
</style>

<div class="container-fluid pt-5 pb-5" id="banner_title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><a href="">TRANG CHỦ </a> > {{$data['post']->title}}</h2>
                <p>Thông tin tin tức hoặc các bài liên quan</p>
            </div>
        </div>
    </div>
</div>