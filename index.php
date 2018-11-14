<!DOCTYPE html>
<html>
<head>
  <!-- Include basic libraries -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <?php include "header.php" ?>

  <div id="main" class="container">
    <h1>Välkommen till ELSHOPPEN</h1>
    <div class="row">
      <?php
        //Hardcoded product information, this should be fetched from a database later on.
        $item["name"] = "Nintendo Switch konsol med två Joy-Cons (grå)";
        $item["price"] = "3379.00";
        $item["image_ref"] = "nintendo_switch_gray";
        $item["id"] = 1;

        //The include statement copies code from the php file specified below and pastes it onto here
        include("modules/item_card.php");
        
        //Use loops to create multiple item cards
        $item["name"] = "Nintendo Switch konsol med två Joy-Cons (neon blå/ röd)";
        $item["image_ref"] = "nintendo_switch_neon_blue_red";
        $item["id"] = 2;
        include("modules/item_card.php");
      ?>
    </div>
  </div>

  <?php include("footer.php"); ?>
  
  <!-- Include jQuery, popper and bootstrap  -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="/footer.js"></script>
</body>
</html>
