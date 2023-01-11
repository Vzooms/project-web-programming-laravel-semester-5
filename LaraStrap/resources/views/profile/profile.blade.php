<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="/Styling/profileCourse.css">
    <link rel="stylesheet" href="/Styling/default.css">
</head>
<body>
    @include('component.logo_dropdown')

    <div class="profile-course-section">
        <div class="profile-course-header">
            <h1 class="profile-course-title green-text">Profile</h1>
        </div>
    </div>

    <div class="profile-course-container">

        <div class="side-course-wrapper">
            @if($completedCourse -> isNotEmpty())
                <div class="side-wrapper-header">
                    <h1 class="side-wrapper-title green-text">Completed Course</h1>
                </div>

                <div class="side-course-content">

                    @foreach ($completedCourse as $cc)
                        @include('profile.completed-course')
                    @endforeach

                </div>
            @else
                <div class="side-wrapper-header-empty">
                    <h1 class="side-wrapper-title-empty green-text">Completed Course</h1>
                </div>

                <div class="profile-course-empty">
                    <img src="/Asset/Icon/empty.png" class="empty-img" alt="">
                </div>
                <div class="empty-desc">
                    <p class="empty-desc-word tosca-text">You haven't completed any course yet.</p>
                </div>
            @endif


        </div>

        <div class="side-profile-wrapper">
            <div class="profile-image">
                <img src="/Asset/Icon/profile.png" class="profile-img" alt="">
            </div>
            <div class="profile-title">
                <p class="profile-username green-text">{{ auth()->user()->username }}</p>
                <p class="profile-email green-text">{{ auth()->user()->email }}</p>
            </div>

            <div class="profile-button1">
                <p class=""><a href='/profileEdit' class="edit-link">Edit Profile</a>
            </div>

            <form action="/logout" method="post" class="profile-button2">
                @csrf
                <button type="submit" class="logout-link">Log Out</button>
            </form>

        </div>

    </div>
</body>
