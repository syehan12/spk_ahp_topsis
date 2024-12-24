<?php
session_start();
include './process/koneksi.php';

if (isset($_GET['pengguna_id'])) {
   if ($_GET['pengguna_id'] == 'false') {
      echo "<script>alert('Username / password salah. Gagal masuk.')</script>";
      header("Location: index.php");
      exit;
   } else if ($_GET['pengguna_id'] == 'out') {
      echo "<script>alert('Anda belum masuk, silahkan masuk.')</script>";
      header("Location: index.php");
      exit;
   } else {
      echo "<script>alert('Logout berhasil.')</script>";
      header("Location: index.php");
      exit;
   }
}

if (isset($_POST['submit'])) {
   $username = mysqli_real_escape_string($connect, $_POST['email']);
   $password = mysqli_real_escape_string($connect, $_POST['password']);

   $sqllogin = "SELECT * FROM pengguna WHERE username='$username' AND password='$password'";
   $querylogin = mysqli_query($connect, $sqllogin);

   if (mysqli_num_rows($querylogin) > 0) {
      $row = mysqli_fetch_assoc($querylogin);
      $_SESSION['username'] = $username;
      $_SESSION['nama_pengguna'] = $row['nama_pengguna'];
      $_SESSION['profile'] = $row['profile'];
      $_SESSION['stat'] = 'masuk';
      echo "<script>alert('Berhasil masuk, selamat datang " . $row['nama_pengguna'] . "')</script>";
      header("Location: landing-page.php");
      exit;
   } else {
      echo "<script>alert('Username/password salah')</script>";
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <title>Login</title>
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
   <link rel="stylesheet" href="./css/login.css" />
</head>

<body id="particles-js">
   <div class="animated bounceInDown">
      <div class="container">
         <span class="error animated tada" id="msg"></span>
         <form name="form1" class="box" action="" method="POST">
            <h4>Admin<span>Dashboard</span></h4>
            <h5>Sign in to your account.</h5>
            <input type="text" name="email" placeholder="Email" autocomplete="off" required />
            <i class="typcn typcn-eye" id="eye"></i>
            <input type="password" name="password" placeholder="Password" id="pwd" autocomplete="off" required />
            <a href="./landing-page.php" class="forgetpass">Forget Password?</a>
            <input type="submit" name="submit" value="Masuk" class="btn1" />
         </form>
      </div>
   </div>
   <script src="https://cldup.com/S6Ptkwu_qA.js"></script>
   <script src="./js/login.js"></script>
</body>

</html>