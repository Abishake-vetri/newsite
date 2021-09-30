
  <?php 
      $title = "Home";
      include 'snippets/header.php';
  ?>

       <?php 
          echo 'I am a Web Devoloper </br> Looking for a Good Job';
          $name ='Abishake_vetri' ;
          $num = '12345';
          echo '<h2></br>Name:'. $name.'</br>Num:'.$num.'</h2>';     //if we use single quatation marks we need to split it like this.
          echo "<h1>My Name Is: $name </br> My Num Is : $num </h1>";  //if we use double quatation we dont need to split it like this.
          
          require 'snippets/footer.php'
          ?>   
