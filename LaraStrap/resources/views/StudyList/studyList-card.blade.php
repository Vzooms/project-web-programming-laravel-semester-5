<div class="study-list-container">
    <div class="study-list-card">
        <p class="study-card-title">{{ $sl->Course->name }}</p>
        <p class="study-card-desc">{{ $sl->Course->description }}</p>

    </div>

    <div class="study-button">
        <form action="/deleteStudyList" method="post">
            @csrf
            @method('delete')
            <input type="hidden" value={{ $sl->course_id }} name="course_id">
            <button type="submit" class="button1">
                <p class="button-link1">Remove</p>
                <img src="Asset/Icon/remove.png" class="button-icon1" alt="">
            </button>
        </form>
        <button class="button2">
            <a href='{{'course/' . $sl->course_id}}' class="button-link2">Continue</a>
            <img src="Asset/Icon/continue.png" class="button-icon2" alt="">
        </button>
    </div>
</div>
