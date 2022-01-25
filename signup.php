<?php 
  // session_start();
  // if(isset($_SESSION['customer_id'])){
  //   //header("location: users.php");
  // }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper1">
    <section class="form signup">
      <h2>SIGN UP</h2>
      <form id="signup" action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First name" required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last name" required>
          </div>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Phone Number</label>
          <input type="text" name="phoneNumber" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field input">
          <label>Confirm Password</label>
          <input type="password" name="passwordCF" placeholder="Confirm your password" required>
          <i class="fas fa-eye" name="confirm"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Sign Up">
        </div>
      </form>
      <div class="link">Already sign up ? <a href="login.php">Login now</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
