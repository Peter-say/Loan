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
                @if (session('success_message'))
                    <div class="alert alert-success">
                        {{ session('success_message') }}
                    </div>
                @endif

                @if (session('error_message'))
                    <div class="alert alert-danger">
                        {{ session('error_message') }}
                    </div>
                @endif

                <div class="col-md-12 col-lg-10">
                    <form action="{{ route('web.send-application') }}" method="post">
                        @csrf
                        <div class="row list-input">
                            <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <input type="number" name="loan_amount"
                                        class="@error('loan_amount') is-invalid @enderror" placeholder="LOAN AMOUNT (₦) *"
                                        required>
                                    @error('loan_amount')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <select name="purpose_of_loan" class="@error('purpose_of_loan') is-invalid @enderror"
                                        required>
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
                                    @error('purpose_of_loan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <input type="text" name="first_name"
                                        class="@error('first_name') is-invalid @enderror" placeholder="First Name" required>
                                    @error('first_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <input type="text" name="last_name" class="@error('last_name') is-invalid @enderror"
                                        placeholder="Last Name" required>
                                    @error('last_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <input type="email" name="email" class="@error('email') is-invalid @enderror"
                                        placeholder="Email" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <input type="text" name="phone" class="@error('phone') is-invalid @enderror"
                                        placeholder="Phone" required>
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <input type="" name="date_of_birth"
                                        class="@error('date_of_birth') is-invalid @enderror" placeholder="Date of Birth *"
                                        required>
                                    @error('date_of_birth')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <select name="martial_status" class="@error('martial_status') is-invalid @enderror"
                                        required>
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
                                    @error('martial_status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <select name="number_of_dependants"
                                        class="@error('number_of_dependants') is-invalid @enderror" required>
                                        <option value="NUMBER OF DEPENDANTS *">NUMBER OF DEPENDANTS *</option>
                                        <option value="0 Dependants">0 Dependants</option>
                                        <option value="1 Dependants">1 Dependants</option>
                                        <option value="2 Dependants">2 Dependants</option>
                                        <option value="3 Dependants">3 Dependants</option>
                                        <option value="4 Dependants">4 Dependants</option>
                                        <option value="5+ Dependants">5+ Dependants</option>
                                    </select>
                                    @error('number_of_dependants')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <input type="text" name="country" class="@error('country') is-invalid @enderror"
                                        placeholder="Country" required>
                                    @error('country')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <input type="text" name="city" class="@error('city') is-invalid @enderror"
                                        placeholder="TOWN/CITY *" required>
                                    @error('city')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <input type="text" name="street" class="@error('street') is-invalid @enderror"
                                        placeholder="STREET *" required>
                                    @error('street')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <input type="text" name="house_number"
                                        class="@error('house_number') is-invalid @enderror"
                                        placeholder="HOUSE NAME/NUMBER *" required>
                                    @error('house_number')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <input type="text" name="house_status"
                                        class="@error('house_status') is-invalid @enderror"
                                        placeholder="HOMEOWNER STATUS (Rent Or Own) *" required>
                                    @error('house_status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <input type="text" name="address" class="@error('address') is-invalid @enderror"
                                        placeholder="TIME AT ADDRESS *" required>
                                    @error('address')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <select name="employment_status"
                                        class="@error('employment_status') is-invalid @enderror" required>
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
                                    @error('employment_status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <input type="text" name="employment_industry"
                                        class="@error('employment_industry') is-invalid @enderror"
                                        placeholder="EMPLOYMENT INDUSTRY *" required>
                                    @error('employment_industry')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <input type="text" name="month_income"
                                        class="@error('month_income') is-invalid @enderror"
                                        placeholder="MONTHLY INCOME (₦) *" required>
                                    @error('month_income')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 mr0">
                                <div class="single-get-touch">
                                    <textarea type="text" name="cover_letter"
                                        class="@error('employment_industry') is-invalid @enderror"
                                        placeholder="Cover Letter *" cols="10" required></textarea>
                                    @error('cover_letter')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="single-get-touch">
                                    <input type="text" name="employer_name" class="@error('martial_status') is-invalid @enderror" placeholder="EMPLOYER NAME *" required>
                                </div>
                            </div>
                            <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <input type="text" name="employer_work_phone" placeholder="WORK PHONE NUMBER *"
                                        required>
                                </div>
                            </div> --}}
                           
                            <div class="col-md-12">
                                <div class="single-get-check">
                                    <label class="radiobox"> Male
                                        <input type="radio" checked="checked" name="gender" value="male">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radiobox">Female
                                        <input type="radio" name="gender" value="female">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="single-get-touch">
                                    <button type="submit" class="btn btn-default btn-sm">Apply
                                        Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
