<?php
session_start();

include 'header.php';

$postUser = getPostUser($connection);

if (isset($_GET['editid']) && $_GET['editid'] > 0) {
    $customerData = getPostInfo($connection, $_GET['editid']);
}

if (isset($_POST['updateid']) && $_POST['updateid'] > 0) {
    updatePost($connection);
    header("Location: index.php?editid=".$_POST['updateid']);
}
?>

<section class="hero is-medium herobg">
  <div class="hero-body">
    <div class="content has-text-centered">
      <h1 class="index-title">Avengers: Endgame</h1>
      <h3 class="subtitle"><a href="#">Book Your Tickets Here</a></h2>
    </div>
  </div>
</section>
<section class="hero is-medium">
  <div class="hero-body">
    <div class="container">
      <div class="content has-text-centered">
        <h1 class="title">Latest News</h1>
        <?php
        if (isset($_SESSION['loggedin']) && $_SESSION['userGroup'] === 1) { ?>
        <a href="post-new.php"><button class="button is-medium">Create a new post</button></a>
        <?php } ?>
        <hr>
          <?php while ($row = mysqli_fetch_array($postUser)) { ?>
              <div class="columns">
          <div class="column all-news">
            <figure class='image is-3by1'>
              <img alt='Thumbnail' src='<?php echo $row['postImg']; ?>'>
            </figure>
            <h2 class="title">
              <a href="post.php?id=<?php echo $row['postID']; ?>">
              <?php echo $row['postTitle']; ?>
            </a>
            </h2><i class="date">
              <?php echo ucfirst($row['userName']); ?> |
              <?php echo date('Y-m-d H:i', strtotime($row['postDate'])); ?></i><br>
            <p class="post-comment">
              <?php echo $row['postComment']; ?>
            </p><br>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['userGroup'] === 1) { ?>
            <a href="post-edit.php?editid=<?php echo $row['postID']; ?>"><button class="button">Edit</button></a>
            <a href="post-delete.php?deleteid=<?php echo $row['postID']; ?>"><button class="button">Delete</button></a><br><br>
            <?php } ?>
          </div>
            </div>
            <hr>
          <?php } ?>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php' ?>
