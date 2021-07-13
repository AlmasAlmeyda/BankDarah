<?php
                    
                    session_start();

                    include 'connectDB.php';

                    $nik = $_POST['nik'];
                    $password = $_POST['password'];

                    $query = mysqli_query($conn,  "SELECT * FROM user WHERE nik = '$nik' AND password = '$password'") ;
                    

                    $cek = mysqli_num_rows($query);

                    if ($cek > 0) {
                        // code...
                        $Login = mysqli_fetch_assoc($query);

                        if ($Login['nama_lengkap'] == 'Admin') {
                            // code...
                            $_SESSION['nik'] = $nik;
                            $_SESSION['password'] = $password;

                            header("location:bankdarah.php");
                        }
                        else {
                            $_SESSION['nik'] = $nik;
                            $_SESSION['password'] = $password;

                            header("location:order.php");
                        }
                    }

                    else {
                        header("location:login.php?pesan=Username atau Password salah.");
                    }

                ?>