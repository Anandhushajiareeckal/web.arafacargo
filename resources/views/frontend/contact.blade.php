@extends('layouts.frontend')
@section('contact')
active
@endsection
@section('content')

<!-- Content Wrapper -->
<article>
    <!-- Breadcrumb -->
    <section class="theme-breadcrumb pad-50">
        <div class="theme-container container ">
            <div class="row">
                <div class="col-sm-8 pull-left">
                    <div class="title-wrap">
                        <h2 class="section-title no-margin"> contact us </h2>
                        <p class="fs-16 no-margin"> Get in touch with us easily </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb-menubar list-inline">
                        <li><a href="/" class="gray-clr">Home</a></li>
                        <li class="active">contact</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- /.Breadcrumb -->

    <!-- Contact Us -->
    <section class="contact-page pad-30">
        <div class="theme-container container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-md-offset-1">
                    <ul class="contact-detail title-2">
                        <li class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s"> <span>ABUDHABI No:</span> <p class="gray-clr"> +02-5659017 <br> +056-5441003 <br> +056-5463000 </p> </li>
                        <li class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".40s"> <span>AL AIN No:</span> <p class="gray-clr"> +03 7640664 <br> +050 7530694 <br>+055 7176243</p> </li>
                        <li class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".40s"> <span>MUSAFFAH No:</span> <p class="gray-clr"> +02 5659017 <br> +054 4320240<br>+054 3225594</p> </li>
                        <li class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".50s"> <span>Email address:</span> <p class="gray-clr"> support@go.com <br> info@go.com </p> </li>
                    </ul>
                </div>

                <div class="col-md-5 col-sm-6 col-md-offset-1 contact-form">
                    <div class="calculate-form">
                        <form class="row" id="contact-form">
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                <div class="col-sm-3"> <label class="title-2"> Name: </label></div>
                                <div class="col-sm-9"> <input type="text" name="name" id="name" required placeholder="" class="form-control"> </div>
                            </div>
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                <div class="col-sm-3"> <label class="title-2"> Email: </label></div>
                                <div class="col-sm-9"> <input type="text" name="email" id="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="" class="form-control"> </div>
                            </div>
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                <div class="col-sm-3"> <label class="title-2"> Phone: </label></div>
                                <div class="col-sm-9"> <input type="text" name="phone" id="phone" placeholder="" class="form-control"> </div>
                            </div>
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                <div class="col-sm-3"> <label class="title-2"> Message: </label></div>
                                <div class="col-sm-9"> <textarea class="form-control" name="message" id="message" required cols="25" rows="3"></textarea> </div>
                            </div>
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                <div class="col-sm-9 col-xs-12 pull-right">
                                    <button type="submit" name="submit" id="submit_btn" class="btn-1"> send message </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.Contact Us -->

    <!-- Contact Map -->
    {{-- <section class="map pt-80">
        <div class="map-canvas">
            <div id="map-canvas"></div>
        </div>
    </section> --}}
    <!-- /.Contact Map -->

</article>
<!-- /.Content Wrapper -->


@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
   document.getElementById('contact-form').addEventListener('submit', function (e) {
            e.preventDefault();

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const message = document.getElementById('message').value;

            axios.post('/api/contact-form', {
                name: name,
                email: email,
                phone: phone,
                message: message
            })
            .then(response => {
                console.log(response.data);
                alert('Form submitted successfully!');
            })
            .catch(error => {
                console.error(error);
                alert('Form submission failed.');
            });
        });
</script>

@endsection
