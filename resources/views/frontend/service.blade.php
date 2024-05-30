@extends('layouts.frontend')
@section('content')
<article>
    <!-- Breadcrumb -->
    <section class="theme-breadcrumb pad-50">
        <div class="theme-container container ">
            <div class="row">
                <div class="col-sm-8 pull-left">
                    <div class="title-wrap">
                        <h2 class="section-title no-margin"> service's  </h2>
                        <p class="fs-16 no-margin">
                            Services are vital for global trade, ensuring goods
                            move across borders efficiently by air, sea, road, or rail.
                            They guarantee timely delivery, supporting supply
                            chains worldwide, and offer options for businesses and individuals,
                            from small packages to large shipments, over vast distances. </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb-menubar list-inline">
                        <li><a href="#" class="gray-clr">Home</a></li>
                        <li class="active">Blog Posts</li>
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


                <section class="col-md-4 col-sm-6 pb-50">
                    <article class="post-wrap pb-50">
                        <div class="post-img pb-10">
                            <a href="#"> <img  class="gallery_img" alt="" src="{{asset('frontend/assets/img/background/serv1.jpg')}}"> </a>
                        </div>
                        <div class="post-content">
                            <h4 style="color: #000;">Air Freight</h4>
                            <p>Air freight services are vital for global trade, ensuring efficient
                               cross-border movement of goods. They guarantee timely delivery</p>
                        </div>
                    </article>
                </section>

                <section class="col-md-4 col-sm-6 pb-50">
                    <article class="post-wrap pb-50">
                        <div class="post-img pb-10">
                            <a href="#"> <img class="gallery_img"  alt="" src="{{asset('frontend/assets/img/background/serv2.jpg')}}"> </a>
                        </div>
                        <div class="post-content">
                            <h4 style="color: #000;">Ocean Freight</h4>
                             <p>Ocean freight is vital for global trade, moving goods efficiently by sea. It supports supply chains with timely
                               delivery and offers options for all shipment sizes over long distances..</p>
                        </div>
                    </article>

                </section> <section class="col-md-4 col-sm-6 pb-50">
                    <article class="post-wrap pb-50">
                        <div class="post-img pb-10">
                            <a href="#"> <img class="gallery_img" src="{{asset('frontend/assets/img/background/serv3.jpeg')}}"> </a>
                        </div>
                        <div class="post-content">

                            <h4 style="color: #000;">Road Freight</h4>
                            <p>Road freight is vital for regional trade, ensuring efficient movement of goods by road, supporting supply chains with timely deliveries,
                               and offering flexible options for shipments over various distances..</p>
                        </div>
                    </article>

                </section> <section class="col-md-4 col-sm-6 pb-50">
                    <article class="post-wrap pb-50">
                        <div class="post-img pb-10">
                            <a href="#"> <img class="gallery_img"  alt="" src="{{asset('frontend/assets/img/background/serv4.jpg')}}"> </a>
                        </div>
                        <div class="post-content">
                            <h4 style="color: #000;">Warehousing</h4>
                            <p>Warehousing is crucial for logistics, providing storage,
                                distribution,It supports order fulfillment,and modern warehouses optimize operations for smooth supply chains..</p>
                        </div>
                    </article>
                </section>
            </section> <section class="col-md-4 col-sm-6 pb-50">
                <article class="post-wrap pb-50">
                    <div class="post-img pb-10">
                        <a href="#"> <img class="gallery_img"  alt=""  src="{{asset('frontend/assets/img/background/serv5.jpg')}}"> </a>
                    </div>
                    <div class="post-content">
                        <h4 style="color: #000;">Supply Chain</h4>
                        <p>The supply chain is a network linking production to consumers,
                            aiming for efficiency and cost-effectiveness..</p>
                    </div>
                </article>
            </section>
        </section> <section class="col-md-4 col-sm-6 pb-50">
            <article class="post-wrap pb-50">
                <div class="post-img pb-10">
                    <a href="#"> <img class="gallery_img" alt="" src="{{asset('frontend/assets/img/background/serv6.jpg')}}"> </a>
                </div>
                <div class="post-content">
                    <h4 style="color: #000;">Packaging</h4>
                    <p>Packaging ensures goods are protected during transportation, minimizing damage
                        and optimizing space for efficient handling and delivery..</p>
                </div>
            </article>
        </section>



            </div>
        </div>
    </div>
    <!-- /.Blog -->

</article>
@endsection

