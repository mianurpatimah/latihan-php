<html>
   <head><title>Login</title></head>
   <body>
       <FORM ACTION="" method="POST"> 
       <h2> Login Yuu.. </h2>
        Email : <input type="text" name="email"><br>
        Password : <input type="password" name="password"><br>
        <input type="submit" name="Log" value="Login">
        </FORM>
    </body>
</html>

<?php
if (isset($_POST['Log'])) {
    $user = $_POST['email'];
    $pass = $_POST['password'];
    if ($user =="Mia Nurpatimah" && $pass =="123456") {
        echo "<h2>Login Berhasil</h2>";
        } else {
        echo "<h2>Login Gagal</h2>";
    }
}
?>