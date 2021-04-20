<?php
//including get data file
include 'web-service/get-data.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Ayoub's Store</title>

    <?php
    //including external CSS
    include 'includes/styles.php';
    ?>

  </head>
  <body>
    <?php
    //including navigation file
    include 'includes/navigation.php';
    ?>

    <!-- main starts -->
    <main role="main">

      <?php
      //including masthead file / jumbotron
      include 'includes/masthead.php';
      ?>

      <!-- products container -->
      <div class="container-fluid py-5 px-4">
        <h2 class="heading mb-2" id="catalog">Products</h2>
        <div class="row">
          <?php
            printHTML();
          ?>
        </div>
      </div>

    </main>
    <!-- main ends -->

    <?php
    //including footer file
    include 'includes/footer.php';

    //including external JS
    include 'includes/scripts.php';
    ?>

  </body>
</html>