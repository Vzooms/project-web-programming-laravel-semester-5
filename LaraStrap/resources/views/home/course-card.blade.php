<form action="/createStudyList" method="post" class="course-card-short">
    @csrf
    <p class="course-title">{{ $c->name }}</p>
    <p class="course-border"></p>
    <br>
    <p class="course-desc-content">{{ $c->description }}</p>

    @if($c->StudyList == null)
        <div class="card-footer">
            <div>
                <input type="hidden" value={{ $c->id }} name="course_id">
                <button type="submit" id="add-course">
                    <h3 class="footer-word">Add to study List</h3>
                </button>
            </div>
        </div>
    @else
        <a href="{{'course/' . $c->id }}" class="card-footer">
            <div>
                <input type="hidden" value={{ $c->id }} name="course_id">
                <button type="button" id="learn-now">
                    <h3 class="footer-word">Learn Now</h3>
                </button>
            </div>
        </a>
    @endif

</form>
