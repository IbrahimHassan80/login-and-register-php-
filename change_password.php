 <?php  include('inc/header.php');  ?> 
 <?php if(!isset($_SESSION['user_name'])) header("location:index.php"); ?>

<div class="mb-3 container col-md-7">
 
  <?php if(isset($_SESSION['error'])): ?>
  <div class="alert alert-danger text-center"> <?php echo $_SESSION['error']; ?></div>
  <?php endif; ?>
  <?php unset($_SESSION['error']); ?>
 
  <form method="post" action="handler/change_password.php">
  <label for="exampleFormControlInput1" class="form-label">old password</label>
  <input type="password" name="old_password" class="form-control" id="exampleFormControlInput1" placeholder="old password">

  <label for="exampleFormControlInput1" class="form-label">new password</label>
  <input type="password" name="new_password" class="form-control" id="exampleFormControlInput1" placeholder="new password">
  
  <label for="exampleFormControlInput1" class="form-label">confirm password</label>
  <input type="password" name="confirm_password" class="form-control" id="exampleFormControlInput1" placeholder="confirm password">
  <input class="btn btn-primary mb-3" type="submit" name="submit" value="change password">
  
  </form>
 

</div>





 <?php  include('inc/footer.php');  ?> 