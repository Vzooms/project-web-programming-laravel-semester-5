<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="/Styling/course.css">
    <link rel="stylesheet" href="/Styling/default.css">
</head>
<body>
    @include('component.logo_dropdown')

    <div class="profile-course-section">
        <div class="profile-course-header">
            <h1 class="profile-course-title black-text">Course Title</h1>
        </div>
    </div>

    <div class="profile-course-container">

        <div class="side-course-wrapper">


            <div class="side-course-content">

                <div class="side-course-contents">
                    <img src="/Asset/Image/video.png" class="video-img" alt="">
                </div>


                <form action="">
                    <div class="side-course-contents">
                        <p class="video-title">Judul Video</p>
                    </div>
                </form>

                <form action="">
                    <div class="side-course-contents">
                        <p class="desc-title">JASUKE Jason Susu Keju</p>
                    </div>
                </form>



            </div>

        </div>



        <div class="side-profile-wrapper">
            <div class="code-content">
                <p class="code-title black-text">Source Code Example</p>
            </div>


            <div class="source-code">

                <p>

                &lt;ul&gt;<br>
                <pre class="source-codes">
                &lt;li&gt;&lt;a href="default.asp"&gt;Home&lt;/a&gt;&lt;/li&gt;<br>
                &lt;li&gt;&lt;a href="news.asp"&gt;News&lt;/a&gt;&lt;/li&gt;<br>
                &lt;li&gt;&lt;a href="contact.asp"&gt;Contact&lt;/a>&lt;/li&gt;<br>
                &lt;li&gt;&lt;a href="about.asp"&gt;About&lt;/a&gt;&lt;/li&gt;
                </pre>
                &lt;/ul&gt;


                </p>
            </div>

            <div class="check-button">
                <h1 class="check-title">Mark As Completed</h1>
                    <input type="checkbox" class="checklist">
            </div>



        </div>

    </div>


