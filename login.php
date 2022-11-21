<!DOCTYPE html>
<html>
<head>
    <title>Membuat Login</title>
</head>
<body>
<?php
    session_start();
    if($_SESSION['status']!="login"){
        header("localhost:../index.php?pesan=belum_login");
    }
    ?>

    <h4> Selamat Datang,<?php echo $_SESSION['username'];?>! Anda telah berhasil mendaftar.</h4>
    <center>
    <h2>LOGIN<h2>
        <br/>
        <br/>
        <?php
        if (isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "Login gagal! username dan password salah!";
            }else if($_GET['pesan'] == "logout") {
                echo"Anda telah berhasil logout";
            }else if($_GET['pesan'] == "belum_login"){
                echo "Anda harus login untuk mengakses halaman admin";
            }
        }
        ?>
        <br/>
        <br/>
        <form method="POST" action="cek_login.php">
            <table>
                <tr>
                    <td>Username</td>
                    <td> : </td>
                    <td><input type="text" name="username" placeholder="Masukan Username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password" placeholder="Masukan Password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="LOGIN"></td>
                </tr>
                    <td></td>
                    <td></td>
                <td><a href="daftar.php"><input type="button" name="daftar" value="DAFTAR"/></a></td>
    <table>
    </form>
</body>
</html>