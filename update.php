<?php 
    $mysqli = new mysqli("localhost","root","","pabweb");
    $stmt = $mysqli->prepare("UPDATE ipk SET semester = ? , ipk = ? WHERE id = ?");
    $stmt->bind_param("sii", $_POST['semester'], $_POST['ipk'], $_POST['id']);
    $stmt->execute();
    $stmt->close();
    header("location:view.php");
?>