<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Larastrap | Login</title>
    <link rel="icon" href="./Asset/logo.png">
    <link rel="stylesheet" href="./Styling/login.css">
    <link rel="stylesheet" href="./Styling/default.css">
</head>
<body>
    @include('component.logo_dropdown')
    <div id="login-wrapper">
        <div id="login">
            <div id="form-login">
                <h1>Login</h1>
                <form action="">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">

                    <label for="password">Password</label>
                    <input type="text" name="password" id="password">

                    <div id="submit-wrapper">
                        <button type="submit">Sign In</button>
                    </div>
                </form>
            </div>
        </div>

        <div id="toRegister">
            <div id="register">
                <h2>NEW HERE?</h2>
                <p>Sign up and discover a great amount of new opportunities!</p>
                <div id="submit-wrapper">
                    <a href="/register">
                        <button>Sign Up</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
