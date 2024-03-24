<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 600px;
            margin: 0 auto;
            border-radius: 10px;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container .header {
            text-align: center;
        }

        .details {
            margin-bottom: 30px;
        }

        .details h2 {
            color: #333333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .details p {
            color: #555555;
            font-size: 16px;
            margin-bottom: 10px;
        }
        .details .btn {
            padding: 7px 20px;
            border: none;
            outline: none;
            border-radius: 4px;
            background-color: #FF2B85;
            color: white;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            color: #777777;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class='container'>
        <div class="header">
            <h2>Foodpanda</h2>
        </div>
        <div class='details'>
            <p>Hi <?= $user_name ?>,</p>
            <p>We received a request to reset the password for your account.</p>
            <p>To reset your password, please click on the button below:</p>
            <form action='<?= $reset_link ?>' method='post'>
                <input type='hidden' name='email' value='<?= $email ?>'>
                <input type='hidden' name='verify_codes' value='<?= $verify_codes ?>'>
                <button type='submit' class="btn">Reset password</button>
            </form>
        </div>
        <div class='footer'>
            This email was sent by the Food Panda.
        </div>
    </div>
</body>

</html>