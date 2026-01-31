<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Book Title</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: #ffffff;
            text-decoration: none;
            border-radius: 3px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>{{ __("Welcome aboard!") }}</h1>
    <p>{{ __("Hey there,") }}</p>
    <p>{{ __("Our experts have created this program uniquely just for you. The PDF has been attached to this email.") }}</p>

    @if($quizEntry->payment->product->type === \App\Enums\ProductType::audiobook)
        <p>{{ __("You can download audio format here: :url", ["url" => $audioBookUrl]) }} .</p>
    @endif

    <p>{{ __("If you have any issues, please get in touch.") }}</p>
    <p>{{ __("Thank you for choosing us!") }}</p>
    <p>{{ __("Best regards,") }}<br>{{ __("OTWO team") }}</p>
</div>
</body>
</html>
