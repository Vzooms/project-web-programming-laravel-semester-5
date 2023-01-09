<div class="side-course-contents">
    <div class="study-list-card">
        <p class="study-card-title">{{ $cc->Course->name }}</p>
        <p class="study-card-desc">{{ $cc->Course->description }}</p>
    </div>

    <div class="study-button">
        <form action="/deleteStudyList" method="post">
            @csrf
            @method('delete')
            <input type="hidden" value={{ $cc->course_id }} name="course_id">
            <button type="submit" class="button1">
                <p class="button-link1">
                    Remove
                    <img src="Asset/Icon/remove.png" class="button-icon1" alt="">
                </p>
            </button>
        </form>

        <form method='post' action="/unCompleteStudyList">
            @csrf
            @method('patch')
            <input type="hidden" value={{ $cc->course_id }} name="course_id">
            <button type='submit' class="button3">
                <p class="button-link3">
                    Restart
                    <img src="Asset/Icon/restart-studylist.png" class="button-icon3" alt="">
                </p>
            </button>
        </form>
    </div>
</div>
