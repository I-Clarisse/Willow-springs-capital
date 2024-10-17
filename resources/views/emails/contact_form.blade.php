<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 20px;
            background-image: url('https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0'); /* Background image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            margin: auto;
            border: 1px solid #009688;
            position: relative;
            z-index: 1;
        }
        h1 {
            color: #00796b;
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        p {
            color: #555555;
            line-height: 1.6;
            margin: 10px 0;
        }
        .footer {
            margin-top: 30px;
            font-size: 0.9em;
            color: #00796b;
            text-align: center;
            border-top: 1px solid #009688;
            padding-top: 10px;
        }
        .highlight {
            background-color: #c8e6c9;
            padding: 10px;
            border-radius: 8px;
            margin: 10px 0;
        }
        .message {
            background-color: #ffe0b2;
            padding: 10px;
            border-radius: 8px;
            margin: 10px 0;
            border-left: 5px solid #ff9800;
        }
        .illustration {
            position: absolute;
            top: -20px; /* Adjust for desired placement */
            left: -20px; /* Adjust for desired placement */
            width: 100px; /* Size of illustration */
            height: auto;
            z-index: 0;
            opacity: 0.3; /* Faded look */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>New Contact Form Submission</h1>
        <p class="highlight"><strong>First Name:</strong> {{ $emailData['first_name'] }}</p>
        <p class="highlight"><strong>Last Name:</strong> {{ $emailData['last_name'] }}</p>
        <p class="highlight"><strong>Email:</strong> {{ $emailData['email'] }}</p>
        <p class="message"><strong>Message:</strong><br>{{ $emailData['message'] }}</p>
    </div>
    <div class="footer">
        <p>Thank you for reaching out!</p>
        <p>Willows Springs Capital</p>
    </div>
</body>
</html>
