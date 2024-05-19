@extends('layouts.frontend')
@section('content')

<!-- Content Wrapper -->
<article>
    <!-- Breadcrumb -->
    <section class="theme-breadcrumb pad-50">
        <div class="theme-container container ">
            <div class="row">
                <div class="col-sm-8 pull-left">
                    <div class="title-wrap">
                        <h2 class="section-title no-margin"> product tracking </h2>
                        <p class="fs-16 no-margin"> Track your product & see the current condition </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb-menubar list-inline">
                        <li><a href="#" class="gray-clr">Home</a></li>
                        <li class="active">Track</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- /.Breadcrumb -->

    <!-- Tracking -->
    <section class="pt-50 pb-120 tracking-wrap">
        <div class="theme-container container ">
            <div class="row pad-10">
                <div class="col-md-8 col-md-offset-2 tracking-form wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                    <h2 class="title-1"> track your product </h2> <span class="font2-light fs-12">Now you can track your product easily</span>
                    <div class="row">
                        <form class="" action="{{route('tracking')}}" method="POST">
                            @csrf
                            <div class="col-md-7 col-sm-7">
                                <div class="form-group">
                                    {{-- {{dd($booking_no)}} --}}
                                    <input type="text" name="tracking_id" value="{{ isset($booking_no) ? $booking_no : '' }}" placeholder="Enter your product ID" required="" class="form-control box-shadow">
                                    @if(isset($error))
                                        <p style="color: red; margin:5px;"> {{$error}}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-5">
                                <div class="form-group">
                                    <button type="submit" class="btn-1">track your product</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div>
                @if(isset($track))
                    @foreach ($track as $data)
                        @if($data['level'])
                            <div>
                                <div class="row" style="margin-top: 40px;">
                                    <div class="box_no"><h2>{{$data['box_name']}}</h2></div>
                                    <div class="col-md-6  col-sm-6">
                                        <div class="progress-wrap">
                                            <div class="row progress-content upper-text" style="margin-bottom: 30px;">
                                                <div class="col-md-5 col-xs-8 col-sm-2">
                                                    <h3 class="title-1 no-margin">Shipment booked</h3>
                                                </div>
                                            </div>
                                            <div class="progress-status col-md-3 col-sm-3">
                                                @if ($data['level'] == 1 )
                                                    <span class="border-left-active" style="width: 100%; margin-left: 0px;  "></span>
                                                    <span class="themeclr-border-sub wow fadeIn" data-wow-offset="50" data-wow-delay=".40s" > <span class="dot-sub dot-center theme-clr-bg"></span></span>
                                                    <br>
                                                    <p class="sub-status" style="margin-left:-33px;">
                                                        {{\Carbon\Carbon::parse($data['date'])->format('d - m -Y')}}
                                                    </p>

                                                @else
                                                    <span class="border-left-active" style="width: 100%; margin-left: 0px; border-color:#54d856;"></span>
                                                    <span class="dot dot-left-active wow fadeIn" data-wow-offset="50" data-wow-delay=".40s" style="width: 20px; height:20px; top:-8px; background:#54d856;"></span>
                                                @endif

                                                {{-- <span class="border-left-active" style="width: 100%; margin-left: 0px;"></span>
                                                <span class="dot dot-left-active wow fadeIn" data-wow-offset="50" data-wow-delay=".40s" style="width: 20px; height:20px; top:-8px;"></span> --}}
                                            </div>
                                            <div class="progress-status col-md-3 col-sm-3">
                                                @if ($data['level'] == 2)
                                                    <span class="border-left first_border " style="width: 100%;margin-left: 0px;"></span>
                                                    <span class="themeclr-border-sub wow fadeIn" data-wow-offset="50" data-wow-delay=".40s"> <span class="dot-sub dot-center theme-clr-bg"></span></span>
                                                    <br>

                                                @elseif ($data['level'] > 2)
                                                    <span class="border-left first_border" style="width: 111%; margin-left: 0px; border-color:#54d856;"></span>
                                                    <span class="dot dot-left-sub wow fadeIn" data-wow-offset="50" data-wow-delay=".40s" style="background:#54d856;"></span>
                                                @else
                                                    <span class="border-left first_border" style="width: 111%; margin-left: 0px;"></span>
                                                    <span class="dot dot-left-sub wow fadeIn" data-wow-offset="50" data-wow-delay=".40s"></span>
                                                @endif
                                                <p class="sub-status" style="margin-left:-33px;" > Received
                                                <br>
                                                    {{$data['level'] == 2?\Carbon\Carbon::parse($data['date'])->format('d - m -Y'):''}}
                                                </p>
                                            </div>
                                            <div class="progress-status col-md-3 col-sm-3">
                                                @if ($data['level'] == 3)
                                                    <span class="border-left first_border " style="width: 100%;margin-left: 0px;"></span>
                                                    <span class="themeclr-border-sub wow fadeIn" data-wow-offset="50" data-wow-delay=".40s"> <span class="dot-sub dot-center theme-clr-bg"></span></span>
                                                @elseif ($data['level'] > 3)
                                                    <span class="border-left first_border" style="width: 111%; margin-left: 0px; border-color:#54d856;"></span>
                                                    <span class="dot dot-left-sub wow fadeIn" data-wow-offset="50" data-wow-delay=".40s" style="background:#54d856;"></span>
                                                @else
                                                    <span class="border-left first_border" style="width: 111%; margin-left: 0px;"></span>
                                                    <span class="dot dot-left-sub wow fadeIn" data-wow-offset="50" data-wow-delay=".40s"></span>
                                                @endif
                                                {{-- <span class="border-left first_border" style="width: 111%; margin-left: 0px;"></span> --}}
                                                {{-- <span class="dot dot-left-sub wow fadeIn" data-wow-offset="50" data-wow-delay=".40s"></span> --}}
                                                <p class="sub-status" style="margin-left:-33px;"> Forwarded
                                                    <br>
                                                    {{$data['level'] == 3?\Carbon\Carbon::parse($data['date'])->format('d - m -Y'):''}}
                                                </p>
                                            </div>
                                            <div class="progress-status col-md-3 col-sm-3">

                                                @if ($data['level'] == 4)
                                                    <span class="border-left first_border " style="width: 111%;margin-left: 0px;"></span>
                                                    <span class="themeclr-border-sub wow fadeIn" data-wow-offset="50" data-wow-delay=".40s"> <span class="dot-sub dot-center theme-clr-bg"></span></span>
                                                @elseif ($data['level'] > 4)
                                                    <span class="border-left first_border" style="width: 111%; margin-left: 0px; border-color:#54d856;"></span>
                                                    <span class="dot dot-left-sub wow fadeIn" data-wow-offset="50" data-wow-delay=".40s" style="background:#54d856;"></span>
                                                @else
                                                    <span class="border-left first_border" style="width: 111%; margin-left: 0px;"></span>
                                                    <span class="dot dot-left-sub wow fadeIn" data-wow-offset="50" data-wow-delay=".40s"></span>
                                                @endif
                                                {{-- <span class="border-left first_border arrived" style="width: 111%; margin-left: 0px;"></span> --}}
                                                {{-- <span class="dot dot-left-sub wow fadeIn" data-wow-offset="50" data-wow-delay=".40s" ></span> --}}
                                                <p class="sub-status" style="margin-left:-33px;"> Arrived

                                                    <br>
                                                    {{$data['level'] == 4?\Carbon\Carbon::parse($data['date'])->format('d - m -Y'):''}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 second_bar col-sm-6">
                                        <div class="row">
                                            <div class="row progress-content upper-text" style="margin-bottom: 30px;">
                                                <div class="col-md-5 col-xs-8 col-sm-3 sec_status" >
                                                    @if ($data['level'] >= 5)
                                                        <h2 class="title-1 no-margin ml-2" style="margin-left: -60px;border-color:#54d856;">Waiting for clearance</h2>
                                                    @else
                                                        <h2 class="title-1 no-margin ml-2" style="margin-left: -60px; ">Waiting for clearance</h2>
                                                    @endif
                                                </div>

                                                <div class="col-md-4 col-xs-8 col-sm-6 text-center sec_status">
                                                    @if ($data['level'] >= 6 || $data['level'] != 7 || $data['level'] != 8)
                                                        <h2 class="title-1 no-margin ml-2"><span class="">Out for delivery</span></h2>
                                                    @elseif ($data['level'] >= 7)
                                                        <h2 class="title-1 no-margin ml-2"><span class="">Pending</span></h2>
                                                    @elseif ($data['level'] >= 8)
                                                        <h2 class="title-1 no-margin ml-2"><span class="">Hold</span></h2>
                                                    @endif
                                                </div>
                                                <div class="col-md-2 col-xs-8 col-sm-2 text-right sec_status">
                                                    @if ($data['level'] == 9)
                                                    <h2 class="title-1 no-margin ml-2" style="margin-right: -70px;">Not Delivered</h2>
                                                    @else
                                                    <h2 class="title-1 no-margin ml-2" style="margin-right: -70px;">Delivered</h2>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-wrap">
                                            <div class="progress-status">
                                                @if ($data['level'] >= 6)
                                                    <span class="border-left bl1" style="border-color:#54d856 !important;"></span>
                                                @else
                                                    <span class="border-left bl1"></span>
                                                @endif

                                                @if ($data['level'] >= 11 || $data['level'] >= 9 )
                                                    <span class="border-right br1" style="border-color:#54d856 !important;"></span>
                                                @else
                                                    <span class="border-right br1"></span>
                                                @endif
                                                @if ($data['level'] == 5)
                                                    <span class=" d1 themeclr-border-sub wow fadeIn " data-wow-offset="50" data-wow-delay=".40s" > <span class="dot-sub dot-center theme-clr-bg"></span></span>
                                                    <p style="padding-top: 20px; margin-left: -22px; max-width: 230px;">
                                                        {{$data['level'] == 5?\Carbon\Carbon::parse($data['date'])->format('d - m -Y'):''}}
                                                    </p>
                                                    <p style="text-align:justify;color:#2c88cb; ">
                                                        Note:- {{ $data['comment']}}
                                                     </p>
                                                @elseif ($data['level'] > 5)
                                                    <span class="dot dot-left d1 wow fadeIn" data-wow-offset="50" data-wow-delay=".40s" style="width: 20px; height:20px; top:-8px; background:#54d856;"></span>
                                                @else
                                                    <span class="dot dot-left d1 wow fadeIn" data-wow-offset="50" data-wow-delay=".40s" style="width: 20px; height:20px; top:-8px;"></span>
                                                @endif

                                                @if ($data['level'] == 6 || $data['level'] == 7 || $data['level'] == 8)
                                                    <span class="d2 dot dot-left themeclr-border-main  wow fadeIn" data-wow-offset="50" data-wow-delay=".40s" style="left: 58%; width: 20px; height:20px; top:-8px; background:none;"> <span class="dot-sub dot-center theme-clr-bg"></span></span>
                                                    <p style="padding-top: 20px; margin-left: 120px; text-align:center; ">
                                                        {{\Carbon\Carbon::parse($data['date'])->format('d - m -Y')}}
                                                    </p>
                                                    <p style="text-align:justify; color:#2c88cb; ">
                                                        Note:- {{ $data['comment']}}
                                                     </p>
                                                @elseif ($data['level'] > 6)
                                                    <span class="dot dot-left d2 wow fadeIn" data-wow-offset="50" data-wow-delay=".50s" style="left: 58%; width: 20px; height:20px; top:-8px;background:#54d856;"></span>
                                                @else
                                                    <span class="dot dot-left d2 wow fadeIn" data-wow-offset="50" data-wow-delay=".50s" style="left: 58%; width: 20px; height:20px; top:-8px;"></span>
                                                @endif

                                                @if ($data['level'] == 11 || $data['level'] == 9)
                                                <span class=" d3 dot-right themeclr-border-main  wow fadeIn" data-wow-offset="50" data-wow-delay=".40s" style="background:none;"> <span class="dot-sub dot-center theme-clr-bg"></span></span>
                                                <p style="padding-top: 20px;  text-align:end; ">
                                                    {{\Carbon\Carbon::parse($data['date'])->format('d - m -Y')}}
                                                </p>
                                                <p style="text-align:justify; color:#2c88cb;">
                                                  Note:-{{ $data['comment']}}
                                                </p>

                                                @else
                                                    <span class="dot dot-right d3 wow fadeIn" data-wow-offset="50" data-wow-delay=".60s" style=" width: 20px; height:20px; top:-8px;"></span>
                                                @endif

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div>
                                <div class="row" style="margin-top: 40px;">
                                    <div class="box_no"><h2>{{$data['box_name']}}</h2></div>
                                    <div class="col-md-6  col-sm-6">
                                        <div class="progress-wrap">
                                            <div class="row progress-content upper-text" style="margin-bottom: 30px;">
                                                <div class="col-md-5 col-xs-8 col-sm-2">
                                                    <h3 class="title-1 no-margin">Shipment booked</h3>
                                                </div>
                                            </div>
                                            <div class="progress-status col-md-3 col-sm-3">
                                                @if ($invoice_level == 1 )
                                                    <span class="border-left-active" style="width: 100%; margin-left: 0px;  "></span>
                                                    <span class="themeclr-border-sub wow fadeIn" data-wow-offset="50" data-wow-delay=".40s" > <span class="dot-sub dot-center theme-clr-bg"></span></span>
                                                    <br>
                                                    <p class="sub-status" style="margin-left:-33px;">
                                                        {{\Carbon\Carbon::parse($shipment->created_date)->format('d - m -Y')}}
                                                    </p>
                                                @else
                                                    <span class="border-left-active" style="width: 100%; margin-left: 0px; border-color:#54d856;"></span>
                                                    <span class="dot dot-left-active wow fadeIn" data-wow-offset="50" data-wow-delay=".40s" style="width: 20px; height:20px; top:-8px; background:#54d856;"></span>
                                                @endif

                                                {{-- <span class="border-left-active" style="width: 100%; margin-left: 0px;"></span>
                                                <span class="dot dot-left-active wow fadeIn" data-wow-offset="50" data-wow-delay=".40s" style="width: 20px; height:20px; top:-8px;"></span> --}}
                                            </div>
                                            <div class="progress-status col-md-3 col-sm-3">
                                                @if ($invoice_level == 2)
                                                    <span class="border-left first_border " style="width: 100%;margin-left: 0px;"></span>
                                                    <span class="themeclr-border-sub wow fadeIn" data-wow-offset="50" data-wow-delay=".40s"> <span class="dot-sub dot-center theme-clr-bg"></span></span>
                                                @elseif ($invoice_level > 2)
                                                    <span class="border-left first_border" style="width: 111%; margin-left: 0px; border-color:#54d856;"></span>
                                                    <span class="dot dot-left-sub wow fadeIn" data-wow-offset="50" data-wow-delay=".40s" style="background:#54d856;"></span>
                                                @else
                                                    <span class="border-left first_border" style="width: 111%; margin-left: 0px;"></span>
                                                    <span class="dot dot-left-sub wow fadeIn" data-wow-offset="50" data-wow-delay=".40s"></span>
                                                @endif
                                                <p class="sub-status" style="margin-left:-33px;" > Received <br>

                                                    {{$invoice_level == 2?\Carbon\Carbon::parse($shipment->created_date)->format('d - m -Y'):''}}

                                                </p>
                                            </div>
                                            <div class="progress-status col-md-3 col-sm-3">
                                                @if ($invoice_level == 3)
                                                    <span class="border-left first_border " style="width: 100%;margin-left: 0px;"></span>
                                                    <span class="themeclr-border-sub wow fadeIn" data-wow-offset="50" data-wow-delay=".40s"> <span class="dot-sub dot-center theme-clr-bg"></span></span>
                                                @elseif ($invoice_level > 3)
                                                    <span class="border-left first_border" style="width: 111%; margin-left: 0px; border-color:#54d856;"></span>
                                                    <span class="dot dot-left-sub wow fadeIn" data-wow-offset="50" data-wow-delay=".40s" style="background:#54d856;"></span>
                                                @else
                                                    <span class="border-left first_border" style="width: 111%; margin-left: 0px;"></span>
                                                    <span class="dot dot-left-sub wow fadeIn" data-wow-offset="50" data-wow-delay=".40s"></span>
                                                @endif
                                                {{-- <span class="border-left first_border" style="width: 111%; margin-left: 0px;"></span> --}}
                                                {{-- <span class="dot dot-left-sub wow fadeIn" data-wow-offset="50" data-wow-delay=".40s"></span> --}}
                                                <p class="sub-status" style="margin-left:-33px;"> Forwarded <br>
                                                    {{$invoice_level == 3?\Carbon\Carbon::parse($shipment->created_date)->format('d - m -Y'):''}}
                                                </p>
                                            </div>
                                            <div class="progress-status col-md-3 col-sm-3">

                                                @if ($invoice_level == 4)
                                                    <span class="border-left first_border " style="width: 111%;margin-left: 0px;"></span>
                                                    <span class="themeclr-border-sub wow fadeIn" data-wow-offset="50" data-wow-delay=".40s"> <span class="dot-sub dot-center theme-clr-bg"></span></span>
                                                @elseif ($invoice_level > 4)
                                                    <span class="border-left first_border" style="width: 111%; margin-left: 0px; border-color:#54d856;"></span>
                                                    <span class="dot dot-left-sub wow fadeIn" data-wow-offset="50" data-wow-delay=".40s" style="background:#54d856;"></span>
                                                @else
                                                    <span class="border-left first_border" style="width: 111%; margin-left: 0px;"></span>
                                                    <span class="dot dot-left-sub wow fadeIn" data-wow-offset="50" data-wow-delay=".40s"></span>
                                                @endif
                                                {{-- <span class="border-left first_border arrived" style="width: 111%; margin-left: 0px;"></span> --}}
                                                {{-- <span class="dot dot-left-sub wow fadeIn" data-wow-offset="50" data-wow-delay=".40s" ></span> --}}
                                                <p class="sub-status" style="margin-left:-33px;"> Arrived <br>
                                                    {{$invoice_level == 4?\Carbon\Carbon::parse($shipment->created_date)->format('d - m -Y'):''}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 second_bar col-sm-6">
                                        <div class="row">
                                            <div class="row progress-content upper-text" style="margin-bottom: 30px;">
                                                <div class="col-md-5 col-xs-8 col-sm-3 sec_status" >
                                                    @if ($invoice_level >= 5)
                                                        <h2 class="title-1 no-margin ml-2" style="margin-left: -60px;border-color:#54d856;">Waiting for clearance</h2>
                                                    @else
                                                        <h2 class="title-1 no-margin ml-2" style="margin-left: -60px; ">Waiting for clearance</h2>
                                                    @endif
                                                </div>

                                                <div class="col-md-4 col-xs-8 col-sm-6 text-center sec_status">
                                                    @if ($invoice_level == 6 || $invoice_level != 7 || $invoice_level != 8)
                                                        <h2 class="title-1 no-margin ml-2"><span class="">Out for delivery</span></h2>
                                                    @elseif ($invoice_level == 7)
                                                        <h2 class="title-1 no-margin ml-2"><span class="">Pending</span></h2>
                                                    @elseif ($invoice_level == 8)
                                                        <h2 class="title-1 no-margin ml-2"><span class="">Hold</span></h2>
                                                    @endif
                                                </div>
                                                <div class="col-md-2 col-xs-8 col-sm-2 text-right sec_status">
                                                    @if ($invoice_level == 9)
                                                    <h2 class="title-1 no-margin ml-2" style="margin-right: -70px;">Not Delivered</h2>
                                                    @else
                                                    <h2 class="title-1 no-margin ml-2" style="margin-right: -70px;">Delivered</h2>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-wrap">
                                            <div class="progress-status">
                                                @if ($invoice_level >= 6)
                                                    <span class="border-left bl1" style="border-color:#54d856 !important;"></span>
                                                @else
                                                    <span class="border-left bl1"></span>
                                                @endif

                                                @if ($invoice_level >= 11 || $invoice_level >= 9 )
                                                    <span class="border-right br1" style="border-color:#54d856 !important;"></span>
                                                @else
                                                    <span class="border-right br1"></span>
                                                @endif
                                                @if ($invoice_level == 5)
                                                    <span class="themeclr-border-sub wow fadeIn d1" data-wow-offset="50" data-wow-delay=".40s"> <span class="dot-sub dot-center theme-clr-bg"></span></span>
                                                    <p style="padding-top: 20px; margin-left: -22px; max-width: 230px;">
                                                        {{$invoice_level == 5?\Carbon\Carbon::parse($shipment->created_date)->format('d - m -Y'):''}}
                                                    </p>

                                                @elseif ($invoice_level > 5)
                                                    <span class="dot dot-left d1 wow fadeIn" data-wow-offset="50" data-wow-delay=".40s" style="width: 20px; height:20px; top:-8px; background:#54d856;"></span>
                                                @else
                                                    <span class="dot dot-left d1 wow fadeIn" data-wow-offset="50" data-wow-delay=".40s" style="width: 20px; height:20px; top:-8px;"></span>
                                                @endif

                                                @if ($invoice_level == 6 || $invoice_level == 7 || $invoice_level == 8)
                                                    <span class="dot dot-left themeclr-border-main d2 wow fadeIn" data-wow-offset="50" data-wow-delay=".40s" style="left: 58%; width: 20px; height:20px; top:-12px; background:none;"> <span class="dot-sub dot-center theme-clr-bg"></span></span>
                                                    <p  style="padding-top: 20px; margin-left: 120px; text-align:center; ">
                                                        {{\Carbon\Carbon::parse($shipment->created_date)->format('d - m -Y')}}
                                                    </p>
                                                @elseif ($invoice_level > 6)
                                                    <span class="dot dot-left d2 wow fadeIn" data-wow-offset="50" data-wow-delay=".50s" style="left: 58%; width: 20px; height:20px; top:-8px;background:#54d856;"></span>
                                                @else
                                                    <span class="dot dot-left d2 wow fadeIn" data-wow-offset="50" data-wow-delay=".50s" style="left: 58%; width: 20px; height:20px; top:-8px;"></span>
                                                @endif

                                                @if ($invoice_level == 11 || $invoice_level == 9)
                                                    <span class=" dot-right themeclr-border-main d3 wow fadeIn" data-wow-offset="50" data-wow-delay=".40s" style="background:none;"> <span class="dot-sub dot-center theme-clr-bg"></span></span>
                                                    <p style="padding-top: 20px;  text-align:end;">
                                                        {{\Carbon\Carbon::parse($shipment->created_date)->format('d - m -Y')}}<br>
                                                    </p>
                                                @else
                                                    <span class="dot dot-right d3 wow fadeIn" data-wow-offset="50" data-wow-delay=".60s" style=" width: 20px; height:20px; top:-8px;"></span>
                                                @endif

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>

        </div>
    </section>
    <!-- /.Tracking -->

</article>
<!-- /.Content Wrapper -->

@endsection
