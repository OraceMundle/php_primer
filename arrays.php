    <!-- PHP TAG linking includes folder with header file show menus -->
    <?php 
    $title ='ARRAYS AND PRINTOUT';
    include 'includes/header.php'

    ?>
    <!-- End of PHP Tag for header -->




<!-- <body> --> 
    <h1><?php echo $title ?></h1>

    <!-- PHP Code -->
    <?php 
    //a variable declaration
    $num = 3;
    
    //arrays in php example
    //hommogeneous type of array
    $numbersArray = array(1,2,3,4,5,6,7,8,9,10,54,59,100,58,10);
    
    echo "<p> The Ninth Position Element is: $numbersArray[9] </p>";
    //counting the size of the array and assigning it to variable $size
    $size = count($numbersArray);
    //printout array size
    echo "<p>Array size is: $size </p>";
    //For loop that prints elements of the array
    for($count = 0; $count < $size; $count++)
        {
            echo "<p>The $count elment is: $numbersArray[$count]</p>";
        }//end of for loop


    ?>

    <!-- END OF PHP CODE -->
  <!-- PHP TAG linking includes folder with footer file -->
  <?php 
   //require keyword

require 'includes/footer.php'

?>
<!-- End of PHP Tag --> 