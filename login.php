<?php
require 'includes/config.php';
require 'includes/functions.php';

$username = $password = "";
$username_err = $password_err = "";

if (isset($_POST['isuser']) && $_POST['isuser'] == 1) {
  $username_err = login($connection);
}
?>

<!DOCTYPE html>
<html lang="sv" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Log In | Jonathan Eriksson</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <section class="hero curtain is-fullheight">
      <div class="hero-body">
        <div class="container has-text-centered">
          <div class="column is-4 is-offset-4">
            <div class="box">
              <h3 class="title">Login</h3>
              <p class="subtitle">Please login to proceed.</p>
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                   <input type="hidden" name="isuser" id="isuser" value="1">
                <div class="field <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                  <label class="label">Username</label>
                  <div class="control has-icons-left">
                    <input class="input is-large" type="username" name="username" placeholder="Username" value="<?php echo $username; ?>" required>
                    <span class="icon is-small is-left">
                      <i class="fas fa-user"></i>
                    </span>
                    <span class="help is-danger">
                      <?php echo $username_err; ?></span>
                  </div>
                </div>
                <div class="field <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                  <label class="label">Password</label>
                  <div class="control has-icons-left">
                    <input class="input is-large" type="password" name="password" placeholder="Password" required>
                    <span class="icon is-small is-left">
                      <i class="fas fa-lock"></i>
                    </span>
                    <span class="help is-danger">
                      <?php echo $password_err; ?></span>
                  </div>
                </div>
                <input class="button is-fullwidth is-medium" type="submit" name="submit" value="Log in">
                <br>
                <p>Do you want to create an account? <a class="darklink" href="register.php">Register here</a>.</p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>

</html>
<?php
  dbDisconnect($connection);
?>
