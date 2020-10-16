    
    <!-- PHP TAG linking includes folder with header file show menus -->
    <?php 
    //variable used to display title name.
     $title ='INDEX';
     //include keyword will through a error message but code will execute
    include 'includes/header.php'

    ?>
    <!-- End og PHP Tag --> 


    <!-- Basic Html -->
    <h1><?php echo $title ?> </h1>
    <h1>Hello World - PHP Primer done by Orace Mundle</h1>

    <!-- PHP CODE -->

    <?php   
    //Printing to Html using echo    
    echo "Hello PHP"; 
    echo "<br/>";
    echo "Second Line";    
    ?>


    <?php 
    //declaring a variable in PHP
    $name = "Orace Alilando Mundle";
    $age = 37;
    echo "<br/>";
    //echo or printing variable
    echo $name;
    //echo htlm header tage concatanated with variable 
    echo "<h1>My Name is: ".$name." <h1>";    
    echo "<h1>My Age is: ".$age." <h1>";

    //Echo using double quots and interpolation
    echo "<h1>My Name is: $name and Age: $age</h1>";
    
    ?>
        
<!-- Button -->
<button type="button" class="btn btn-dark">CLICK ME</button>


   <!-- PHP TAG linking includes folder with footer file -->
   <?php 
   //require keyword stop the exceuting of code decuase it cannot find file

require 'includes/footer.php'

?>
<!-- End of PHP Tag --> 