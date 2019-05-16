<?php
session_start();

include 'header.php';

checkAdmin();

if (isset($_GET['editid']) && $_GET['editid'] > 0) {
    $customerData = getPostInfo($connection, $_GET['editid']);
}

if (isset($_POST['updateid']) && $_POST['updateid'] > 0) {
    updatePost($connection);
    header("Location: index.php?editid=".$_POST['updateid']);
}
?>

<section class="hero is-fullheight" style="background-color: #fff;">
  <div class="hero-body">
    <div class="container">
      <div class="columns is-centered">
        <div class="column booking-col">
          <p class="title">
            Edit post '<?php echo $customerData['postTitle']; ?>'
          </p>
          <a class="darklink" href="index.php">Go back</a>
          <br><br>
          <form action="post-edit.php" method="post">
            <input type="hidden" name="updateid" value="<?php echo $customerData['postID']; ?>">
            <div class="field">
              <label class="label">Title:</label>
              <div class="control has-icons-left">
              <input class="input is-medium" type="text" placeholder="Your title.." name="postTitle" value="<?php echo $customerData['postTitle']; ?>">
                <span class="icon is-small is-left">
                  <i class="fas fa-pen"></i>
                </span>
              </div>
            </div>
            <div class="field">
              <label class="label">Thumbnail:</label>
                <div class="control has-icons-left">
              <input class="input is-medium" type="text" placeholder="Filename path.."
                  name="postImg" value="<?php echo $customerData['postImg']; ?>">
                  <span class="icon is-small is-left">
                    <i class="fas fa-image"></i>
                  </span>
                </div>
            </div>
            <div class="field">
              <label class="label">Text:</label>
              <textarea class="textarea" rows="12" placeholder="Your text.."
                  name="postComment"><?php echo $customerData['postComment']; ?></textarea>
            </div>
            <input style="margin-top: 20px;" class="button is-medium" type="submit"
              value="Save changes">
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php' ?>
