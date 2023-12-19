<?php
require_once '../core/database.php';

$_POST = json_decode(file_get_contents("php://input"), true);

if (isset($_POST['submit'])) {
    $id = htmlspecialchars($_POST['id']);
    
    if(empty($id)) {
        echo json_encode(['emptyId' => 'Provide the id!']);
    } else {
        $course = $database->get_single("courses", $id);
        echo json_encode($course);
    }
}