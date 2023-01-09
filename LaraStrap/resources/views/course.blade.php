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
            <h1 class="profile-course-title green-text">Course Title</h1>
        </div>
    </div>

    <div class="profile-course-container">

        <div class="side-course-wrapper">
            <img src="/Asset/Image/tutorial1.png" alt="">

            <div class="side-course-content">

                <div class="side-course-contents">



                </div>

                <div class="side-course-contents">

                    <div class="study-list-card">
                        <p class="study-card-title">Course Name</p>
                        <p class="study-card-desc">Course Description</p>
                    </div>

                    <div class="study-button">
                        <div class="button1">

                            <p class=""><a href='#' class="button-link1">Remove</a>
                                <img src="Asset/Icon/remove.png" class="button-icon1" alt="">
                            </p>

                        </div>

                        <div class="button3">
                            <p class=""><a href='#' class="button-link3">Restart</a>
                                <img src="Asset/Icon/restart-studylist.png" class="button-icon3" alt="">
                            </p>
                        </div>
                    </div>

                </div>

                <div class="side-course-contents">

                    <div class="study-list-card">
                        <p class="study-card-title">Course Name</p>
                        <p class="study-card-desc">Course Description</p>
                    </div>

                    <div class="study-button">
                        <div class="button1">

                            <p class=""><a href='#' class="button-link1">Remove</a>
                                <img src="Asset/Icon/remove.png" class="button-icon1" alt="">
                            </p>

                        </div>

                        <div class="button3">
                            <p class=""><a href='#' class="button-link3">Restart</a>
                                <img src="Asset/Icon/restart-studylist.png" class="button-icon3" alt="">
                            </p>
                        </div>
                    </div>

                </div>


            </div>





        </div>

        <div class="side-profile-wrapper">
            <div class="profile-image">
                <img src="/Asset/Icon/profile.png" class="profile-img" alt="">
            </div>
            <div class="profile-title">
                <p class="profile-username green-text">Username</p>
                <p class="profile-email green-text">email@gmail.com</p>
            </div>

            <div class="profile-button1">
                <p class=""><a href='#' class="edit-link">Edit Profile</a>
            </div>

            <div class="profile-button2">
                <p class=""><a href='#' class="logout-link">Log Out</a>
            </div>



        </div>

    </div>


