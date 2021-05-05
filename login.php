<?php
    session_start();
    if(isset($_SESSION['pesan'])){
        echo '<div class="alert alert-primary" role="alert">
           '.$_SESSION['pesan'].'
         </div>';
          session_destroy();
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Halaman Login</title>
</head>
<body>
<p>
    <div class='container'>
    <p class="text-center font-weight-bold text-uppercase">Login</p>
    <form action="login2.php" method="post">
    <div class="container">
        <label for="formGroupExampleInput2">Email</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name="email" required>
    </div>
    <div class="container">
        <label for="formGroupExampleInput2">Password</label>
        <input type="password" class="form-control" id="formGroupExampleInput2" name="pw" required>
    </div>
    <div class="container" align="center">
        <br>
        <a class='btn btn-primary' href="about.php">Masuk</a>
        <a class='btn btn-primary' href="registrasi.php">Daftar</a>
    </div>
    </form>
    
</body>
</html>