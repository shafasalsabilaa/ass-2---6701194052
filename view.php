<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Data IPK</title>
</head>
<body>
<div class='container'>
        <table class='table'>
            <p>Daftar IPK<p>
            <thead>
                <tr>
                    <th scope='col'>Id</th>
                    <th scope='col'>Semester</th>
                    <th scope='col'>IPK</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                include 'koneksi.php';
                $ipk = mysqli_query($conn, 'SELECT * FROM ipk');
                $no = 1;
                foreach($ipk as $row){
                    $id = $row['id'];
                    echo "
                        <tr>
                            <th scope='row'>$no</th>
                            <td>".$row['semester']."</td>
                            <td>".$row['ipk']."</td>
                            <td><a class='btn btn-primary' href='form_edit.php?id=".$row['id']."'>Edit</a> | ";
                            ?>
                            <a class='btn btn-danger' onclick="deleteConfirm('<?php echo 'delete.php?id='.$id ?>')" href="#!" data-toggle="modal" data-target="#exampleModal">Delete</a>
                        <?php
                           echo " </td>
                        </tr>";
                    $no++;
                }
            ?>
            </tbody>
        </table>
        <a class="btn btn-dark" href="about.php"> Back</a> 
<a class="btn btn-dark" href="login.php"> Logout</a>   
    </div>

    <script>
            function deleteConfirm(url){
                $('#btn-delete').attr('href', url);
            }
    </script>            


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Penghapusan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body"> Apakah Anda Yakin Akan Menghapus? </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <a id="btn-delete" class="btn btn-danger">Iya</a> 
        </div>

        </div>
    </div>
    </div>
   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
</body>
</html>