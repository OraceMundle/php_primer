    <!-- PHP TAG linking includes folder with header file show menus -->
    <?php 
     //variable used to display title name.
     $title ='FOR LOOP';

    include 'includes/header.php'

    ?>
    <!-- End of PHP Tag for header -->

<!-- <body> --> 
<h1> <?php echo $title ?> </h1>
<!-- PHP CODE --> 
<?php
    //for loop 
    for($count = 0; $count < 10; $count++)
    {
        echo '<p>HELLO WORLD from ORACE MUNDLE</p>';    

    }//end of forloop

    for($count = 0; $count < 10; $count++)
    {
        echo "<p>The count is: $count</p>";
    
    }

?>
<!-- END OF PHP CODE -->


  <!-- PHP TAG linking includes folder with footer file -->
   <?php 
   //require keyword

require 'includes/footer.php'

?>
<!-- End of PHP Tag --> 