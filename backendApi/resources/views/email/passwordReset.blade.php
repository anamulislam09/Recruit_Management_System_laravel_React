<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verify Email</title>
</head>
<body>
    <h1>Dear <span>{{$details['name']}}</span></h1>
    <p>We have request for reset your password .Please click below link to reset your password.</p>
    <a href="http://127.0.0.1:8000/auth/forgot-password/{{$details['token']}}/{{$details['hashEmail']}}"> Verify Here</a>
    <br><br>
    <p>Thank you.</p>
</body>
</html>