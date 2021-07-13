<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="donorcss.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Login</title>
</head>



<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand mb-0 h1" href="#">BANK OF BLOOD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse"  id="navbarSupportedContent">
                <ul class="navbar-nav ms-right" style="margin-left: 750px">
                    <li class="nav-item active">
                        <a class="nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="register.php">Register <span class="sr-only">(current)</span></a>
                    </li>
                    <a class="nav-link active" href="#">Help <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
        </div>
    </div>
</nav>
<div class="batas"></div>

<br>
<div class="container" style="background-color: lightgrey ; ">
    <br>
        <h4 style= "margin-left:35% ; font-family:Apple Chancery, cursive" > "Welcome to Blood Donor!"</h4><hr>

        <div class="media">
            
            <div class="media-body" style= "margin-left:35%">
                <h5 class="mt-0" style="margin-left:65px">FORM LOGIN</h5>
                
            
            
                <br><br>
                <form action = "ceklogin.php" method="POST">
                    <table>
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td><input type="text" name="nik" style="border-radius:5px; background-color: mistyrose"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><input type="password" name="password" style="border-radius:5px; background-color: mistyrose"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                        <br>
                        <button type="submit" name="submit" class="btn btn-danger" >LOGIN</button>
                        </td>
                    </tr>

                    </table>
                </form>
                <!--<span class ="psw" style="margin-left:60px" >Already have Account ? <a href="#"> Login </span>-->
            
                

                


              
                 
            </div>
        </div>

    <br><br>   
       
</div>

<br><br>

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