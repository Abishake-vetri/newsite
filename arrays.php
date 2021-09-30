<?php 
      $title = "Arrays";
      include 'snippets/header.php';
  ?>
    <h1>ARRAYS</h1>
    <?php
          $names = array("ABI","RAHUL","SIVA","LINGAM","NONE");
          echo $names[2];
          $len = count($names);
          for ($i=0;$i<$len;$i++){
              echo "<p>$names[$i]</p>";
              $Myname = "abishek vetri";
             }
          echo "<p>To change in uppercase of first letter: ".ucfirst($Myname)."</p>";
          echo "<p>To change in uppercase of first letter in each words: ".ucwords($Myname)."</p>";
          echo "<p>To change in uppercase of words: ".strtoupper(str_repeat($Myname,5))."</p>";
          echo "<p>To find position of letter in words: ".strpos($Myname,'i')."</p>";
          echo "<p>To find character in a string: ".strchr($Myname,'s')."</p>";
          require 'snippets/footer.php'


    ?>
    
