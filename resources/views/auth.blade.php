<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/auth.css') }}">
    <title>Login</title>
</head>
<body>
    <div class="login-form">
        <h1>Login</h1>
        <div class="container">
            <div class="main">
                <div class="content">
                    <h2>Log In</h2>
                    <form action="" method="">
                        <input type="text" name="username" placeholder="Username" required autofocus="" autocomplete="off">
                        <input type="password" name="password" placeholder="password" required autofocus="" autocomplete="off">
                        <button class="btn" type="submit">log In</button>
                    </form>
                </div>
                <div class="form-img">
                    <img src="{{ asset('assets/image/auth/bglog.jpg')}}">
                </div>
            </div>
        </div>
    </div>
</body>
</html>