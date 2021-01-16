<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses | INKO2</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body>
    <div class="testimonials">
        <h1>All Courses</h1>
        <div class="border"></div>
    </div>
    <div class="trial-course-card margin">
        <div class="filter-cont">
            <div class="stick-top-0">
                <h2>Filter Courses</h2>
                <p id="result"></p>
                <div class="filter-path">
                    <label for="filter-path" style="display: none;"></label>
                    <h3>Path</h3>
                    <input type="radio" id="pathAll" name="filter-path" checked>
                    <label onclick="filterCat('all')" for="pathAll">All</label><br>
                    <input type="radio" id="pathSkill" name="filter-path">
                    <label onclick="filterCat('skill')" for="pathSkill">Skill</label><br>
                    <input type="radio" id="pathCareer" name="filter-path">
                    <label onclick="filterCat('career')" for="pathCareer">Career</label><br>
                    <input type="radio" id="pathOther" name="filter-path">
                    <label onclick="filterCat('other')" for="pathOther">Other</label><br>
                </div>
            </div>
        </div>
        <hr>
        <div class="courses-cont-all" id="addFilteredCourse">

        </div>
    </div>
    <div class="courses-body">
        <div class="courses-cont">

        </div>
    </div>
    <div class="btn-cont">
        <a class="btn" onclick="window.history.back()">Back</a>
        <br><br>
    </div>
    <?php 
        require_once '../sections/footer.php';
    ?>
</body>
<script src="../js/courses.js"></script>
<script src="../js/course-redirect.js"></script>


</html>