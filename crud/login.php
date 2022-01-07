<?php
session_start();
require 'setting.php';

if (isset($_POST['login'])) {

    $username = $_POST['txtusername'];
    $password = sha1($_POST['txtpassword']);

    $query = mysqli_query($koneksi, "SELECT * FROM users 
            WHERE username='$username' and password='$password' ");

    if (mysqli_num_rows($query) === 1) {

        $data = mysqli_fetch_object($query);

        $_SESSION['login'] = true;
        $_SESSION['fullname'] = $data->fullname;
        $_SESSION['role'] = $data->role;

        header('location: index.php');
    }

    echo $error = 'Username atau Password Salah';
}

?>
<!doctype html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <div class="card card-body">
                    <h3>Login Form</h3>
                    <form action="" method="POST">
                        <input type="text" name="txtusername" class="form-control mb-3" placeholder="Masukkan Username">

                        <input type="password" name="txtpassword" class="form-control mb-3" placeholder="Masukkan Password">

                        <input type="submit" value="login" name="login" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>