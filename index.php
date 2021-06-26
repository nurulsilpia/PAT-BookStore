<?php
include 'config/koneksi.php';
include 'library/controller.php';

$tabel = 'tbl_user';
@$username = $_POST['user'];
@$password = $_POST['pass'];
@$akses = $_POST['akses'];

$go = new Controller();

if (isset($_POST['login'])) {
    $go->login($con, $tabel, $username, $password, $akses);
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <!-- BOOSTRAP ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Login</title>
  </head>
  <body>

  <div class="container mt-4">
        <div class="d-flex justify-content-center p-2 bd-highlight position-absolute top-50 start-50 translate-middle" >
            <div>
            <center>
                <img class="d-flex justify-content-center pt-2" src="img/login.svg" alt="login" height="200">
            </center>
            
            <div id="emailHelp" class="form-text text-center">We'll never share your account with anyone else.</div>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Username :</label>
                    <input type="text" name="user" class="form-control" id="exampleFormControlInput1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password :</label>
                    <input type="password" name="pass" class="form-control" id="showPass" required>
                    <input type="checkbox" onclick="myFunction()"> Show Password
                </div>
                <div class="mb-3">
                    <label>Akses User :</label>
                    <select class="form-control input-lg" name="akses" value="akses" required>
                        <option value="" selected disabled>Pilih Akses</option>
                        <option value="admin">Admin</option>
                        <option value="kasir">Kasir</option>
                        <option value="manager">Manager</option>
                    </select>
                </div>
                <div class="d-grid gap-2 mb-2 pt-3">
                    <button class="btn btn-primary btn-block type="submit" name="login" value="LOGIN">Login</button>
                    <p class="mt-3 text-muted text-center">&copy; 2021-<?= date('Y') ?></p>
                </div>
            </form>
            </div>
        </div>

    <!-- SHOW PASSWORD -->
    <script>
        function myFunction() {
            var x = document.getElementById("showPass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>