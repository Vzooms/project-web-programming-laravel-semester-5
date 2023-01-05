<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Larastrap | register</title>
    <link rel="icon" href="./Asset/logo.png">
    <link rel="stylesheet" href="./Styling/register.css">
    <link rel="stylesheet" href="./Styling/default.css">
</head>
<body>
    @include('component.logo_dropdown')
    <div id="register-wrapper">
        <div id="register">
            <div id="form-register">
                <h1>Register</h1>
                <form action="" method="post">
                    @csrf
                    <div id="form-register-wrapper">
                        <div class="reg">
                            <div>
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username">
                            </div>

                            <div>
                                <label for="email">E-mail</label>
                                <input type="email" name="email" id="email">
                            </div>

                            <div style="display:flex; flex-direction:column; width:100%;">
                                <label for="dateOfBirth">Date Of Birth</label>
                                <input type="date" name="dateOfBirth" id="dateOfBirth">
                            </div>
                        </div>

                        <div class="reg">
                            <div style="height: 12.1vh">
                                <label for="gender">Gender</label>
                                <div id="gender-select">
                                    <div>
                                        <input type="radio" id="male" value="male" name="gender">
                                        <label for="male">Male</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="female" value="female" name="gender">
                                        <label for="female">Female</label>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password">
                            </div>

                            <div>
                                <label for="confirmPassword">Confirm Password</label>
                                <input type="password" name="confirmPassword" id="confirmPassword">
                            </div>
                        </div>
                    </div>

                    <div id="submit-wrapper">
                        <button type="submit">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>

        <div id="toLogin">
            <div id="login">
                <h2>Have an account?</h2>
                <p>Log in to your account to recover your progress!</p>
                <div id="submit-wrapper">
                    <a href="/login">
                        <button>Sign In</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
