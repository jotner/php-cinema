<?php
session_start();

include 'header.php';

checkAdmin();

if (isset($_POST['isnew']) && $_POST['isnew'] == 1) {
    $saveCustomer = savePost($connection);
    header("Location: index.php");
}
?>

<section class="hero is-fullheight" style="background-color: #fff;">
  <div class="hero-body">
  <div class="container">
    <div class="columns is-centered">
      <div class="column booking-col">
        <p class="title">
          Create a new post
        </p>
        <a class="darklink" href="index.php">Go back</a>
        <br><br>
        <form action="post-new.php" method="post">
           <input type="hidden" name="isnew" id="isnew" value="1">
          <div class="field">
            <label class="label">Title:</label>
                <div class="control has-icons-left">
            <input class="input is-medium" type="text" name="postTitle" placeholder="Your title...">
            <span class="icon is-small is-left">
              <i class="fas fa-pen"></i>
            </span>
          </div>
          </div>
          <div class="field">
            <label class="label">Thumbnail:</label>
            <div class="control has-icons-left">
            <input class="input is-medium" type="text" name="postImg" placeholder="Filename path...">
            <span class="icon is-small is-left">
              <i class="fas fa-image"></i>
            </span>
          </div>
          </div>
          <label class="label">Text:</label>
          <textarea class="textarea" rows="12" name="postComment" placeholder="Your text..."></textarea></p>
          <p><input style="margin-top: 20px;" class="button is-medium" type="submit" value="Save">
        </form>
      </div>
    </div>
  </div>
</div>
</section>

<?php include 'footer.php' ?>
