<html>
    <head>
        <title>Login Aplikasi Penggajian Karyawan PT. MAHAMERU CENTRATAMA SPINNING MILLS</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <style>
            html{
                position: relative;
                min-height: 100%;
            }
            body {
                background: url(assets/img/white.jpg);
            }
           .container {
                margin-top: 60px;
            }
            </style>
</head>
<body>
    <div class = "container">
        <div class = "col-md-4 col-md-offset-4">
        <div class = "panel panel-primary">
        <div class = "panel-heading">
        <h3 class = "panel-title">LOGIN</h3>
        </div>
        <div class = "panel-body">
            <center>
                <img src = "assets/img/logo.jpg" class= "img-circle" alt = "logo">
                <h4><b>PT. MAHAMERU CENTRATAMA SPINNING MILLS</H4>
        </center>
        <br>
        <?php
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            $user = $_POST['username'];
            $password = $_POST['password_admin'];
            $p = md5($password);

            if ($user == '' && $password == '') {
                ?>
                <div class = "alert alert-warning"><b>Warning!</b> Form Tidak Lengkap!</div>
                <?php
            }else {
                include "koneksi.php";
                $login = mysqli_query($connect, "SELECT * FROM data_admin WHERE username = '$user' AND password_admin = '$p' ");
                $jumlah = mysqli_num_rows($login);
                $hasil = mysqli_fetch_array($login);

                if($jumlah > 0) {
                    session_start();
                    $_SESSION ['btn btn-primary btn-lg btn-block'] = TRUE;
                    $_SESSION ['id'] = $hasil['id'];
                    $_SESSION ['username'] = $hasil['username'];
                    $_SESSION ['password_admin'] = $hasil['password_admin'];

                    header('Location:home.php');
                }else{
                    ?>
                    <div class = "alert alert-danger"><b>Error!</b> Username dan Password Salah!</div>
                    <?php
                }
            }
        }
        ?>
        <form action = "" method = "post" role="form">
        <div class = "username">
                <input type = "text" class = "form-control" name = "username" placeholder = "Username">
        </div>
        <br>
        <div class = "password">
                <input type = "password" class = "form-control" name = "password_admin" placeholder = "Password">
        </div>
        <br>
        <div class = "submit">
                <input type = "submit" class = "btn btn-primary btn-lg btn-block" value = "Login">
        </div>
        </form>
        </div>
        </div>
        </div>
        </div>

   
</body>
</html>