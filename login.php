<?php 
    /*
    * Include PHP Authentication Class
    */
    
    require_once "./php/config.php";
    require_once "./php/authentication.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Travel Bookings</title>

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/signin.css">
    
</head>
<body class="text-center">

<main class="form-signin">
  <form action="<?php echo build_url('login'); ?>" method="post">
    <a href="<?php echo build_url('')?>">
      <img class="mb-2" src="images/logo.png" alt="logo" width="120" height="120">
    </a>
    <h1 class="h3 mb-3 fw-normal">Sign in</h1>

    <?php 
      if(!empty($login_err)){
          echo '<div class="alert alert-danger">' . $login_err . '</div>';
      }        
    ?>


    <div class="form-floating mt-2">
      <input name="username" type="text" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" id="floatingInput" value="<?php echo $username; ?>" autofocus>
      <label for="floatingInput">Username</label>
      <span class="invalid-feedback"><?php echo $username_err; ?></span>
    </div>
    <div class="form-floating mt-2">
      <input name="password" type="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" id="floatingPassword">
      <label for="floatingPassword">Password</label>
      <span class="invalid-feedback"><?php echo $password_err; ?></span>
    </div>

    <div class="checkbox mt-2">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <input type="submit" class="w-100 btn btn-lg btn-primary mt-3" value="Sign In">

    <p class="mt-3 mb-3 text-muted">Don't have an account? <a class="text-link" href="<?php echo build_url('register'); ?>">Sign Up</a> </p>

    <p class="mt-5 mb-3 text-muted">© <?php echo date('Y'); ?> Travel Bookings, Inc.</p>
    
  </form>
</main>

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>