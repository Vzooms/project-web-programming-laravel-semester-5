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
                    <video controls class="video-img">
                        <source src={{ asset('./storage/Tutorial/'.$course->video) }} type="video/mp4">
                    </video>
                </div>

                <div class="side-course-contents">
                    <p class="video-title">{{ $course->name }}</p>
                </div>

                <div class="side-course-contents">
                    <p class="desc-title">{{ $course->description }}</p>
                </div>

            </div>

        </div>



        <div class="side-profile-wrapper">
            <div class="code-content">
                <p class="code-title black-text">Source Code Example</p>
            </div>


            <div class="source-code">

                <code>

                    &lt;ul&gt;<br>
                    <pre class="source-codes">
                        &lt;li&gt;&lt;a href="default.asp"&gt;Home&lt;/a&gt;&lt;/li&gt;<br>
                        &lt;li&gt;&lt;a href="news.asp"&gt;News&lt;/a&gt;&lt;/li&gt;<br>
                        &lt;li&gt;&lt;a href="contact.asp"&gt;Contact&lt;/a>&lt;/li&gt;<br>
                        &lt;li&gt;&lt;a href="about.asp"&gt;About&lt;/a&gt;&lt;/li&gt;
                    </pre>
                    &lt;/ul&gt;

                </code>
            </div>

            @if($course->StudyList->completed)
                <form action="/completeStudyList" method="post">
                    @csrf
                    @method('patch')
                    <button class="check-button">
                        <h1 class="check-title">Mark As Completed</h1>
                        <input type="hidden" name="course_id" value={{ $course->id }}>
                    </button>
                </form>
            @else
                <form action="/unCompleteStudyList" method="post">
                    @csrf
                    @method('patch')
                    <button class="check-button">
                        <h1 class="check-title">Mark As Uncompleted</h1>
                        <input type="hidden" name="course_id" value={{ $course->id }}>
                    </button>
                </form>

            @endif

        </div>

    </div>


