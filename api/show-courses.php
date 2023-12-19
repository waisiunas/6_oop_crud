<?php
require_once '../core/database.php';
$courses = $database->get_all("courses");
echo json_encode($courses);