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
    <p>Hello Ánh 2</p>
    <p>Hello Ánh 3</p>
    <p>Hello Ánh 4</p>
    
    <p>Hello Ánh 3</p>  
  </div>
  </div>
</form>

<?php
    if(isset($_POST["btnsubmit"])){
        if($_POST["uname"] == "admin" && $_POST["psw"] == "admin")
        {
            echo("Đăng nhập thành công");
          
        }else 
            echo("Đăng nhập thất bại");
    }


?>