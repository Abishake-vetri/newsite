<?php 
      $title = 'Date&Time';
      include 'snippets/header.php';
  ?>
    <h1>Date and Time manipulation using "getdate()" function</h1>
    <?php
       $Date = getdate();
       echo '<h2>'."Todays Date: " .$Date['mday']."-".$Date['mon']."-".$Date['year'].'</h2>';
      // print time().'<br/>';
      print date("d/m/y, h:i:s a " ,time()).'<br>';  // prints the date and time 
      print  date(" d F Y , h:i:s \\s\\e\\c\\s a " ,time());  // prints the date and time 

      require 'snippets/footer.php'
    
          ?>
