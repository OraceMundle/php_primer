    <!-- PHP TAG linking includes folder with header file show menus -->
    <?php 
     //variable used to display title name.
     $title ='FUNCTIONS';

    include 'includes/header.php'

    ?>
    <!-- End of PHP Tag for header -->

<!-- <body> --> 
    <h1><?php echo $title ?></h1>

    <!-- PHP CODE TAGE -->
    <?php
        /* Defining a Function (kryword/name/expression) without parametres*/
        function writeMessage() {
            echo "PHP is awesome!!!!!! <br/>";
        }//end of writeMessage Function


        /* Calling function */
        writeMessage();

        echo "<hr/>";

        writeMessage();


        // Declaring a Function with parameters, passing by value
        function addFunction($num1, $num2)
        {
            $sum = $num1 + $num2;
            $num2 = $num2 + 1;
            echo "The sum of $num1 and $num2 is : $sum <br/>";

        }//end of addFunction

        //Deckaring changeNum() which will do modifications to parameters
        /* & allows you to pass by refrence inorder to do modification to variable  */
        function changeNum(&$num)
        {
            $num = $num + 10;
            //#num += 10;

        }//end of change Num Function

        
        //Declaring returnProduct function
        function returnProduct($num1, $num2)
        {
                $prod = $num1 * $num2;
                return $prod;
        }// end of returnProduct function



        //calling the addFunction with parameters
        addFunction(5, 9);

        //Does not have to be a static value
        $num = 40;
        addFunction(9, $num);

        //Printout Snum to show value is the same and cannot be specifically modified as is.
        echo $num . '<br/>';
        //Passing string as parameters to function.
        addFunction('20','60');

        addFunction('50', "11");

        //calling changeNum Function
        changeNum($num);
        echo $num . '<br/>';


        //declaring a variable that stores the result of returnProduct
        $return_value = returnProduct(10, 200);
        echo $return_value . '<br/>';


    ?>
    <!--END OF PHP CODE TAG--> 

  <!-- PHP TAG linking includes folder with footer file -->
   <?php 
   //require keyword

require 'includes/footer.php'

?>
<!-- End of PHP Tag --> 