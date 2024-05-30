@extends('layouts.frontend')
@section('content')

<article>
    <!-- Breadcrumb -->
    <section class="theme-breadcrumb pad-50">
        <div class="theme-container container ">
            <div class="row">
                <div class="col-sm-8 pull-left">
                    <div class="title-wrap">
                        <h2 class="section-title no-margin"> GALLERY  </h2>
                        <p class="fs-16 no-margin"> The Gallery offers a visual journey into
                            the world of logistics, showcasing seamless transportation
                             across air, sea, and land. Through captivating images,
                              it highlights our commitment to reliability, efficiency, and
                              global connectivity in cargo management. </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb-menubar list-inline">
                        <li><a href="#" class="gray-clr">Home</a></li>
                        <li class="active">Gallery</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- /.Breadcrumb -->

    <!-- Blog -->
    <div class="theme-container container">
        <div class="row">
            <div class="blog-wrap pad-80 clearfix">

                <section class="col-md-4 col-sm-6 pb-25">
                    <article class="post-wrap pb-25">
                        <div class="post-img pb-10">
                            <a href="#"> <img class="gallery_img" src="{{asset('frontend/assets/img/background/banner-1.jpg')}}"> </a>
                        </div>
                    </article>
                </section>

                <section class="col-md-4 col-sm-6 pb-25">
                    <article class="post-wrap pb-25">
                        <div class="post-img pb-10">
                            <a href="#"> <img class="gallery_img" alt="" src="{{asset('frontend/assets/img/background/gl1.jpg')}}"> </a>
                        </div>
                    </article>
                </section>

                <section class="col-md-4 col-sm-6 pb-25">
                    <article class="post-wrap pb-25">
                        <div class="post-img pb-10">
                            <a href="#"> <img class="gallery_img" alt="" src="{{asset('frontend/assets/img/background/gl2.jpg')}}"> </a>
                        </div>
                    </article>
                </section>

                <section class="col-md-4 col-sm-6 pb-25">
                    <article class="post-wrap pb-25">
                        <div class="post-img pb-10">
                            <a href="#"> <img class="gallery_img" alt="" src="{{asset('frontend/assets/img/background/gl3.jpg')}}"> </a>
                        </div>
                    </article>
                </section>
                <section class="col-md-4 col-sm-6 pb-25">
                    <article class="post-wrap pb-25">
                        <div class="post-img pb-10">
                            <a href="#"> <img class="gallery_img" alt="" src="{{asset('frontend/assets/img/background/gl4.jpg')}}"> </a>
                        </div>
                    </article>
                </section>

                <section class="col-md-4 col-sm-6 pb-25">
                    <article class="post-wrap pb-25">
                        <div class="post-img pb-10">
                            <a href="#"> <img class="gallery_img" alt="" src="{{asset('frontend/assets/img/background/gl5.jpg')}}"> </a>
                        </div>
                    </article>
                </section>

                <section class="col-md-4 col-sm-6 pb-25">
                    <article class="post-wrap pb-25">
                        <div class="post-img pb-10">
                            <a href="#"> <img class="gallery_img" alt="" src="{{asset('frontend/assets/img/background/gl6.jpg')}}"> </a>
                        </div>
                    </article>
                </section>

                <section class="col-md-4 col-sm-6 pb-25">
                    <article class="post-wrap pb-25">
                        <div class="post-img pb-10">
                            <a href="#"> <img class="gallery_img" alt="" src="{{asset('frontend/assets/img/background/gl9.jpg')}}"> </a>
                        </div>
                    </article>
                </section>

                <section class="col-md-4 col-sm-6 pb-25">
                    <article class="post-wrap pb-25">
                        <div class="post-img pb-10">
                            <a href="#"> <img class="gallery_img" alt="" src="{{asset('frontend/assets/img/background/gl7.jpg')}}"> </a>
                        </div>
                    </article>
                </section>

                <div class="visible-xs pad-30"></div>
            </div>
        </div>
    </div>
    <!-- /.Blog -->

</article>
@endsection
