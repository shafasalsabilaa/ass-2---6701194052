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
    <title>About</title>
</head>
<body>
<div class='container'>
    <p class="text-center font-weight-bold text-uppercase">About</p>
<form >
<div class="form-group row">
  <img src="shafa.jpeg" height="300px" width="200px;">
  </div>
  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="nama" value="Shafa Salsabila">
    </div>
  </div>
  <div class="form-group row">
    <label for="NIM" class="col-sm-2 col-form-label">NIM</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="NIM" value="6701194052">
    </div>
  </div>
  <div class="form-group row">
    <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="kelas" value="D3SI-43-03">
    </div>
  </div>
  <div class="form-group">
          <a class="btn btn-dark" href="ipk.php">IPK</a>   
        </div>
</form>
  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
</body>
</html>

