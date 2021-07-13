<?php

include 'connectDB.php';


session_start();

$getfoto = "SELECT * FROM user WHERE nik = '".$_SESSION['nik']."'";
$get2 = mysqli_query($conn, $getfoto);
while ($display = mysqli_fetch_assoc($get2)) {
    // code...
    $nama = $display['nama_lengkap'];
    $foto = $display['foto_diri'];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="donorcss.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Donor</title>
</head>

<body onload="setRand()">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand mb-0 h1" href="register.php">BANK OF BLOOD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse"  id="navbarSupportedContent">
                <ul class="navbar-nav ms-right" style="margin-left: 750px">
                   
                    <li class="nav-item active">
                        <a class="nav-link" href="order.php">Inventory <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="donor.php">Donor <span class="sr-only">(current)</span></a>
                    </li>
                    <a class="nav-link active" href="register.php">Logout <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
        </div>
    </div>
</nav>
<div class="batas"></div>
<script>
    function rand(len){
    return Math.floor(Math.random() * Math.pow(10, len));
        }

    function setRand(){
    document.getElementById('rand').value = rand(3); 
        }
</script>

<form action=" " method="POST">
<br>
<div class="container" style="background-color: lightgrey ; ">
    <br>
    <h4 style= "margin-left:35% ; font-family:Apple Chancery, cursive" > "Being human with humanity"</h4><hr><br><br>
    
    <div class="media">
    <img src="foto/<?php echo $foto ?>" width="230px" height="280px"  >
        <div class="media-body" style= "margin-left:17%">
            <h5 class="mt-0" style="margin-left:25px">Welcome to Blood Donor!</h5>
            <h7 style="margin-left:60px"><i> Fill the form for donor </i></h7>
            <br><br>
            
            <form action = "" method="post">
                <table>
                    <tr>
                        <td><i>NIK</i></td>
                        <td>:</td>
                        <td><input type="text" name="nik" style="background-color: mistyrose ; border-radius:5px ; margin-left:6px "></td>
                    </tr>

                    <tr>
                        <td><i>Nama</i> </td>
                        <td>: </td>
                        <td><input type="text" name="nama" style="background-color : mistyrose ; border-radius:5px ; margin-left:6px"></td>   
                    </tr>

                    <tr>
                        <td><i>Tanggal donor</i></td>
                        <td>:</td>
                        <td><input type="date" name="tanggal" style="background-color : mistyrose ; border-radius:5px ; margin-left:6px"></td>
                    </tr>
                </table>
            </form>
        
        </div>
    </div>

    <div class="container-1" style="margin-left:45%">
        <br><br>
        <button type="submit" class="btn btn-danger" name="donor">Donor</button>
    </div>
    </form>
            <?php
                $konek= mysqli_connect("localhost","root","","uaspsi");


                if(isset($_POST['donor'])){
                    mysqli_query($konek,"insert into donor set
                    NIK = '$_POST[nik]',
                    Nama = '$_POST[nama]',
                    Tanggal = '$_POST[tanggal]' ")or die ("Gagal menyimpan data");
          
                    echo "Siap donor";
                }
            ?>
    <br>
</div>


<div class="footer">
    <div class="batas"></div>
    <p>Copyright Bank of Blood @2021</p>
</div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>