<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: index.php");
    exit;
}
?>
<?php include 'header.php' ?>
<?php require 'functions.php' ?>
<section class="hero is-fullheight curtain">
  <div class="hero-body">
  <div class="container">
    <div class="columns is-centered">
      <div class="column is-half booking-col">
          <p class="title">
            Boka
          </p>
          <p class="subtitle">
            Fyll i alla fälten för att skapa din beställning<br>Alla biljetter
            kostar <strong>150kr</strong>
          </p>
          <form action="ticket.php" method="post">
            <div class="field">
              <label class="label">Film</label>
              <div class="select is-fullwidth">
                <select class="select" name="movie" required>
                  <option value="" disabled selected hidden>Välj film...</option>
                  <option value="Avengers: Endgame">Avengers: Endgame - 11 år</option>
                  <option value="John Wick 3: Parabellum">John Wick 3: Parabellum - 15 år</option>
                  <option value="Detective Pikachu">Detective Pikachu - 7 år</option>
                </select>
              </div>
            </div>
            <div class="field">
              <label class="label">Din ålder</label>
              <div class="control has-icons-left">
                <input class="input is-medium" type="number" name="age"
                  placeholder="Ålder" required>
                <span class="icon is-small is-left">
                  <i class="fas fa-birthday-cake"></i>
                </span>
              </div>
            </div>
            <div class="field">
              <label class="label">Antal biljetter</label>
              <div class="control has-icons-left">
                <input class="input is-medium" type="number" name="amount"
                  placeholder="Antal biljetter" required>
                <span class="icon is-small is-left">
                  <i class="fas fa-ticket-alt"></i>
                </span>
              </div>
            </div>
            <label class="label">Är målsman med?</label>
            <div class="field">
              <label class="radio">
                <input type="radio" value="yes" name="adult" checked>
                <span class="gray">Ja</span>
              </label>
              <label class="radio">
                <input type="radio" value="no" name="adult">
                <span class="gray">Nej</span>
              </label>
            </div>
            <input class="button is-fullwidth is-medium" type="submit" name="submit"
              value="Boka">
          </form>
      </div>
    </div>
  </div>
  </div>
</section>

<?php include 'footer.php' ?>
