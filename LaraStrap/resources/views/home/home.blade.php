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
    <link rel="stylesheet" href="/Styling/swiper-bundle.min.css">
</head>
<body>
    <div class="header">
        <div class="navbar white-text">
            <a class="profile" href="/profile">
                <img src="./Asset/Icon/profile-home.png" alt="">
                <div class="nav">
                    Welcome, {{ auth()->user()->username}}
                </div>
            </a>
            <div class="nav">
                Course
            </div>
            <div class="nav">
                <a href="/studyList">
                    Study List
                </a>
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
            </div>
            <div class="right">
                <img class="welcome-logo" src="Asset/Image/Logo.png" alt="">
            </div>
        </div>
    </div>

    {{--===================== Search ==========================================================--}}
    <div class="search-section">
        <div class="study-list-search">
            {{-- Form Container --}}
            <form class="search-bar">
                <button type="submit" class="search-button">
                <img src="Asset/Icon/search.webp" alt="">
                </button>
                <input type="search" id="fsearch" value="" placeholder="search topic, code, and more...">
            </form>

            {{-- Image Study List --}}'
            <a href="/studyList">
                <div class ="icon-img">
                    <img src="Asset/Icon/study.png" alt="">
                    <p class = "icon-def dark-green-text"> Study List</p>
                </div>
            </a>

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

        </div>
    </div>


    {{-- ========================================= COURSE =================================== --}}

    <div class="course-section">
    <div class="course_header">
        <h1 class="course-header-title">Course</h1>
    </div>

    <div class="course-content">

        @foreach ($courses as $c)
            @include('home.course-card')
        @endforeach

    </div>

   </div>

{{-- ======================================== TUTORIAL ======================================= --}}

<div class="tutorial-section">

    <div class="tutorial_header">
        <h1 class="tutorial-header-title">Tutorial</h1>
    </div>


    <div class="tutorial-content swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="/Asset/Image/tutorial1.png" class="tutorial-img" alt="">
          </div>

          <div class="swiper-slide">
            <img src="/Asset/Image/tutorial2.png" class="tutorial-img" alt="">
          </div>

          <div class="swiper-slide">
            <img src="/Asset/Image/tutorial3.png" class="tutorial-img" alt="">
          </div>

        </div>
        <div class="tutorial-button swiper-button-next">
           <img src="/Asset/Icon/next.png" class="tutorial-button-img-next" alt="">
        </div>
        <div class="tutorial-button swiper-button-prev">
            <img src="/Asset/Icon/prev.png" class="tutorial-button-img-prev" alt="">
        </div>
        <div class="swiper-pagination"></div>
      </div>

</div>

{{--======================================== ADVANTAGES ======================================= --}}

<div class="advantages-section dark-green">
    <div class="advantages-wrapper1">
        <div class="advantages-content">
        <p class="advantages-title white-text">Accessible Online</p>
        {{-- <p class="advantages-description white-text">Desc</p> --}}
        </div>

        <div class="advantages-content">
            <p class="advantages-title white-text">Free Course</p>
            {{-- <p class="advantages-description white-text">Desc</p> --}}
        </div>

    </div>

    <div class="larastrap-icon">
        <img src="/Asset/Image/logo.png" class="larastrap-img" alt="">
    </div>

    <div class="advantages-wrapper2">
        <div class="advantages-content">
            <p class="advantages-title white-text">All About</p>
            <p class="advantages-title white-text">Web Programming</p>
        {{-- <p class="advantages-description white-text">Desc</p> --}}
        </div>

        <div class="advantages-content">
            <p class="advantages-title white-text">Include Video Tutorial</p>
            {{-- <p class="advantages-description white-text">Desc</p> --}}
        </div>

    </div>

</div>

{{-- ====================================== FOOTER =============================================== --}}
<div class="footer-section">
    <div class="footer-content">
        <img src="/Asset/Image/logo.png" class="footer-logo" alt="">
        <p class="footer-title">LaraStrap</p>
        <p class="footer-copyright">Copyright 2022</p>
    </div>

</div>

{{-- Script --}}
<script src="/Styling/swiper-bundle.min.js"></script>
<script src="/Styling/main.js"></script>

</body>
</html>
