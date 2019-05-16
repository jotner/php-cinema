<?php
session_start();

include 'header.php';

checkLogin();

$page = "profile";
?>

<section class="hero is-fullheight curtain">
  <div class="hero-body">
    <div class="container">
      <div class='columns'>
        <div class='container profile'>
          <div class='section profile-heading'>
            <div class='columns profile-info is-mobile is-multiline'>
              <div class='column is-2'>
                  <figure class="image is-1by1">
                  <img alt='' src='<?php echo($_SESSION["userImg"]); ?>'>
                </figure>
              </div>
              <div class='column is-4-tablet is-10-mobile name'>
                <ul>
                  <li>
                    <p>
                      <span class='title is-bold'>
                        <?php echo ucfirst($_SESSION["username"]); ?></span>
                    </p>
                  </li>
                  <li>
                    <p>
                      <strong>Registered:</strong>
                      <?php echo htmlspecialchars($_SESSION["userCreated"]); ?>
                    </p>
                  </li>
                  <li>
                    <p>
                      <strong>About:</strong>
                      <?php echo htmlspecialchars($_SESSION["userDesc"]); ?>
                    </p>
                  </li>
                </ul>
              </div>
              <div class='column is-6-tablet is-4-mobile has-text-centered'>
                <?php checkUserGroup(); ?>
              </div>
            </div>
          </div>
          <div class='box' style='border-radius: 0px;'>
            <ul class="profile-menu">
              <li class="<?php echo ($page == "profile" ? "active" : "")?>"><a href="profile.php">My Profile</a></li>
              <li class="<?php echo ($page == "settings" ? "active" : "")?>"><a href="settings.php">Settings</a></li>
            </ul><br>
            <h3 class="title">Profile</h3>
            <p class="subtitle">Your profile will show you information about your account level, points, tickets bought the current year and your favorite movies. </p>
            <nav class="level">
              <div class="level-item has-text-centered">
                <div>
                  <p class="heading">Points</p>
                  <p class="title">240</p>
                </div>
              </div>
              <div class="level-item has-text-centered">
                <div>
                  <p class="heading">Tickets (2019)</p>
                  <p class="title">12</p>
                </div>
              </div>
              <div class="level-item has-text-centered">
                <div>
                  <p class="heading">Favorites</p>
                  <p class="title">8</p>
                </div>
              </div>
            </nav>
            <h1 class="title" style="text-align: center">Level: 4</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php' ?>
