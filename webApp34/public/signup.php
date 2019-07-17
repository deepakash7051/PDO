<?php 
  include_once '../inc/header.php';
  include_once '../inc/db.php';

?>

<div class="container h-100">
      <div class="row justify-content-center">
    <h2>Sign Up Your Account</h2>
  </div>
      <div class="row justify-content-center align-item-center">
        <!-- <form method="post" action="<?php BASE_URL.'ajax/ajax_signup.php'?>" id="signup-form" class="col-6"> -->
          <div class="col-5">
          <div class="form-group">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter Name">
            </div>

            <div class="form-group">
              <label for="surname">Surname</label>
              <input type="text" class="form-control" name="surname"  id="surname" aria-describedby="emailHelp" placeholder="Enter Surname">
            </div>

            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username"  id="username" aria-describedby="emailHelp" placeholder="Enter Username">
            </div>  

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password"  id="password" aria-describedby="emailHelp" placeholder="Enter Password">
           </div>
            <button type="submit" name="submit" id="sign-up" class="btn btn-primary">Signup</button>
          </div>
          </div>
        <!-- </form> -->
      </div>
    </div>

    <?php 
  include_once '../inc/footer.php';
?>
