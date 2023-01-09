<form action="/createStudyList" method="post" class="course-card-short">
    @csrf
    <p class="course-title">Course Name</p>
    <p class="course-border"></p>
    <br>
    <p class="padding-title-short">Course description</p>
    <p class="course-desc-content">blablablablba</p>

    <div class="card-footer">
        <div>
            <input type="hidden" value="" name="course_id">
            <button type="submit" id="add-course">
                <h3 class="footer-word">Add to study List</h3>
            </button>

            <button id="learn-now">
                <h3 class="footer-word"><a href='#' class="link">Learn Now</a></h3>
            </button>
        </div>
    </div>

</form>
