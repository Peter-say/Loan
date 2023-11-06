@extends('web.layouts.app')

@section('contents')
    <!-- end of header area -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Mortgages</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mortgages</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end of page header -->

    <!-- start services image page -->

    <section class="services-image-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-services-image">
                        <div class="services-thumb">
                            <a href="{{route('web.mortgage.conventional-loan')}}"><img src="{{$web_assets}}/asset/img/loan/conventional-loan.jpg" alt=""></a>
                        </div>
                        <div class="services-img-content">
                            <a href="{{route('web.mortgage.conventional-loan')}}">
                                <h4>Conventional Loan</h4>
                            </a>
                            <p>Discover the flexibility of Conventional Loans – unsecured with fixed payments for personal financial freedom.</p>
                            <a href="{{route('web.mortgage.conventional-loan')}}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-services-image">
                        <div class="services-thumb">
                            <a href="{{route('web.mortgage.jumbo-loan')}}"><img src="{{$web_assets}}/asset/img/loan/jumbo-loan.jpg" alt=""></a>
                        </div>
                        <div class="services-img-content">
                            <a href="{{route('web.mortgage.jumbo-loan')}}">
                                <h4>Jumbo Loan</h4>
                            </a>
                            <p>Explore the world of Jumbo Loans, a popular choice for major installment needs, including vehicles.</p>
                            <a href="{{route('web.mortgage.jumbo-loan')}}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-services-image">
                        <div class="services-thumb">
                            <a href="{{route('web.mortgage.fha-loan')}}"><img src="{{$web_assets}}/asset/img/loan/fha-loan.jpg" alt=""></a>
                        </div>
                        <div class="services-img-content">
                            <a href="{{route('web.mortgage.fha-loan')}}">
                                <h4>fha Loan</h4>
                            </a>
                            <p>Looking to expand your existing business? Find out how an fha Loan can provide the financial boost you need.</p>
                            <a href="{{route('web.mortgage.fha-loan')}}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-services-image">
                        <div class="services-thumb">
                            <a href="{{route('web.mortgage.va-loan')}}"><img src="{{$web_assets}}/asset/img/loan/va-loan.jpg" alt=""></a>
                        </div>
                        <div class="services-img-content">
                            <a href="{{route('web.mortgage.va-loan')}}">
                                <h4>VA Loan</h4>
                            </a>
                            <p>Our VA Loans are designed to make your dream home a reality, fitting your needs and budget perfectly.</p>
                            <a href="{{route('web.mortgage.va-loan')}}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-services-image">
                        <div class="services-thumb">
                            <a href="{{route('web.mortgage.usda-loan')}}"><img src="{{$web_assets}}/asset/img/loan/usda-loan.webp" alt=""></a>
                        </div>
                        <div class="services-img-content">
                            <a href="{{route('web.mortgage.usda-loan')}}">
                                <h4>USDA Loan</h4>
                            </a>
                            <p>USDA Loans and educational loans can help with education expenses, including related costs.</p>
                            <a href="{{route('web.mortgage.usda-loan')}}">Read More</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- end of services image -->

    <!-- start check rate btn area -->
    <section class="check-rate-btn-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="check-your-rate-text">
                        <h4>Checking your loan options does not affect your credit score</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="check-your-rate-btn">
                        <a href="#" class="btn btn-default btn-sm">CHECK YOUR RATE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of check rate btn area -->
    <!-- start footer area -->
@endsection
