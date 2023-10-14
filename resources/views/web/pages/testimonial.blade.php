@extends('web.layouts.app')

@section('contents')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Testimonial</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Testimonial</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end of page header -->
    <!-- start testimonial page -->
    <section class="testimonial-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-testimonial">
                        <div class="testimonial-img">
                            <img src="{{$web_assets}}/asset/img/testimonial.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h4>Dwayne Johnson</h4>
                            <h5>Sales Consultant</h5>
                            <p>“ A majority have suffer alte form and web sites still innr their infancy bose.”</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-testimonial">
                        <div class="testimonial-img">
                            <img src="{{$web_assets}}/asset/img/testimonial-1.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h4>Stuart Binny</h4>
                            <h5>Sales Consultant</h5>
                            <p>“ A majority have suffer alte form and web sites still innr their infancy bose.”</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-testimonial">
                        <div class="testimonial-img">
                            <img src="{{$web_assets}}/asset/img/testimonial-2.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h4>Mukib kukis</h4>
                            <h5>Sales Consultant</h5>
                            <p>“ A majority have suffer alte form and web sites still innr their infancy bose.”</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-testimonial">
                        <div class="testimonial-img">
                            <img src="{{$web_assets}}/asset/img/testimonial-2.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h4>johon due</h4>
                            <h5>Sales Consultant</h5>
                            <p>“ A majority have suffer alte form and web sites still innr their infancy bose.”</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="single-testimonial">
                        <div class="testimonial-img">
                            <img src="{{$web_assets}}/asset/img/testimonial.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h4>Karolayns D</h4>
                            <h5>Sales Consultant</h5>
                            <p>“ A majority have suffer alte form and web sites still innr their infancy bose.”</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-testimonial">
                        <div class="testimonial-img">
                            <img src="{{$web_assets}}/asset/img/testimonial-1.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h4>Roky tom</h4>
                            <h5>Sales Consultant</h5>
                            <p>“ A majority have suffer alte form and web sites still innr their infancy bose.”</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of testimonial page -->
    <section class="second-testimonial section-padding">
        <div class="container">
            <div class="second-testimonial-slider owl-carousel">
                <div class="second-single-testimonial">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-12">
                            <div class="left-qoute">“</div>
                            <p>“ A majority have suffer alte form and web sites still innr their infancy bose if you are going to use a passage of Lorem Ipsum, you need to be sure there isn't embarrassing hidden in the middle of text.”</p>
                            <div class="testimonaol-info">
                                <h4>Dwayne Johnson</h4>
                                <p>Sales Consultant</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="second-single-testimonial">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-12">
                            <div class="left-qoute">“</div>
                            <p>“ A majority have suffer alte form and web sites still innr their infancy bose if you are going to use a passage of Lorem Ipsum, you need to be sure there isn't embarrassing hidden in the middle of text.”</p>
                            <div class="testimonaol-info">
                                <h4>Dwayne Johnson</h4>
                                <p>Sales Consultant</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="second-single-testimonial">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-12">
                            <div class="left-qoute">“</div>
                            <p>“ A majority have suffer alte form and web sites still innr their infancy bose if you are going to use a passage of Lorem Ipsum, you need to be sure there isn't embarrassing hidden in the middle of text.”</p>
                            <div class="testimonaol-info">
                                <h4>Dwayne Johnson</h4>
                                <p>Sales Consultant</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
