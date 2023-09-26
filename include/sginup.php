<?php 
  // session_start();
  // include('../connection.php');
    if(isset($_POST['sginup'])){
      if($_SERVER["REQUEST_METHOD"]=="POST"){
        $mail = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        // print($mail . $password . $gender . $password);
          $sql = "insert into sgin (email,name,password,gender) values ('$mail','$username','$password','$gender')";
          $result = mysqli_query($conn,$sql);
          header("Location:index.php");
          die;
    }
    }
?>
<form action="" method="post" class="signup">
            <div class="field">
              <!-- <input type="text" name="email" placeholder="Email Address" required> -->
              <input type="email" name="email" id="name" placeholder="Email" required/>
            </div>
            <div class="field">
              <!-- <input type="text" name="name" placeholder="name" required> -->
              <input type="text" name="username" id="name" placeholder="Name" required/>
            </div>
            <div class="field">
              <!-- <input type="password" name="password" placeholder="Password" required> -->
              <input type="password" name="password" id="name" placeholder="Password" required/>
            </div>
            <div class="field">
              <!-- <input type="text" name="gender" placeholder="Confirm password" required> -->
              <div class="gender">
          <input type="radio" value="male" id="male" name="gender" checked/>
            <label for="male" class="radio">Male</label>
           <input type="radio" value="female" id="female" name="gender" />
            <label for="female" class="radio">Female</label>
        </div>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name="sginup" value="Signup">
            </div>
</form>
