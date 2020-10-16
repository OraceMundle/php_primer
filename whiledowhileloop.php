    <!-- PHP TAG linking includes folder with header file show menus -->
    <?php 
     //variable used to display title name.
     $title ='WHILE / DO WHILE LOOP';
    include 'includes/header.php'

    ?>
    <!-- End of PHP Tag for header -->

<!-- <body> --> 
    <h1><?php echo $title ?></h1>

    <!-- PHP CODE -->

    <?php 
        //While Loop in PHP
        $grade = 0;
       /* Infinite while loop
       
       while($grade < 10)
        {
            echo '<p> I AM LESS THAN 10!</p>';
        }
        */
        //Pre-Condition Loop
        while($grade < 10)
        {
            echo '<p> I AM LESS THAN 10!</p>';
            $grade++;
        }
        echo 'EXIT LOOP';
        
    ?>


    
    <h1>DO-While Loop</h1>
    <?php
    //Post-Condition Loop
    //DO-while Loop in PHP
    $grade = 0;
        do{

            echo '<p> I AM DO WHILE LOOP </p>';
            $grade++;
        }

        while ($grade < 10);
        echo 'EXIT LOOP';

    ?>

    <!-- END OF PHP CODE -->
    
  <!-- PHP TAG linking includes folder with footer file -->
   <?php 
   //require keyword

require 'includes/footer.php'

?>
<!-- End of PHP Tag --> 