<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Mail\LoanApplication;
use App\Services\LoanApplicationService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class loanApplicationController extends Controller
{
    public function applyNow()
    {
        return view('web.pages.apply-now');
    }

    public function sendApplication(Request $request)
    {
    //    dd( $request->all());
        try {
            // Validation rules
        $request->validate([
            'loan_amount' => 'required|numeric',
            'purpose_of_loan' => 'required',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'date_of_birth' => 'required',
            'martial_status' => 'required',
            'number_of_dependants' => 'required',
            'country' => 'required|string',
            'city' => 'required|string',
            'street' => 'required|string',
            'house_number' => 'required|string',
            'house_status' => 'required|string',
            'address' => 'required|string',
            'employment_status' => 'required',
            'employment_industry' => 'required|string',
            'month_income' => 'required|numeric',
            'gender' => 'required|string|in:male,famale',
            'cover_letter' => 'required|string',
        ]);
      
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
            'cover_letter' => $request->input('cover_letter'),
        ];

        $supportTeam = 'admin@gmail.com';
        // try {
            Mail::to($supportTeam)->send(new LoanApplication($loanApplication));
            return back()->with('success_message', 'Loan application submitted successfully.');
        } catch (Exception $e) {
            return back()->with('error_message', 'An error occurred while processing your request. Please, try again');
        }catch (ValidationException $e) {
            return back()->with($e->getMessage());
        }
    }
}
