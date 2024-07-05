<?php
include 'config/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['register-email'];
  $name = $_POST['register-name'];
  $phone = $_POST['register-phone'];
  $password = $_POST['register-password'];
  $repassword = $_POST['register-repassword'];
  $user_type = "user"; // Added missing semicolon

  // Check if passwords match
  if ($password !== $repassword) {
      echo "Passwords do not match.";
      exit;
  }

  // Hash the password
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  // Check if email already exists
  $stmt = $pdo->prepare("SELECT id FROM user WHERE email = ?");
  $stmt->execute([$email]);
  if ($stmt->rowCount() > 0) {
      echo "Email already exists.";
      exit;
  }

  // Insert the new user into the database
  $stmt = $pdo->prepare("INSERT INTO user (email, name, ph_no, password, user_type) VALUES (?, ?, ?, ?, ?)");
  if ($stmt->execute([$email, $name, $phone, $hashed_password, $user_type])) {
      echo "Registration successful!";
      header("Location: index.php");
  } else {
      echo "Error: " . $stmt->errorInfo()[2]; // For debugging
      // Handle the error more gracefully in production
  }
}
?>
<?php
include 'header.php';
?>

<div class="signup-wrapper">
<div class="signup-form">
  <div class="card shadow">
    <div class="card-body">
      <h1 class="h3 mb-3 fw-normal text-center">Sign Up</h1>
      <form action="" method="post">
        <div class="form-floating mb-3">
          <input type="email" name="register-email" class="form-control" id="floatingEmail" placeholder="name@example.com" required>
          <label for="floatingEmail">Email address</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" name="register-name" class="form-control" id="floatingFullName" placeholder="Full Name" required>
          <label for="floatingFullName">Full Name</label>
        </div>
        <div class="form-floating mb-3">
          <input type="tel" class="form-control" name="register-phone" id="floatingPhoneNumber" placeholder="Phone Number" required>
          <label for="floatingPhoneNumber">Phone Number</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" name="register-password" class="form-control" id="floatingPassword" placeholder="Password" required>
          <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" name="register-repassword" class="form-control" id="floatingConfirmPassword" placeholder="Confirm Password" required>
          <label for="floatingConfirmPassword">Confirm Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" name="register-btn" type="submit">Sign Up</button>
      </form>
      <div class="mt-3 text-center">
        <p>Already have an account? <a href="login.php">Sign In</a></p>
      </div>
    </div>
  </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
