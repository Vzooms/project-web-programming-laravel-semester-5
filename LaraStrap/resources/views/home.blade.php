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
                    <button class="sign-up white dark-green-text">
                        <a class="link dark-green-text" href="/register">Sign Up</a>
                    </button>
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
    </div>


    {{-- ========================================= COURSE =================================== --}}

    <div class="course-section">
    <div class="course_header">
        <h1 class="course-header-title">Course</h1>
    </div>

    <div class="course-content">

        <div class="course-card-long">
            <p class="course-title">Course Name</p>
            <p class="course-border"></p>
            <br>
            <p class="padding-title-long">Course description</p>
            <p class="course-desc-content">blablablablba</p>

            <div class="card-footer">
                <h3 class="footer-word"><a href='#' class="link">Learn Now ></a></h3>

            </div>


        </div>

        <div class="course-card-short">
            <p class="course-title">Course Name</p>
            <p class="course-border"></p>
            <br>
            <p class="padding-title-short">Course description</p>
            <p class="course-desc-content">blablablablba</p>

            <div class="card-footer">
                <h3 class="footer-word"><a href='#' class="link">Learn Now ></a></h3>

            </div>

        </div>

    </div>

    <div class="course-content">

        <div class="course-card-short">
            <p class="course-title">Course Name</p>
            <p class="course-border"></p>
            <br>
            <p class="padding-title-short">Course description</p>
            <p class="course-desc-content">blablablablba</p>

            <div class="card-footer">
                <h3 class="footer-word"><a href='#' class="link">Learn Now ></a></h3>

            </div>


        </div>

        <div class="course-card-short">
            <p class="course-title">Course Name</p>
            <p class="course-border"></p>
            <br>
            <p class="padding-title-short">Course description</p>
            <p class="course-desc-content">blablablablba</p>

            <div class="card-footer">
                <h3 class="footer-word"><a href='#' class="link">Learn Now ></a></h3>

            </div>



        </div>

        <div class="course-card-short">
            <p class="course-title">Course Name</p>
            <p class="course-border"></p>
            <br>
            <p class="padding-title-short">Course description</p>
            <p class="course-desc-content">blablablablba</p>

            <div class="card-footer">
                <h3 class="footer-word"><a href='#' class="link">Learn Now ></a></h3>

            </div>



        </div>
    </div>

    <div class="course-content">

        <div class="course-card-short">
            <p class="course-title">Course Name</p>
            <p class="course-border"></p>
            <br>
            <p class="padding-title-short">Course description</p>
            <p class="course-desc-content">blablablablba</p>

            <div class="card-footer">
                <h3 class="footer-word"><a href='#' class="link">Learn Now ></a></h3>

            </div>


        </div>

        <div class="course-card-long">
            <p class="course-title">Course Name</p>
            <p class="course-border"></p>
            <br>
            <p class="padding-title-long">Course description</p>
            <p class="course-desc-content">blablablablba</p>

            <div class="card-footer">
                <h3 class="footer-word"><a href='#' class="link">Learn Now ></a></h3>

            </div>

        </div>

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
        <p class="advantages-title white-text">Advantage 1</p>
        <p class="advantages-description white-text">Desc</p>
        </div>

        <div class="advantages-content">
            <p class="advantages-title white-text">Advantage 2</p>
            <p class="advantages-description white-text">Desc</p>
        </div>

    </div>

    <div class="larastrap-icon">
        <img src="/Asset/Image/logo.png" class="larastrap-img" alt="">
    </div>

    <div class="advantages-wrapper2">
        <div class="advantages-content">
        <p class="advantages-title white-text">Advantage 3</p>
        <p class="advantages-description white-text">Desc</p>
        </div>

        <div class="advantages-content">
            <p class="advantages-title white-text">Advantage 4</p>
            <p class="advantages-description white-text">Desc</p>
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
