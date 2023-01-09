<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Larastrap | Profile</title>
    <link rel="icon" href="./Asset/logo.png">
    <link rel="stylesheet" href="./Styling/profileEdit.css">
    <link rel="stylesheet" href="./Styling/default.css">
</head>
<body>
    @include('component.logo_dropdown')
    <div id="profile-wrapper">
        <div id="profile">
            <div id="form-profile">
                <h1>Edit Profile</h1>

                {{-- ini buat tampilin error tapi belom di style --}}
                <h1>{{ $errors->first() }}</h1>

                <form action="/editUser" method="post">
                    @csrf
                    <div id="form-profile-wrapper">
                        <div class="reg">
                            <div>
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" value={{ $user->username }}>
                            </div>

                            <div>
                                <label for="email">E-mail</label>
                                <input type="email" name="email" id="email" value={{ $user->email }}>
                            </div>

                            <div style="display:flex; flex-direction:column; width:100%;">
                                <label for="dateOfBirth">Date Of Birth</label>
                                <input type="date" name="dateOfBirth" id="dateOfBirth" value={{ $user->dateOfBirth }}>
                            </div>
                        </div>

                        <div class="reg">
                            <div style="height: 12.1vh">
                                <label for="gender">Gender</label>
                                <div id="gender-select">
                                    <div>
                                        <input type="radio" id="male" value="male" name="gender" {{ $user->gender == 'male' ? 'checked' : '' }}>
                                        <label for="male">Male</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="female" value="female" name="gender" {{ $user->gender == 'female' ? 'checked' : '' }}>
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
                        <button type="button" id="cancel">Cancel</button>
                        <button type="submit" id="save">Save change</button>
                    </div>
                </form>
            </div>
        </div>

        <div id="side-profile-wrapper">
            <div id="side-profile">
                <img src="./Asset/Icon/profile-home.png" alt="">
                <div id="profile-button">
                    <button>Remove picture</button>
                    <button>Change picture</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
