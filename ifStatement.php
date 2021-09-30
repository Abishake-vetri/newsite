<?php 
      $title = "if_else";
      include 'snippets/header.php';
  ?>

<h1>IF ELSE DEMO</h1>
    <?php
         $mark=75;
        if($mark>=35){
            echo "Your mark is $mark so You are Passed";
        }
        else{
            echo "You are Failed";
        }
        require 'snippets/footer.php'

    ?>
