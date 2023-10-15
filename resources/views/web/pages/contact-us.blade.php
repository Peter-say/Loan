@extends('web.layouts.app')

@section('contents')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Contact</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end of page header -->

    <section class="section-padding contact-us-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="get-in-touch">
                        <h2>Get in Touch</h2>
                        <p>The passages of Lorem Ipsum available but the majority have suffered alteration embarrased</p>
                    </div>
                    <form action="http://thegenius.co/html/loanplus/preview/mail.php" method="POST">
                        <div class="row list-input">
                            <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <input type="text" name="name" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <input type="text" name="phone" placeholder="Phone" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-get-touch">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-get-touch">
                                    <textarea name="message" placeholder="Message" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-get-touch">
                                    <button type="submit" name="submit" class="btn btn-default btn-sm">SEND
                                        MESSAGE</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-5">
                    <div class="choose-img">
                        <img src="asset/img/ceo.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-contact-info">
                        <div class="icon">
                            <img src="asset/img/map-pin-2.png" alt="">
                        </div>
                        <div class="content">
                            <p>Loanplus 201, San Francis, <br>
                                United States.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-contact-info">
                        <div class="icon">
                            <img src="asset/img/envalope-3.png" alt="">
                        </div>
                        <div class="content">
                            <p>mail@loanplus.com <br>
                                reply within 2 Hours</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-contact-info">
                        <div class="icon">
                            <img src="asset/img/call-2.png" alt="">
                        </div>
                        <div class="content">
                            <p>+ 44-567-000-0124 <br>
                                Call @ 8.30am to 5.00pm </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- start google map area -->
    <div class="googlemap-area">
        <div class="gmap" id="gmap"></div>
    </div>
    <!-- end of google map area -->
@endsection
