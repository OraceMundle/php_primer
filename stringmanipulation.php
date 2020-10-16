    <!-- PHP TAG linking includes folder with header file show menus -->
    <?php 
     //variable used to display title name.
     $title ='STRING MANIPULATION';
    include 'includes/header.php'

    ?>
    <!-- End of PHP Tag for header -->

<!-- <body> --> 
    <h1><?php echo $title?></h1>

    <!--PHP CODE -->
    <?php
    
    //Concatenation of Strings
    $phrase1 = "Students who arrive to school late";
    $phrase2 = "sent home with letter.";
    $name = "orace alilando mundle";
    echo "<p>Example 1</p>";
    //with concatenation dot but without html tags
    echo $phrase1.", more than three time for the month, will be".$phrase2;
    echo "<p>Example 2</p>";
    //without concatenation dot but with html tags
    echo "<p>$phrase1, more than three time for the month, will be $phrase2</p>";
    echo '<br/>';
    echo '<hr/>';

    //String Transformation ucfirst function
    echo 'Uppercase first letter: '. ucfirst($name).'<br/>';

    //String Transformation ucword function
    echo 'Uppercase first letter of each word: '. ucwords($name).'<br/>';
    
    //String Transformation strtoupper function
    echo 'Uppercase case: '. strtoupper($name).'<br/>';

    //String Transformation strtolowwer function
    echo 'Lowercase case: '. strtolower("THIS WAS ALL UPPER CASE").'<br/>';

    echo '<hr/>';

    //repeat string
    echo 'Repeat String: ' . str_repeat('a', 10) . '<br/>'; 
    //nesting str_repeat function in strtoupper function
    echo 'Repeat String: ' . strtoupper(str_repeat('a', 10)) . '<br/>'; 

    //Substring Function
    echo 'Get a Substring: ' . substr($name, 8, 14) . '<br/>'; 

    //String Position Function
    echo 'Get position of string: ' . strpos($name, 'a') . '<br/>';

    //Find Character Function
    echo 'Find Character "R": ' . strchr($name, 'R') . '<br/>';
    echo 'Find Character "l": ' . strchr($name, 'l') . '<br/>';
    echo 'Find Character "c": ' . strchr($name, 'c') . '<br/>';
    echo 'Find Character "s": ' . strchr($name, 's') . '<br/>';

    //length of a String strlen() function
    echo 'Find Length of String: ' . strlen($name) . '<br/>';

    echo '<hr/>';
    //Trim Function (trim, left trim, right trim)
    //pay attention to spacing of character in string. It is important
    echo 'Without Trim: ' . "A" . " B C D " . "E" . '<br/>';
    //trim function
    echo 'Without Trim: ' . "A" . trim(" B C D ") . "E" . '<br/>';
    //left trim function
    echo 'Without Trim: ' . "A" . ltrim(" B C D ") . "E" . '<br/>';
    //right trim function
    echo 'Without Trim: ' . "A" . rtrim(" B C D ") . "E" . '<br/>';

    echo '<hr/>';

    //String Replace Function
    echo 'Original String: ' . $phrase2 . '<br/>';
    echo 'Replace string with another: ' . str_replace("sent", "go", $phrase2)

    ?>
    <!-- End OF PHP CODE -->

  <!-- PHP TAG linking includes folder with footer file -->
   <?php 
   //require keyword

require 'includes/footer.php'

?>
<!-- End of PHP Tag --> 