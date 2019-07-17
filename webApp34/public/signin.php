<?php 
  include_once '../inc/header.php';
  include_once '../inc/db.php';
?>
 <?php if(isset($_SESSION['auth']) && !empty($_SESSION['user'])){ 
  header("location:member.php");
  } ?>
<div class="container h-100">
      <div class="row justify-content-center">
    <h2>Signin Your Account</h2>
  </div>
      <div class="row justify-content-center align-item-center">
        <form method="post" action="<?=BASE_URL.'ajax/ajax_signin.php'?>" class="col-6">
          <div class="form-group">

            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Enter Username">
            </div>  

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password"  id="password" aria-describedby="emailHelp" placeholder="Enter Password">
           </div>
            <button type="submit" name="submit" class="btn btn-primary">Signup</button>
          </div>
        </form>
      </div>
    </div>

    <?php 
  include_once '../inc/footer.php';
?>
