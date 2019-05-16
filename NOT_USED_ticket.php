<?php
session_start();
if (!isset($_SESSION['status'])) {
    header("Location: index.php");
    exit;
}
?>
<?php include 'header.php' ?>
<?php require 'functions.php' ?>
<?php $ok = check($moviename, $age, $adult) ?>
<?php if (isset($_POST['submit']) && $ok) {
    ?>
<div class="section is-medium curtain">
  <div class="container">
    <div class="columns is-centered">
      <div class="column is-half booking-col">
        <p class="title">
          Tack för din bokning!
        </p>
        <p class="subtitle">
          Här kommer dina biljetter
        </p>
        <i class="fas fa-ticket-alt ticket-icon"></i>
        <ul class="tickets">
          <li><strong>Titel:</strong>
            <?php echo $moviename; ?>
          </li>
          <li><strong>Antal biljetter:</strong>
            <?php echo $amount; ?>
          </li>
          <li><strong>Pris:</strong>
            <?php cost($amount) ?>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php
} elseif (isset($_POST['submit']) && !$ok) {
        ?>
<div class="section is-large curtain">
  <div class="container">
    <h2 class="subtitle welcome">Du har inte behörighet att se denna film</h2>
    <a href="booking.php">Gå tillbaka</a>
  </div>
</div>
<?php
    } elseif (!isset($_POST['submit'])) {
        ?>
<div class="section is-large curtain">
  <div class="container">
    <h2 class="subtitle welcome">Du har ingen aktiv bokning!</h2>
    <a href="booking.php">Gå tillbaka till biljettbokning</a>
  </div>
</div>
<?php
    } ?>

<?php include 'footer.php' ?>
