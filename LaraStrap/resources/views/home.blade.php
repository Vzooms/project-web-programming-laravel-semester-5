<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="./Asset/logo.png">
    <title>LaraStrap</title>
    <link rel="stylesheet" href="/Styling/home.css">
    <link rel="stylesheet" href="/Styling/default.css">
</head>
<body>
    <div class="header">
        <div class="navbar white-text">
            <div class="profile">
                profile image
            </div>
            <div class="nav">
                Welcome, username!
            </div>
            <div class="nav">
                Tutorial
            </div>
            <div class="nav">
                Course
            </div>
            <div class="nav">
                Study List
            </div>
            <div class="web-name">
                LaraStrap
            </div>
        </div>
        <div class="welcome">
            <div class="left">
                <div class="title white-text">
                    More Coding
                </div>
                <div class="title white-text">
                    More Fun
                </div>
                <div class="desc light-blue-text">
                    Find your everyday topic about HTML, CSS, JS, <br>and many more.....
                </div>
                <div class="btn">
                    <button class="sign-up white dark-green-text">Sign Up</button>
                </div>
                <div class="acc">
                    <a class="white-text acc" href="login">I already have an account</a>
                </div>
            </div>
            <div class="right">
                <img class="welcome-logo" src="Asset/Image/Logo.png" alt="">
            </div>
        </div>
    </div>
    {{-- <div class="study-list-container"> --}}

        <div class="study-list-search">
            {{-- Form Container --}}
            <form class="search-bar">
                <button type="submit" class="search-button">
                <img src="Asset/Icon/search.webp" alt="">
                </button>
                <input type="search" id="fsearch" value="" placeholder="search topic, code, and more...">
            </form>

            {{-- Image Study List --}}
            <div class ="icon-img">
                <img src="Asset/Icon/study.png" alt="">
                <p class = "icon-def dark-green-text"> Study List</p>
            </div>

        </div>

        {{-- HTML Content --}}
        <div class = "content-wrap">
            <div class = "html-content">

                    <div class= "con-head dark-green-text">
                    HTML
                    </div>
                    <div class="con-sub dark-green-text">
                    The language for
                    </div>
                    <div class ="con-sub dark-green-text">
                     building web pages
                    </div>
                    <div class="con-btn dark-green">
                        <button class="learn-now white-text">
                            Learn Now
                        </button>
                    </div>
                    <div class="add-btn white">
                        <button class="add-list dark-green-text">
                            Add to List
                        </button>
                    </div>
            </div>
            <div class="html-line">

            </div>
            <div class = "css-content">

                    <div class= "con-head green-text">
                    CSS
                    </div>
                    <div class="con-sub green-text">
                        The language for
                    </div>
                    <div class ="con-sub green-text">
                        styling web pages
                       </div>
                    <div class="con-btn green">
                        <button class="learn-now white-text">
                            Learn Now
                        </button>
                    </div>
                    <div class="add-btn white">
                        <button class="add-list green-text">
                            Add to List
                        </button>
                    </div>

            </div>
            <div class="css-line">

                    </div>
                <div class = "js-content">

                <div class= "con-head tosca-text">
                JS
                </div>
                <div class="con-sub tosca-text">
                    The language for
                </div>
                <div class ="con-sub tosca-text">
                    programming web pages
                   </div>
                <div class="con-btn tosca">
                    <button class="learn-now white-text">
                        Learn Now
                    </button>
                </div>
                <div class="add-btn white">
                    <button class="add-list tosca-text">
                        Add to List
                    </button>
                </div>

        </div>
    {{-- </div> --}}
</body>
</html>
