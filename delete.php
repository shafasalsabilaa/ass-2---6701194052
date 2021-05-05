<?php 
    $mysqli = new mysqli("localhost","root","","pabweb");
    $stmt = $mysqli->prepare("DELETE FROM ipk WHERE id = ?");
    $stmt->bind_param("i", $_GET['id']);
    $stmt->execute();
    $stmt->close();
    header("location:view.php");
?>