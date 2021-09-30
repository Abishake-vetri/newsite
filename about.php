
<?php 
      $title = "Functions";
      include 'snippets/header.php';
  ?>
    <h1>Functions</h1>
    <?php 
        function addNumbers(){
            return 5+5;
        }
       echo addNumbers();

       function subNumbers($a,$b){
           $c=$a-$b;
           echo '<br/>'.$c;
           
       }
       $sub = subNumbers(100,30);
        echo $sub;

        require 'snippets/footer.php'

    ?>
