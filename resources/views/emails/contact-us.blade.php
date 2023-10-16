<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #007BFF;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
        }

        .title {
            color: #007BFF;
        }

        .info-item {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Contact Us</h1>
    </div>
    <div class="container">
        <p>Hello,</p>
        <p>You have received a new message via the contact form on your website.</p>

        <div class="title">Contact Information:</div>
        <div class="info-item"><strong>Name:</strong> {{ $contactMessage['name'] }}</div>
        <div class="info-item"><strong>Email:</strong> {{ $contactMessage['email'] }}</div>
        @if (!empty($contactMessage['phone']))
            <div class="info-item"><strong>Phone:</strong> {{ $contactMessage['phone'] }}</div>
        @endif
        @if (!empty($contactMessage['subject']))
            <div class="info-item"><strong>Subject:</strong> {{ $contactMessage['subject'] }}</div>
        @endif

        <div class="title">Message:</div>
        <p>{{ $contactMessage['message'] }}</p>

    </div>
</body>

</html>
