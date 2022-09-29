<?php
/**
 * @return void
 */
function coursesDisplay()
{
    require_once 'courses_sql.php';
    $Field_of_Interest = "";
    $cut_off_point = "";
    $school = array();

    if (isset($_POST['FOI'])) {
        $Field_of_Interest = $_POST['FOI'];
    }
    if (isset($_POST['cutoffpoint'])) {
        $cut_off_point = $_POST['cutoffpoint'];
    }
    if (isset($_POST['checkboxSchool'])) {
        $school = $_POST['checkboxSchool'];
    }


    $sql = [];
    $parameters = [];

    if ($Field_of_Interest != "NIL") {
        $sql[] = "course_cluster = ?";
        $parameters[] = $Field_of_Interest;
    }
    if ($cut_off_point != "") {
        $sql[] = "cut_off_point >= ?";
        $parameters[] = $cut_off_point;
    }
    if (!empty($school)) {

        if (count($school) == 1) {
            $sql[] = "school = ?";
            $parameters[] = $school[0];
        } else {
            $sql[] = "school IN (" . implode(',', array_fill(0, count($school), '?')) . ")";
            $parameters = array_merge($parameters, $school);
        }

    }
    if (!empty($sql)) {
        $sql = "SELECT * FROM CoursesCatalogue WHERE " . implode(' AND ', $sql);
        getFilteredCourses($sql, $parameters);
    } else {
        getAllCourse();
    }
}