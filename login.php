<?php
include 'config/dbuser.php';
session_start();

$msg = '';
$msgClass = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT id FROM users WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    if ($count > 0) {
        // session_register('username');
        $_SESSION['login_user'] = $username;
        header('location: reports.php');
    } else {
        $msg = '<strong>Invalid Username and Password Combination</strong>';
        $msgClass = 'admin-error';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />

        <!-- CUSTOM CSS -->
        <link rel="stylesheet" href="styles/login.css" />

        <title>Easterseals Run</title>
    </head>


<div class="form-wrapper">
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="login">
    <div class="<?php echo $msgClass; ?>">
      <?php if ($msg != ''): ?>
        <?php echo $msg; ?>
      <?php endif;?>
    </div>
    <h3 id="login-title">Admin Login</h3>
      <!-- USERNAME -->
      <div class="form-item">
        <input
        type="text"
        name="username"
        required="required"
        data-toggle="tooltip"
        data-placement="top"
        title="Username"
        id="username"
        placeholder="Username"
        value="<?php echo isset($_POST['username']) ? $username : ''; ?>"
        autofocus
        required
        >
      </div>
      <!-- PASSWORD -->
      <div class="form-item">
        <input
        type="password"
        name="password"
        required="required"
        data-toggle="tooltip"
        data-placement="top"
        title="Password"
        id="password"
        placeholder="Password"
        required
        >
      </div>
      <!-- LOGIN BUTTON -->
      <div class="button-panel">
        <input
        type="submit"
        name="submit_login"
        data-toggle="tooltip"
        data-placement="top"
        class="button"
        title="Log In"
        value="Login"
        >
      </div>
  </form>
</div>