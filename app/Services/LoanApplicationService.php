<?php

namespace App\Services;

use App\Mail\LoanApplication;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class LoanApplicationService
{

    public function processApplication(Request $request)
    {

        // Validation rules
        $rules = [
            'loan_amount' => 'required|numeric',
            'purpose_of_loan' => 'required|in:Business,Car Purchase,Holiday,Home Purchase,Investments,Payday Loan,Wedding,Other',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'date_of_birth' => 'required|date',
            'martial_status' => 'required|in:Married,Single,Co-habiting,Separated,Divorced,Civil Union,Widowed,Partner',
            'number_of_dependants' => 'required|in:0 Dependants,1 Dependants,2 Dependants,3 Dependants,4 Dependants,5+ Dependants',
            'country' => 'required|string',
            'city' => 'required|string',
            'street' => 'required|string',
            'house_number' => 'required|string',
            'house_status' => 'required|string',
            'address' => 'required|string',
            'employment_status' => 'required|in:Full Time Employed,Part Time Employed,Self Employed,Temporarily Employed,Student,Pension,Disability,Unemployed',
            'employment_industry' => 'required|string',
            'month_income' => 'required|numeric',
            'gender' => 'required|string|in:male,famale'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $loanApplication = [
            'loan_amount' => $request->input('loan_amount'),
            'purpose_of_loan' => $request->input('purpose_of_loan'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'date_of_birth' => $request->input('date_of_birth'),
            'martial_status' => $request->input('martial_status'),
            'number_of_dependants' => $request->input('number_of_dependants'),
            'country' => $request->input('country'),
            'city' => $request->input('city'),
            'street' => $request->input('street'),
            'house_number' => $request->input('house_number'),
            'house_status' => $request->input('house_status'),
            'address' => $request->input('address'),
            'employment_status' => $request->input('employment_status'),
            'employment_industry' => $request->input('employment_industry'),
            'month_income' => $request->input('month_income'),
            'gender' => $request->input('gender'),
        ];

        $supportTeam = 'admin@gmail.com';
        // try {
            Mail::to($supportTeam)->send(new LoanApplication($loanApplication));
        // } catch (\Exception $e) {
        //     return back()->with('error_message', 'An error occurred while processing your request.');
        // }
        // return $request;
    }
}
