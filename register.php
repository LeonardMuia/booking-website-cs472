<?php 
  // Include main config
  require './php/config.php';

  // Check if the user is already logged in, if yes then redirect him to welcome page
  if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: my-account.php");
    exit;
  }

  include "./php/createuser.php";
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Travel Bookings</title>

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/signin.css">
    
</head>
<body class="text-center">

<main class="form-signin">
  <form action="<?php echo build_url('register'); ?>" method="post">

    <a href="<?php echo build_url('')?>">
      <img class="mb-2" src="images/logo.png" alt="logo" width="120" height="120">
    </a>

    <h1 class="h3 mb-3 fw-normal">Sign Up</h1>

    <div class="form-floating mt-2">
      <input type="text" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" name="username" value="<?php echo $username; ?>" autofocus>
      <label for="floatingInput">Username</label>
      <small class="invalid-feedback"><?php echo $username_err; ?></small>
    </div>

    <div class="form-floating mt-2">
      <input type="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" name="email" value="<?php echo $email; ?>">
      <label for="floatingInput">Email address</label>
      <small class="invalid-feedback"><?php echo $email_err; ?></small>
    </div>

    <div class="form-floating mt-2">
      <input type="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" name="password" value="<?php echo $password; ?>">
      <label for="floatingInput">Password</label>
      <small class="invalid-feedback"><?php echo $password_err; ?></small>
    </div>

    <div class="form-floating mt-2">
      <input type="password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" name="confirm_password" value="<?php echo $confirm_password; ?>">
      <label for="floatingInput">Confirm Password</label>
      <small class="invalid-feedback"><?php echo $confirm_password_err; ?></small>
    </div>

    <input type="submit" class="w-100 btn btn-lg btn-primary mt-3" value="Create an Account">

    <p class="mt-3 mb-3 text-muted">Already have an account? <a class="text-link" href="<?php echo build_url('login'); ?>">Sign In</a> </p>

    <p class="mt-5 mb-3 text-muted">© <?php echo date('Y'); ?> Travel Bookings, Inc.</p>

  </form>
</main>

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>