<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Loan Application</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #007BFF;
            margin-top: 0;
        }

        .section {
            margin-top: 20px;
            border-top: 1px solid #ccc;
            padding-top: 10px;
        }

        .info-label {
            font-weight: bold;
        }

        .info-value {
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>New Loan Application</h1>
        <div class="section">
            <div class="info-label">Loan Amount:</div>
            <div class="info-value">₦{{ number_format($loanApplication['loan_amount']) }}</div>
        </div>
        <div class="section">
            <div class="info-label">Purpose of Loan:</div>
            <div class="info-value">{{ $loanApplication['purpose_of_loan'] }}</div>
        </div>
        <div class="section">
            <div class="info-label">First Name:</div>
            <div class="info-value">{{ $loanApplication['first_name'] }}</div>
        </div>
        <div class="section">
            <div class="info-label">Last Name:</div>
            <div class="info-value">{{ $loanApplication['last_name'] }}</div>
        </div>
        <div class="section">
            <div class="info-label">Email:</div>
            <div class="info-value">{{ $loanApplication['email'] }}</div>
        </div>
        <div class="section">
            <div class="info-label">Phone:</div>
            <div class="info-value">{{ $loanApplication['phone'] }}</div>
        </div>
        <div class="section">
            <div class="info-label">Date of Birth:</div>
            <div class="info-value">{{ $loanApplication['date_of_birth'] }}</div>
        </div>
        <div class="section">
            <div class="info-label">Marital Status:</div>
            <div class="info-value">{{ $loanApplication['martial_status'] }}</div>
        </div>
        <div class="section">
            <div class="info-label">Number of Dependents:</div>
            <div class="info-value">{{ $loanApplication['number_of_dependants'] }}</div>
        </div>
        <div class="section">
            <div class="info-label">Country:</div>
            <div class="info-value">{{ $loanApplication['country'] }}</div>
        </div>
        <div class="section">
            <div class "info-label">City:</div>
            <div class="info-value">{{ $loanApplication['city'] }}</div>
        </div>
        <div class="section">
            <div class="info-label">Street:</div>
            <div class="info-value">{{ $loanApplication['street'] }}</div>
        </div>
        <div class="section">
            <div class="info-label">House Number:</div>
            <div class="info-value">{{ $loanApplication['house_number'] }}</div>
        </div>
        <div class="section">
            <div class="info-label">House Status:</div>
            <div class="info-value">{{ $loanApplication['house_status'] }}</div>
        </div>
        <div class="section">
            <div class="info-label">Address:</div>
            <div class="info-value">{{ $loanApplication['address'] }}</div>
        </div>
        <div class="section">
            <div class="info-label">Employment Status:</div>
            <div class="info-value">{{ $loanApplication['employment_status'] }}</div>
        </div>
        <div class="section">
            <div class="info-label">Employment Industry:</div>
            <div class="info-value">{{ $loanApplication['employment_industry'] }}</div>
        </div>
        <div class="section">
            <div class="info-label">Monthly Income:</div>
            <div class="info-value">{{ $loanApplication['month_income'] }}</div>
        </div>
        <div class="section">
            <div class="info-label">Gender:</div>
            <div class="info-value">{{ $loanApplication['gender'] }}</div>
        </div>
        <div class="section">
            <div class="info-label">Gender:</div>
            <div class="info-value">{{ $loanApplication['cover_letter'] }}</div>
        </div>
    </div>
</body>
</html>
