<head>
    <tile>Trang đăng nhập nè</tile>
    <meta charset="utf-8">
</head>

<form action="#" method="post">
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text"  name="uname" required>
  </div>
  <label for="psw"><b>Password</b></label>
    <input type="password" name="psw" required>

    <button type="submit" name= "btnsubmit">Login</button>   
  </div>
  </div>
</form>

<?php
    if(isset($_POST["btnsubmit"])){
        if($_POST["uname"] == "admin" && $_POST["psw"] == "admin")
        {
<<<<<<< HEAD
            echo("Đăng nhập thành công");
=======
            echo("Đăng nhap thaành cong");
>>>>>>> e6c1324fb59f6585d42041c5320f1c7b497ad215
        }else 
            echo("Đăng nhập thất bại");
    }


?>