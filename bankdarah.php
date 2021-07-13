<?php 

session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="donorcss.css">
    <title>Inventory</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand mb-0 h1" href="register.php">BANK OF BLOOD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse"  id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="bankdarah.php">Inventory <span class="sr-only"></span></a>
                    </li>
                    <!-- <li class="nav-item active">
                        <a class="nav-link" href="donor.php">Donor <span class="sr-only"></span></a>
                    </li> -->
                    <a class="nav-link active" href="logout.php">Logout <span class="sr-only"></span></a>
                    </li>
                </ul>
        </div>
    </div>
</nav>
<div class="batas"></div>
<br>

<div class="container" style="background-color: lightgrey; border-radius:5px" >

<br>
  <h4 class="text-center" style="font-family:Apple Chancery, cursive" > "Being human with humanity"</h4>
  <hr>
  <br>
  <h3 class="text-center">Blood Bag Inventory (Admin)</h3>
  <br>
  <!--<div style="text-align: justify"><img style="margin-left: 60px; float:left; height: 250px" src="download.png" alt="download"></div>-->
                           

  <form action=" " method="POST">
  <table cellpadding="10" style="margin-left: 430px; margin-right: auto;">
    <tr>
        <td>Golongan Darah</td>
        <td>:</td>
        <td><input type="text" name="goldar" style="background-color: mistyrose; border-radius:5px"></td>
    </tr>
    <tr>
        <td>Jumlah</td>
        <td>:</td>
        <td><input type="number" name="jumlah" style="background-color: mistyrose; border-radius:5px"></td>
    </tr>
    <tr>
        <td>Tanggal</td>
        <td>:</td>
        <td><input type="date" name="tanggal" style="background-color: mistyrose; border-radius:5px"></td>
    </tr>
  </table>
  <br><br><br>
  
  <div style="margin-left: 530px"><button type="submit" value="simpan" name="tambah" class="btn btn-danger" >Tambah</button></div>
  </form>
  <br>
    <?php
    include 'connectDB.php';

      if(isset($_POST['tambah'])){
          mysqli_query($conn,"insert into donasidarah set
          goldar = '$_POST[goldar]',
          jml_donasi = '$_POST[jumlah]',
          tanggal = '$_POST[tanggal]' ")or die ("Gagal menyimpan data");

          echo "Menyimpan data berhasil";
      }
  ?>
  <br>
  

  
</div>


<div class="footer">
    <div class="batas"></div>
    <p>Copyright Bank of Blood @2021</p>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>