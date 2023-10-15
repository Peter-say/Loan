@extends('web.layouts.app')

@section('contents')

 <!-- end of header area -->
 <div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Apply Now</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Apply Now</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- end of page header -->
<section class="section-padding contact-us-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <form action="http://thegenius.co/html/loanplus/preview/applynow.php" method="post">
                    <div class="row list-input">
                        <div class="col-md-6 mr0">
                            <div class="single-get-touch">
                                <input type="text" name="lamount" placeholder="LOAN AMOUNT (£) *" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-get-touch">
                                <select name="porpuse_of_loan" required>
                                    <option value="Choose Purpose">PURPOSE OF LOAN *</option>
                                    <option value="Business">Business</option>
                                    <option value="Car Purchase">Car Purchase</option>
                                    <option value="Holiday">Holiday</option>
                                    <option value="Home Purchase">Home Purchase</option>
                                    <option value="Investments">Investments</option>
                                    <option value="Payday Loan">Payday Loan</option>
                                    <option value="Wedding ">Wedding </option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mr0">
                            <div class="single-get-touch">
                                <input type="text" name="fname" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-get-touch">
                                <input type="text" name="lname" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="col-md-6 mr0">
                            <div class="single-get-touch">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-get-touch">
                                <input type="text" name="phone" placeholder="Phone" required>
                            </div>
                        </div>
                        <div class="col-md-6 mr0">
                            <div class="single-get-touch">
                                <input type="text" name="date_of_birth" placeholder="Date of Birth *" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-get-touch">
                                <select name="martial_state" required>
                                    <option value="Choose here">MARITAL STATUS *</option>
                                    <option value="Married">Married</option>
                                    <option value="Single">Single</option>
                                    <option value="Co-habiting">Co-habiting</option>
                                    <option value="Separated">Separated</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Civil Union">Civil Union</option>
                                    <option value="Widowed">Widowed</option>
                                    <option value="Partner">Partner</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mr0">
                            <div class="single-get-touch">
                                <select name="number_of_dependants" required>
                                    <option value="NUMBER OF DEPENDANTS *">NUMBER OF DEPENDANTS *</option>
                                    <option value="0 Dependants">0 Dependants</option>
                                    <option value="1 Dependants">1 Dependants</option>
                                    <option value="2 Dependants">2 Dependants</option>
                                    <option value="3 Dependants">3 Dependants</option>
                                    <option value="4 Dependants">4 Dependants</option>
                                    <option value="5+ Dependants">5+ Dependants</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-get-touch">
                                <input type="text" name="country" placeholder="Country" required>
                            </div>
                        </div>
                        <div class="col-md-6 mr0">
                            <div class="single-get-touch">
                                <input type="text" name="city" placeholder="TOWN/CITY *" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-get-touch">
                                <input type="text" name="street" placeholder="STREET *" required>
                            </div>
                        </div>
                        <div class="col-md-6 mr0">
                            <div class="single-get-touch">
                                <input type="text" name="house_number" placeholder="HOUSE NAME/NUMBER *" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-get-touch">
                                <input type="text" name="house_status" placeholder="HOMEOWNER STATUS *" required>
                            </div>
                        </div>
                        <div class="col-md-6 mr0">
                            <div class="single-get-touch">
                                <input type="text" name="time_address" placeholder="TIME AT ADDRESS *" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-get-touch">
                                <select name="employment_status" required>
                                    <option value="Choose Here">Choose Here</option>
                                    <option value="Full Time Employed ">Full Time Employed </option>
                                    <option value="Part Time Employed ">Part Time Employed </option>
                                    <option value="Self Employed ">Self Employed </option>
                                    <option value="Temporarily  Employed ">Temporarily Employed </option>
                                    <option value="Student ">Student </option>
                                    <option value="Pension">Pension</option>
                                    <option value="Disability">Disability</option>
                                    <option value="Unemployed ">Unemployed </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mr0">
                            <div class="single-get-touch">
                                <input type="text" name="employment_industry" placeholder="EMPLOYMENT INDUSTRY *" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-get-touch">
                                <input type="text" name="employer_name" placeholder="EMPLOYER NAME *" required>
                            </div>
                        </div>
                        <div class="col-md-6 mr0">
                            <div class="single-get-touch">
                                <input type="text" name="employer_work_phone" placeholder="WORK PHONE NUMBER *" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-get-touch">
                                <input type="text" name="month_income" placeholder="MONTHLY INCOME (£) *" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-get-check">
                                <label class="radiobox"> Male
                                    <input type="radio" checked="checked" name="gender">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radiobox">Female
                                    <input type="radio" name="gender">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-get-touch">
                                <button type="submit" name="submit" class="btn btn-default btn-sm">Apply Now</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection