<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Webpage</title>
</head>

<body>
    <header>
        <h1>Welcome to My PHP Webpage</h1>
    </header>

    <main>

        <p>This is the main content of the page.</p>

        <?php
            /*
                $bool = true;/*
                $a = 1;
                $b = 4;

                $result = match ($a) {
                1,3,5  => "Variable a is equal to one!",
                2  => "Variable a is equal to two!",
                default => "None were a match",
                };

                echo $result;

                
                switch($a){
                    case 1:
                        echo "The first case is correct!";
                        echo "<br>";
                        break;
                    case 3:
                        echo "THe second case is correct!";
                        echo "<br>";
                        break;
                    default:
                        echo "None of the conditions were true";
                        echo "<br>";
                        break;
                }

                if ($a < $b && !$bool){
                    echo "first condition is true";
                    echo "<br>";
                }else if($a < $b && $bool){
                    echo "Second condition is true";
                    echo "<br>";
                }else{
                    echo "None of the conditions were true";
                    
                }
            */
        ?>

        <?php
        /*
        //Arithmetic Operators
        echo 1 + 2 ;
        echo "<br>";
        echo 10 % 3;
        echo "<br>";
        echo 10 ** 3;
        echo "<br>";

        //operator precedence
        echo 1 + 2 * 4;
        echo "<br>";

        //changing operator precedence
        echo (1 + 2) * 4;
        echo "<br>";
        echo (1 + 2) * (4 - 2);
        echo "<br>";

        //assignment operator(=)
        $a = 2;
        $b = 4;

        $c = 2;
        $d = 6;

        echo $a ."<br>". $b;
        echo "<br>";
        echo $a= $a + 4;
        echo "<br>";
        echo $a += 4;
        echo "<br>";

        //comparison operator for value(==), for value and datatype(===)
        if ($a === $b){
            echo "This statement is true";
            echo "<br>";
        }

        //comparison if not same value
        if($a != $b){
            echo "This statement is true";
            echo "<br>";
            //Nesting
            //comparison if not same value
            if($a <> $b){
                echo "This statement is true";
                echo "<br>";
        }

        }

        //comparison if not same value or datatype
        if($a !== $b){
            echo "This statement is true";
            echo "<br>";
        }

        //comparison if less than value
        if($a < $b){
            echo "This statement is true";
            echo "<br>";
        }

        //comparison if less than value or equal to
        if($a <= $b){
            echo "This statement is true";
            echo "<br>";
        }

        //comparison operator for value(==), for value and datatype(===)
        if ($a == $b and $c == $d){
            echo "This statement is true";
            echo "<br>";
        }

        //comparison operator for value(==), for value and datatype(===)
        if ($a == $b && $c == $d){
            echo "This statement is true";
            echo "<br>";
        }

        //comparison operator for value(==), for value and datatype(===)
        if ($a == $b or $c == $d){
            echo "This statement is true";
            echo "<br>";
        }

        //comparison operator for value(==), for value and datatype(===)
        if ($a == $b || $c == $d){
            echo "This statement is true";
            echo "<br>";
        }

        //comparison operator for value(==), for value and datatype(===)
        if ($a == $b || $c == $d && $a == $c){
            echo "This statement is true";
            echo "<br>";
        }

        //Incrementing/decrementing operators
        echo ++$a;
        echo "<br>";
        echo $a++;
        echo "<br>";
        
        echo --$a;
        echo "<br>";  
    

        //String concatenation
        $a = "Hello";
        $b = "World";
        $c = $a . " ". $b;
        echo $c;
        */
        ?>

        <!--

        <p>
            <?php
                // Simple PHP code to display a message
                //echo "Hello, World! Today is " . date("l, F jS, Y") . ".<br><br>";
            ?>            
        </p>

        <p>
            
            sending data to the same page you are inside(url) of albeit this is prone to sross site scripting
            <form action="<?php //echo $_SERVER["PHP_SELF"]; ?>pkill -f code" method="get"> -->
            <!-- sending data to a different page -->
             <!--
            <form action="includes/formhandler.php" method="post"> 
                <label for="firstname">firstname?</label>
                <input required id="firstname" type="text" name="firstname" placeholder="Firstname">

                <label for="lastname">Lastname?</label>
                <input id="lastname" type="text" name="lastname" placeholder="Lastname">  

                <label for="favoritepet">Favourite Pet?</label>                 
                <select id="favouritepet" name="favouritepet">
                    <option value="none">None</option>
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                    <option value="bird">Bird</option>
                </select>

                <button type="submit">Submit</button>
            </form>
            -->

            <?php
            /*
                // Scalar data types (contain one value)
                $name = "Wonderful Counselor";
                $int = 143999;
                $float = 406.73;
                $bool = false;

                echo "<p>";
                echo $name . " is here for you and " . $int . "<br>";
                echo "Boolean value: " . ($bool ? 'true' : 'false') . "<br>";

                // Array type
                $names = ["Adam", "Cain", "Seth", "Abel", "Eve"];
                echo "Names: " . implode(", ", $names) . "<br>";

                // Object type
                class Car {
                    public $brand = "Toyota";
                }

                $object = new Car();
                echo "Car brand: " . $object->brand;
                echo "</br>";
            */
            ?>

        </p>

        <!--
        <p>
            <?php
            /*
                // Simple PHP code to display a message
                echo "Hello, World! Today is " . date("l, F jS, Y") . ".<br><br>";
            */  
            ?>
        </p>

        <p>
            <?php
            /*
                // Simple PHP code to display a message
                echo "Hello, World! Today is " . date("l, F jS, Y") . ".<br><br>";
            */ 
            ?>
        </p>

        <p>
            <?php
            /*
                // Scalar data types (contain one value)
                $name = "Wonderful Counselor";
                $int = 143999;
                $float = 406.73;
                $bool = false;

                echo "<p>";
                echo $name . " is here for you and " . $int . " others<br>";
                echo "Boolean value: " . ($bool ? 'true' : 'false') . "<br>";

                // Array type
                $names = ["Adam", "Cain", "Seth", "Abel", "Eve"];
                echo "Names: " . implode(", ", $names) . "<br>";

                // Object type
                class Car {
                    public $brand = "Toyota";
                }

                $object = new Car();
                echo "Car brand: " . $object->brand;
                echo "</p>";
            */
            ?>
        </p>

        <p>
            <?php
            /*
                //Superglobals in PHP
                echo $_SERVER["DOCUMENT_ROOT"];
                echo "<br>";
                echo $_SERVER["PHP_SELF"];
                echo "<br>";
                echo $_SERVER["SERVER_NAME"];
                echo "<br>";
                echo $_SERVER["REQUEST_METHOD"];
                echo "<br>";
                //Grab data from the url
                echo $_GET["name"];
                echo "<br>";
                echo $_GET["role"];
                echo "<br>";
                //echo $_REQUEST["name"];
                echo $_FILES["name"];
                echo "<br>";
                echo $_COOKIE["name"];            
                //echo $_SESSION["username"]="Judas";
                $_SESSION["username"]="Judas";
                echo $_SESSION["username"];
                $_ENV
            */
            ?>
        </p>
        -->

    </main>


    <footer>
        <p>&copy; 2025 My PHP Webpage</p>
    </footer>

</body>
</html>
