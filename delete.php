<?php

include './db.php';

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $id = intval($_POST['id']);
    $query = "SELECT image_path FROM photos WHERE id = $id";
    $result = $conn->query($query);
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        unlink($row['image_path']);
    }
    $conn->query("DELETE FROM photos WHERE id = $id");

    header('Location: index.php');
    exit;
}

?>