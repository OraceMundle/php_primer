    <!-- PHP TAG linking includes folder with header file show menus -->
    <?php 
     //variable used to display title name.
     $title ='SWITCH STATEMENT';
    include 'includes/header.php'

    ?>
    <!-- End of PHP Tag for header -->
   
<!-- <body> -->
<h1> <?php echo $title ?> </h1>

<!-- PHP CODE -->
<?php 
    $grade = 'B';

    //SWITCH STATEMENT
    switch($grade)
    {

        case 'A':
            echo '<ch2 style="color: green"> YOU ARE A SUPERSTAR!!!! </ch2>';
            break;

        case 'B':
            echo '<ch2 style="color: blue"> YOU HAVE DONE WELL!!!! </ch2>';
            break;

        default: 
            echo '<ch2 style="color: red"> YOU HAVE FAILED.....</ch2>';
            break;


    }//end of switch statement


?>

<!-- END OF PHP CODE -->
    
  <!-- PHP TAG linking includes folder with footer file -->
  <?php 
   //require keyword

require 'includes/footer.php'

?>
<!-- End of PHP Tag --> 