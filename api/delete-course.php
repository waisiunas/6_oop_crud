<?php
require_once '../core/database.php';

$_POST = json_decode(file_get_contents("php://input"), true);

if (isset($_POST['submit'])) {
    $id = htmlspecialchars($_POST['id']);
    
    if(empty($id)) {
        echo json_encode(['emptyId' => 'Provide the id!']);
    } else {
        if ($database->delete("courses", $id)) {
            echo json_encode(['success' => "Magic has been spelled!"]);
        } else {
            echo json_encode(['failure' => "Magic has failed to spell!"]);
        }
    }
}