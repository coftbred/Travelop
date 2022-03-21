<?php 
    include 'includes/header.php';
	include 'classes/user.php';
	
	if (isset($_POST['sign_up'])) {
		$name = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$re_password = $_POST['re_password'];
		$user = new User($conn);
		$user->checkRegistration($name, $email, $password, $re_password);
		$errors = $user->errors;
	}
	
?>
<link rel="stylesheet" href="./css/login.css" type="text/css">
<style>
.card {
    height: auto;
	margin-top: 20rem;
}

section {
    padding: 0;
}
</style>
<section class="login">
  <section class="login-form">
      <div class="container-fluid">
      <div class="d-flex justify-content-center ">
		<div class="card mb-lg-5">
			<div class="card-header">
				<h3><i class="fa fa-registered" aria-hidden="true">Register</i></h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form id="register" action="signup.php" method="POST">
					<!-- Username -->
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input name="username" type="text" class="form-control" placeholder="Username">
					</div>
					<!-- Username -->

					<!-- Email -->
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-envelope"></i></span>
						</div>
						<input name="email" type="email" class="form-control" placeholder="Email">
					</div>
					<!-- Email -->

					<!-- Phone -->
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-phone"></i></span>
						</div>
						<input name="phone" type="tel" class="form-control" placeholder="Phone number">
					</div>
					<!-- Phone -->

					<!-- Password -->
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input name="password" type="password" class="form-control" placeholder="Password">
					</div>
					<!-- Password -->

					<!-- Re Password -->
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input name="re_password" type="password" class="form-control" placeholder="Enter password again">
					</div>
					<!-- Re Password -->

					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>

					<!-- Submit button -->
					<div class="form-group">
						<input name="sign_up" type="submit" value="Sign Up" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Already have an account?<a href="login.php">Sign Up</a>
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