    <!-- PHP TAG linking includes folder with header file show menus -->
    <?php 
     //variable used to display title name.
     $title ='IF STATEMENT';

    include 'includes/header.php'

    ?>
    <!-- End of PHP Tag for header -->

<!-- <body> --> 
    <h1 style="color: red;"> <?php echo $title ?> </h1>
    
    <!-- PHP CODE -->

    <?php 
    //An If Statement that will carry out an action based on the value of the variable
    echo "<h2>IF STATEMENT</h2>";
    echo $title;


    $grade = 80;
    if($grade >= 50)
        { echo "<h3 style='color: green'>You have successfully PASSED your exam</h3>";
            //adding color only to the word PASS
            echo "<h3>You have successfully<span style='color: green'> PASSED</span> your exam</h3>";
        }
        else
        { echo "<h3 style='color: red'>You have unfortunately FAILED your exam</h3>";
           //adding color only to the word FAIL
            echo "<h3>You have unfortunately<span style='color: red'> FAILED </span> your exam</h3>";
        }

    $gradeLetter  = 'A';

    //If-Else If-Else Statement
    if($gradeLetter == 'A')
        {echo '<ch2 style="color: green"> YOU ARE A SUPERSTAR!!!! </ch2>';}
        elseif($gradeLetter == 'B')
        {echo '<ch2 style="color: blue"> YOU HAVE DONE WELL!!!! </ch2>';}
        else
        {echo '<ch2 style="color: red"> YOU HAVE FAILED.....</ch2>';}
                
    ?>

    <!-- END OF PHP CODE -->

  <!-- PHP TAG linking includes folder with footer file -->
   <?php 
   //require keyword

require 'includes/footer.php'

?>
<!-- End of PHP Tag --> 