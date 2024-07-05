<?php
// Start the session
session_start();

// Include the database connection file
include 'config/connection.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (isset($_GET['login-email']) && isset($_GET['login-password'])) {
    $email = $_GET['login-email'];
    $password = $_GET['login-password'];

    // Prepare and execute the query to fetch the user
    $stmt = $pdo->prepare("SELECT id, email, password FROM user WHERE email = ?");
    $stmt->execute([$email]);

    // Fetch the user data
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verify the password
    if ($user && password_verify($password, $user['password'])) {
      // Store user information in the session
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['email'] = $user['email'];

      // Redirect to the dashboard
      header("Location: index.php");
      exit;
    } else {
      $error = "Invalid email or password.";
    }
  }
}
?>
<?php
include 'header.php';
?>
<div class="login-wrapper">
  <div class="login-form">
    <div class="card shadow">
      <div class="card-body">
        <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
        <form action="" method="get">
          <div class="form-floating mb-3">
            <input type="email" class="form-control" name="login-email" id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" name="login-password" class="form-control" id="floatingPassword" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>
        <?php if (!empty($error)): ?>
        <div class="alert alert-danger mt-3" role="alert">
          <?php echo $error; ?>
        </div>
        <?php endif; ?>
        <div class="mt-3 text-center">
          <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>