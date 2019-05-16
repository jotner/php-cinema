<?php
session_start();

unset($_SESSION['status']);

session_destroy();

?>

<!DOCTYPE html>
<html lang="sv" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Logged Out | Jonathan Eriksson</title>
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
              <h3 class="title">Logged out</h3>
              <p class="subtitle">You are now logged out. <a class="darklink" href="index.php">Go back to index.</a></p>
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
