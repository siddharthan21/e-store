<?php

    // session_start();
    include("./connection.php");
    include("./function.php");
    // print_r($_SERVER);
    if($_SERVER['REQUEST_METHOD']== 'POST'){
        $user_name = $_POST['email'];
        $password = $_POST['password'];
        $loginsql = "SELECT * FROM sgin where email = '$user_name' limit 1 ";
        $result = $conn->query($loginsql);
        
        if($result){
            if($result->num_rows > 0){
                $user_data = $result->fetch_assoc();
                if($user_data['password']=== $password){
        		    $_SESSION['username'] = $user_data['name'];
        		    $_SESSION['email'] = $user_data['email'];
                    echo "yes";
                    header("Location:main.php");
                }
            }
            else{
                // $p = "invlid";
            }
        }
    }
?>
<form action="" method="post" class="login">
          <?php if(isset($p)){
            echo $p;
          }   ?>
            <div class="field">
              <input type="text" name="email" placeholder="Email Address" required>
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="pass-link"><a href="#">Forgot password?</a></div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit"  value="Login">
            </div>
            <div class="signup-link">Not a member? <a href="">Signup now</a></div>
</form>