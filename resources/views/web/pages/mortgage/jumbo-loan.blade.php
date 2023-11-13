@extends('web.layouts.app')

@section('contents')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Jumbo Loan</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('web.mortgage.') }}">Mortgage</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Jumbo Loan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end of banner area -->
    <section class="services-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <div class="services-details">
                        <div class="services-thumb-lg">
                            <img src="{{ $web_assets }}/asset/img/loan/jumbo-loan.jpg" alt="">
                        </div>
                        <h2>Get Jumbo Loan</h2>
                        <p>Commercial Legacy Financial Services (CLFS) offers loans that can assist you in financing homes
                            with a price exceeding $726,200. In such cases, a jumbo loan may be necessary, as it comes with
                            more stringent qualification criteria.</p>
                        <p>If you are in search of a loan, we encourage you to reach out to us by giving us a call or
                            visiting us for a personalized consultation. Alternatively, if you prefer electronic
                            communication, kindly fill out our contact form, and a representative from the bank will
                            promptly connect with you. At Commercial Legacy Financial Services (CLFS), we possess a deep
                            understanding of both the local and international markets, and we are dedicated to the financial
                            well-being of our customers!</p>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ $web_assets }}/asset/img/single-services.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                                <h5>Jumbo Loan Benefits:</h5>
                                <ul>
                                    <li>Flexible 6mo No Payments</li>
                                    <li>No Extra Loan Fees</li>
                                    <li>Competitive Rates</li>
                                    <li>Cost Reductions</li>
                                    <li>Committed Service</li>
                                </ul>
                            </div>

                        </div>
                        <hr>
                        <h2>Loan Simple Process</h2>
                        <p>You need to be sure there isn't anything embarrassing hidden variations of passages of Lorem
                            Ipsum available but the majority have suffered alteration in some form, by ended injected
                            humour.</p>
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <div class="single-improvement">
                                    <div class="icon">
                                        <span class="pe-7s-angle-right-circle"></span>
                                    </div>
                                    <h4>Simple procedure</h4>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="single-improvement">
                                    <div class="icon">
                                        <span class="pe-7s-note2"></span>
                                    </div>
                                    <h4>Less Document</h4>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="single-improvement">
                                    <div class="icon">
                                        <span class="pe-7s-delete-user"></span>
                                    </div>
                                    <h4>No Security or Guarantors</h4>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h2>Jumbo Loans: A Better Fit for Your Needs</h2>
                        <p>Unlike car loans with terms of one to five years, jumbo loans cater to the unique financing needs
                            of high-value homes. With a jumbo loan, the repayment terms are designed to align with the
                            magnitude of your investment in real estate. There's no need for worry about falling behind on
                            short-term payments, as jumbo loans offer a more flexible and accommodating structure.</p>
                        <p>Unlike equity loans, where a lump sum payment may become a challenge at the end of the term,
                            jumbo loans provide a more tailored approach to match your financial capabilities. With
                            competitive fixed or variable interest rates, jumbo loans empower you to manage the financing of
                            your luxury home more effectively, ensuring a smooth and sustainable repayment process.</p>
                        <p>Explore the benefits of jumbo loans for your high-value property, offering a more suitable
                            solution compared to traditional equity loans.</p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="inspections-tab" data-toggle="tab" href="#inspections"
                                    role="tab" aria-controls="inspections" aria-selected="true">Feature</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="mortgage-tab" data-toggle="tab" href="#mortgage" role="tab"
                                    aria-controls="mortgage" aria-selected="false">Eligibility</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="overspending-tab" data-toggle="tab" href="#overspending"
                                    role="tab" aria-controls="overspending" aria-selected="false">Benifits</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="inspections" role="tabpanel"
                                aria-labelledby="inspections-tab">
                                <p>Exploring the benefits of Jumbo Loans is crucial. Unlike standard mortgages, jumbo loans
                                    offer:</p>
                                <ul>
                                    <li>Higher Financing Limits: Tailored for high-value properties, exceeding conventional
                                        loan thresholds.</li>
                                    <li>Flexible Repayment Options: Enjoy a variety of payment schedules to suit your
                                        financial preferences.</li>
                                    <li>Stricter Qualification Standards: Ensuring a robust financial profile with higher
                                        credit scores and thorough verification.</li>
                                    <li>Competitive Interest Structures: Choose from competitive fixed or variable rates
                                        based on your preferences.</li>
                                    <li>Tailored Financing Solutions: Customizable terms designed to meet the unique needs
                                        of luxury property transactions.</li>
                                </ul>
                                <p>Ensure your real estate financing aligns with your goals. Jumbo loans provide a
                                    specialized approach for high-value property acquisitions.</p>

                            </div>
                            <div class="tab-pane fade" id="mortgage" role="tabpanel" aria-labelledby="mortgage-tab">
                                <p>Understanding the eligibility criteria for Jumbo Loans is crucial to secure financing for high-value properties. Unlike standard mortgages, jumbo loans have specific requirements:</p>
                                <ul>
                                    <li>Higher Credit Scores: Typically, borrowers need strong credit histories to qualify for jumbo loans.</li>
                                    <li>Larger Down Payments: Expect to provide a substantial down payment, often higher than what's required for conventional loans.</li>
                                    <li>Robust Income Verification: Lenders may scrutinize income and assets more closely to ensure repayment capability.</li>
                                    <li>Lower Debt-to-Income Ratio: Maintaining a lower debt-to-income ratio is often a key factor in meeting eligibility criteria.</li>
                                    <li>Property Appraisal: The property's appraisal must align with the loan amount, reflecting its high value.</li>
                                </ul>
                                <p>Ensure you meet these eligibility criteria when considering a jumbo loan for your real estate investment. Consulting with a mortgage professional can provide personalized guidance based on your financial situation.</p>
                                

                            </div>
                            <div class="tab-pane fade" id="overspending" role="tabpanel" aria-labelledby="overspending-tab">
                                <p>While jumbo loans have specific eligibility criteria, they also offer several benefits
                                    for borrowers looking to finance high-value properties:</p>
                                <ul>
                                    <li><b>Financing Luxury Properties:</b> Jumbo loans allow you to finance luxury homes
                                        and high-end real estate beyond the limits of standard mortgages.</li>
                                    <li><b>Flexible Loan Terms:</b> Enjoy flexible repayment terms and options, tailored to
                                        meet the unique financial requirements of high-value properties.</li>
                                    <li><b>Competitive Interest Rates:</b> Despite the higher loan amounts, jumbo loans
                                        often come with competitive fixed or variable interest rates.</li>
                                    <li><b>Customized Solutions:</b> Jumbo loans provide a customizable approach, allowing
                                        for tailored financing solutions based on individual needs.</li>
                                    <li><b>Potential for Real Estate Investment:</b> Accessing a jumbo loan opens doors to
                                        lucrative real estate investments, especially in markets with high property values.
                                    </li>
                                </ul>
                                <p>Considering these benefits, a jumbo loan can be a strategic financial tool for acquiring
                                    and managing real estate investments. Consult with a mortgage professional to explore
                                    how a jumbo loan aligns with your financial goals and property aspirations.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="sidebar-area">
                        <div class="single-sidebar">
                            <div class="services">
                                <ul>
                                    <li><a href="{{ route('web.home-loan') }}"><i class="fa fa-long-arrow-right"></i>Home
                                            Loan</a></li>
                                    <li><a href="{{ route('web.business-loan') }}"><i
                                                class="fa fa-long-arrow-right"></i>Business Loan</a></li>
                                    <li><a href="{{ route('web.car-loan') }}"><i class="fa fa-long-arrow-right"></i>Car
                                            Loan</a></li>
                                    <li><a href="{{ route('web.educational-loan') }}"><i
                                                class="fa fa-long-arrow-right"></i>Educational Loan</a></li>
                                    <li><a href="{{ route('web.mortgage.') }}"><i
                                                class="fa fa-long-arrow-right"></i>Mortgages Loan</a></li>

                                    {{-- <li><a href="#"><i class="fa fa-long-arrow-right"></i>Debt Consolidation</a></li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="single-sidebar">
                            <h4 class="sidebar-title">Brochures</h4>
                            <div class="download-pdf">
                                <a href="#"><i class="fa fa-file-pdf-o"></i>Download file PDF</a>
                                <a href="#"><i class="fa fa-file-word-o"></i>Download file DOC</a>
                            </div>
                        </div>
                        <div class="single-sidebar">
                            <div class="sidebar-get-in-touch">
                                <h4>Get in Touch with us</h4>
                                <p>You can also send us an email
                                    and we’ll get in touch shortly, or <span>Toll Free Number</span></p>
                                <ul>
                                    <li><span><img src="asset/img/scall.png" alt=""></span>(+44) 123 5678 8988
                                    </li>
                                    <li><span><img src="asset/img/senvelope.png" alt=""></span>info@loanplus.com
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
