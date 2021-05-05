<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Halaman Registrasi</title>
</head>
<body>
<p>
<p>
    <div class='container'>
    <p class="text-center font-weight-bold text-uppercase">Registrasi</p>
    <form action="registrasi2" method="post">
    <div class="container">
        <label for="nama">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="container">
        <label for="nim">NIM</label>
        <input type="text" class="form-control" id="NIM" name="NIM" required>
    </div>
    <div class="container">
        <label for="kelas">Kelas</label>
        <input type="text" class="form-control" id="kelas" name="kelas" required>
    </div>
    <div class="container">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="container">
        <label for="pw">Password</label>
        <input type="password" class="form-control" id="pw" name="pw" required>
    </div>
    <div class="container">
        <label for="copw">Confirm Password</label>
        <input type="password" class="form-control" id="fcopw" name="copw" required>
    </div>
    <div class="form-group">
          <button type="submit" class="btn btn-info">Submit</button>
          <?php
            $_SESSION['pesan'] = "Registrasi Berhasil"; 
          ?>
          <button type="reset" class="btn btn-outline-secondary">Reset</button>
          <a class="btn btn-dark" href="login.php"> Back</a>   
        </div>
    </form>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
</body>
</html>