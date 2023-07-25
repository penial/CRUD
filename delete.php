<?php
include 'database.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM Staff WHERE id = $id";
    $result = $conn->query($sql);
    if ($result) {
        header('location:read.php');
    } else {
        echo "Invalid";
    }
}
?>
