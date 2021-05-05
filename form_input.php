<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Input Data</title>
</head>
<body>
    <p>
    <div class='container'>
    <p class="text-center font-weight-bold text-uppercase">Input Data Buku</p>
    <form action="simpan.php" method="post">

        <div class="form-group row">
            <label for="semester" class="col-sm-2 col-form-label">Semester</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="semester" name="semester">
            </div>
        </div>
        <div class="form-group row">
            <label for="ipk" class="col-sm-2 col-form-label">IPK</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="ipk" name="ipk">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>

    </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   

</body>
</html>