    <!-- PHP TAG linking includes folder with header file show menus -->
    <?php
     //variable used to display title name.
     $title ='DATE AND TIME MANIPULATION'; 

    include 'includes/header.php'

    ?>
    <!-- End of PHP Tag for header -->

<!-- <body> -->
    <h1><?php echo $title ?></h1>
    <!-- PHP CODE TAGE -->
    <?php
        //declared variable to store getdate() function
        $datenow = getdate();

        echo "Today's Date: <br/>";
        echo $datenow['mday']. '<br/>';
        echo $datenow['mon']. '<br/>';
        echo $datenow['year']. '<br/>';

        //print today's date in one line
        echo "Today's Date: " . $datenow['mday'] . '/' . $datenow['mon'] . '/' . $datenow['year'] . '<br/>' ;

        //print out time in UNIX value
        echo time() . '<br/>';
        //echo 'The time is: ' . $datenow['hour'] .'<br/>';  
        
        //PHP use echo or print
        echo date("m/d/y G.i:s<br>", time()) . '<br/>';
        echo "Today is: ";
        echo date("j of F Y, \a\\t g.i a", time());



    ?>
    <!-- END OF PHP CODE TAGS --> 



  <!-- PHP TAG linking includes folder with footer file -->
   <?php 
   //require keyword

require 'includes/footer.php'

?>
<!-- End of PHP Tag --> 