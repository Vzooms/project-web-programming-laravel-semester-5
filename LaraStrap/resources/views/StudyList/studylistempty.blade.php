<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Study List</title>
    <link rel="stylesheet" href="/Styling/studylist.css">
    <link rel="stylesheet" href="/Styling/default.css">
</head>
<body>
    @include('component.logo_dropdown')
    <div class="study-list-section">
        <div class="study-list-header">
            <h1 class="study-list-title tosca-text">Study List</h1>
        </div>
    </div>

    <div class="study-list-empty">
        <img src="/Asset/Icon/empty.png" class="empty-img" alt="">
    </div>
    <div class="empty-desc">
        <p class="empty-desc-word tosca-text">Oops! It looks like your study list is empty.</p>
    </div>
    

</body>
</html>
