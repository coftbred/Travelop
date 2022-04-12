<?php 
    include 'includes/header.php';
    include 'classes/user.php';

	if (isset($_POST['sign_in'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$user = new User($conn);
		$user->checkLogin($email, $password);
		$errors = $user->errors;
	}

	  

?>
<link rel="stylesheet" href="./css/login.css" type="text/css">
<section class="login">
    <section class="login-img">
        <div class="container-fluid">
        </div>
    </section>
  <section class="login-form">
      <div class="container-fluid">
      <div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3><i class="fa fa-sign-in" aria-hidden="true">Sign In</i></h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form id="login" action="login.php" method="POST">
                    <!-- Email -->
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="email" name="email">
						
					</div>
                    <!-- Email -->

                    <!-- Password -->
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="password">
					</div>
                    <!-- Password -->

					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>

                    <!-- Submit button -->
					<div class="form-group">
						<input name="sign_in" type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="signup.php">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
      </div>
  </section>
</section>



<?php 
    include 'includes/footer.php'
?>