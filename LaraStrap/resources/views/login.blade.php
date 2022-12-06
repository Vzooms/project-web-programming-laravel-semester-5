<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Larastrap</title>
    <link rel="stylesheet" href="./Styling/login.css">
    <link rel="stylesheet" href="./Styling/default.css">
</head>
<body>
    <div id="login">
        <header>
            logo
            <x-css-close />
        </header>
        <main>
            <div id="form-wrapper">
                <h1>Log in</h1>
                <form action="">
                    <div class="form-detail">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="form-detail">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <button type="submit">Log in</button>
                </form>
            </div>
        </main>
    </div>
</body>
</html>
