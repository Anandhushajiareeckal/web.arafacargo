@extends('layouts.frontend')
@section('about')
active
@endsection
@section('content')
<!-- Content Wrapper -->
<article class="about-page">
    <!-- Breadcrumb -->
    <section class="theme-breadcrumb pad-50">
        <div class="theme-container container ">
            <div class="row">
                <div class="col-sm-8 pull-left">
                    <div class="title-wrap">
                        <h2 class="section-title no-margin">About us</h2>
                        <p class="fs-16 no-margin">Know about us more</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb-menubar list-inline">
                        <li><a href="/" class="gray-clr">Home</a></li>
                        <li class="active">About</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- /.Breadcrumb -->

    <!-- About Us -->
    <section class="pad-50 about-wrap">
        <span class="bg-text"> About </span>
        <div class="theme-container container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-us pt-10">
                        <p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">
                            Leveraging cutting-edge technology, Arafa Cargo offers real-time
                            tracking and transparent communication throughout the shipping process.
                             Our advanced logistics systems ensure efficient route planning, optimal
                              cargo handling, and continuous monitoring to keep you informed every step of the way.
                        </p>
                        <ul class="feature">
                            <li>
                                <img alt="" src="{{asset('frontend/assets/img/icons/icon-2.png')}}" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" />
                                <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s">
                                    <h2 class="title-1">Fast delivery</h2>
                                    <p>Promising swift, reliable delivery.</p>
                                </div>
                            </li>
                            <li>
                                <img alt="" src="{{asset('frontend/assets/img/icons/icon-3.png')}}" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" />
                                <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s">
                                    <h2 class="title-1">Secured service</h2>
                                    <p>Providing secured service with utmost diligence</p>
                                </div>
                            </li>
                            <li>
                                <img alt="" src="{{asset('frontend/assets/img/icons/icon-4.png')}}" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" />
                                <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s">
                                    <h2 class="title-1">worldwide shipping</h2>
                                    <p>Offering worldwide shipping services for global reach</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img alt="" src="{{asset('frontend/assets/img/block/about-img.png')}}" class="effect animated fadeInRight" />
                </div>
            </div>
        </div>
    </section>
    <!-- /.About Us -->

    <!-- More About Us -->
    <section class="pad-30 more-about-wrap">
        <div class="theme-container container pb-100">
            <div class="row">
                <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                    <div class="more-about clrbg-before">
                        <h2 class="title-1">what we do</h2>
                        <div class="pad-10"></div>
                        <p>We specialize in comprehensive logistics solutions, including air, sea, and land freight services,
                            ensuring seamless transportation of goods worldwide. Our dedicated team works tirelessly to optimize routes,
                             handle customs procedures, ensuring your shipments reach their destinations safely and on time.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                    <div class="more-about clrbg-before">
                        <h2 class="title-1">Our History</h2>
                        <div class="pad-10"></div>
                        <p>Our journey began with a vision for excellence in logistics,
                            evolving into Arafa Cargo, a trusted name synonymous with reliability
                             and efficiency in global transportation. With a foundation built on
                             commitment and innovation, adapting to the ever-changing needs of our
                              customers while upholding our legacy of excellence</p>
                    </div>
                </div>
                <div class="col-md-4  col-sm-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".40s">
                    <div class="more-about clrbg-before">
                        <h2 class="title-1">our mission</h2>
                        <div class="pad-10"></div>
                        <p>Our mission at Arafa Cargo is to redefine excellence in logistics,
                            striving to exceed our customers' expectations with every shipment.
                            We are committed to delivering seamless transportation solutions that
                             prioritize efficiency, reliability,
                            ensuring that your cargo arrives safely and on time, every time</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.More About Us -->
</article>
<!-- /.Content Wrapper -->
@endsection
