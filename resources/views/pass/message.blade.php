<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Forget Password Email</h1>
    <h3>Hi Member</h3>
    <p>You recently requested to reset your password for your [Product Name] account. Use the button below to reset it.</p><strong>This password reset is only valid for the next 24 hours.</strong>
    <p> You can reset password from bellow link:</p>
<button class="btn btn-success"><a href="{{ route('reset.password.get', $token) }}">Reset Password</a></button>
<p>For security, this request was received from a device using. If you did not request a password reset, please ignore this email or contact support if you have questions.

    Thanks,
    The Administration Team</p>
</body>
</html>