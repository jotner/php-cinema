<?php
session_start();

include 'header.php';

$allMovies = getMovies($connection);
$recMovie = getRecMovie($connection, 3);

require 'includes/Customer.php';
require 'includes/Adult.php';
require 'includes/Child.php';

$adult  = new Adult('18', '15', 'Gold', '2');
$child  = new Child('0 - 17', '8', $recMovie);
?>

<section class="hero is-fullheight curtain">
  <div class="hero-body">
    <div class="container">
      <div class='columns is-multiline is-centered'>
        <?php while ($row = mysqli_fetch_array($allMovies)) { ?>
        <div class='column is-3'>
          <div class='card movie-card'>
            <div class='card-image'>
              <figure class='image is-4by3'>
                <img src='<?php echo $row['movieImg']; ?>'>
              </figure>
            </div>
            <div class='card-content'>
              <div class='content'>
                <h2 class="movie-title">
                  <?php echo $row['movieTitle']; ?>
                </h2>
                <?php $getCategories = getCategories($connection,  $row['movieID']) ?>
                <?php while ($rowCat = mysqli_fetch_array($getCategories)) { ?>
                <span class='tag subtitle'>
                  <?php echo $rowCat['catName']; ?>
                </span>
                <?php } ?>
                <p>
                  <?php echo $row['movieInfo']; ?>
                </p>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
        <div class="column has-text-centered">
          <div class="card" style="padding: 1.5rem;">
            <h1 class="title">Ticket Information</h1>
            <h2 class="movie-title">Adults</h2>
            <ul>
              <li>
                <strong>Age:</strong>
                <?php echo $adult->getAge(); ?> years and up
              </li>
              <li>
                <strong>Price:</strong>
                $<?php echo $adult->getPrice(); ?>
              </li>
              <li>
                <strong>VIP Tickets:</strong> Only for <span style="font-weight:bold; color: gold;"><?php echo $adult->getVIP();?></span> members
              </li>
              <li>
                <?php echo $adult->allow(); ?> allowed to watch movies tagged with <span class='tag subtitle'>Horror</span>
              </li>
            </ul>
            <br>
            <h2 class="movie-title">Children</h2>
            <ul>
              <li>
                <strong>Age:</strong>
                <?php echo $child->getAge(); ?> years
              </li>
              <li>
                <strong>Price:</strong>
                $<?php echo $child->getPrice(); ?>
              </li>
              <li>
                <strong>Recommended:</strong>
                <?php echo $child->getRec();?>
              </li>
              <li>
                <?php echo $child->allow(); ?> allowed to watch movies tagged with <span class='tag subtitle'>Horror</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php' ?>
