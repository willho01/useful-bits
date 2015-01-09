<?php
    /* All basic functions go here! */

    function confirm_query($result_set) {
        if (!$result_set) {
            die("Database query failed: " . mysqli_error());
        }
    }

    function get_all_subjects() {
        global $connection;
        $query = "SELECT *
        FROM subjects
        ORDER BY position ASC";
        $subject_set = mysqli_query($connection, $query);
        confirm_query($subject_set);
        return $subject_set;
    }
    function get_pages_for_subject ($subject_id) {
        global $connection;
        $query = "SELECT *
        FROM pages
        WHERE subject_id = {$subject_id}
        ORDER BY position ASC";
        $page_set = mysqli_query($connection, $query);
        confirm_query($page_set);
        return $page_set;
    }
?>
