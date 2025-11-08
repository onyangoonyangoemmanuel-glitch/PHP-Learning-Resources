<?php
//type declaration
declare(strict_types=1);
//impose data types on functions
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <title>My PHP Webpage</title>
</head>

<body>
    <header>
        <h1>Welcome to My PHP Webpage</h1>
    </header>

    <main>
        <?php
        /*
        //class scope
        class MyClass
        {
            public $classVar = "Hello, World!";

            public function myMethod()
            {
                echo $this->classVar;
            }
        }

        $obj = new MyClass();
        echo $obj->classVar;   // ✅ Works
        $obj->myMethod();      // ✅ Outputs: Hello, World!

        class MyClass
        {
            //Define a class variable
            public $classVar = "Hello, World!";

            //Define a class method
            public function myMethod()
            {
                //Use the class variable
                echo $this->classVar;
            }
        }

        echo MyClass::$classVar;
        */

        //function scope
            function myFunc()
            {
                //declare a static variable
                static $staticVar = 0;

                //Increment a static variable
                $staticVar++;

                //Use the static variable
                return $staticVar;
            }

            echo myFunc();
            echo "<br>";

            echo myFunc();
            echo "<br>"; 

            echo myFunc();
            echo "<br>"; 


            function myFunct()
            {
                //declare a static variable
                $staticVar = 0;

                //Increment a static variable
                $staticVar++;

                //Use the static variable
                return $staticVar;
            }

            echo myFunct();
            echo "<br>";

            echo myFunct();
            echo "<br>";            

            $test = "Johnnie Tester"; 
            function myFunction5()
            {
                //Define a local variable
                $localVar = "Hello, World!";

                //Use the local variable
                return $GLOBALS["test"];
            }

            echo myFunction5();
            echo "<br>";

            $test = "Johnnie Test"; 
            function myFunction4()
            {
                global $test;
                //Define a local variable
                $localVar = "Hello, World!";

                //Use the local variable
                return $test;
            }

            echo myFunction4();
            echo "<br>";

            //Passing a global variable within the scope of a function
            $test = "Johnnie"; 
            function myFunction3($test)
            {
                //Define a local variable
                $localVar = "Hello, World!";

                //Use the local variable
                return $test;
            }

            echo myFunction3($test );
            echo "<br>";

            function myFunction2()
            {
                //Define a local variable
                $localVar = "Hello, World!";

                //Use the local variable
                return $localVar;
            }

            echo $localVar;
            echo "<br>";

            function myFunction()
            {
                //Define a local variable
                $localVar = "Hello, World!";

                //Use the local variable
                return $localVar;
            }

            echo myFunction();
            echo "<br>";

            //Global scope var, outside function
            $test = "John";            
            echo $test;
        ?>

        <?php
            /*
            //use a global variable within a function's scope
            $test = "John";
            function calculator(int $num01, int $num02)
            {
                global  $test;
               $result = $num01 + $num02;
               return $result;
            }

            $test = calculator(2,5);
            echo $test;
            echo "<br>";

            //specified data type
            function sayHello5(string $name="Jane")
            {
                return "Hello " .$name . "!";
            }

            $test = sayHello5("specifiedJohn");
            echo $test;
            echo "<br>";

            //with default value
            function sayHello4($name="Jane")
            {
                return "Hello " .$name . "!";
            }

            $test = sayHello4();
            echo $test;
            echo "<br>";

            //overriden default value
            $test = sayHello4("Johnnie");
            echo $test;
            echo "<br>";

            function sayHello3($name)
            {
                return "Hello " .$name . "!";
            }

            $test = sayHello3("John");
            echo $test;
            echo "<br>";

            function sayHello2()
            {
                return "Hello World 2!";
            }

            $test = sayHello2();
            echo $test;
            echo "<br>";

            function sayHello()
            {
                echo "Hello World!";
            }

            sayHello();
            echo "<br>";

            echo strlen("John Doe");
            */
        ?>

        <?php
        /*
            $string = "Hello World";
            echo $string;
            echo "<br>";

            echo strtolower($string);
            echo "<br>";

            echo strtoupper($string);
            echo "<br>";

            echo substr($string, 2);
            echo "<br>";

            echo substr($string, 2, 7);
            echo "<br>";

            echo substr($string, 2, -1);
            echo "<br>";

            echo strpos($string, "d");
            echo "<br>";

            echo str_replace("World", "John Doe", $string);
            echo "<br>";

            $number = -5.5;

            echo abs($number);
            echo "<br>";

            echo round($number);
            echo "<br>";

            echo pow(2, 3);
            echo "<br>";

            echo sqrt(16);
            echo "<br>";

            echo rand(1, 600);
            echo "<br>";

            $array = ["apple", "banana", "orange"];

            $array1 = ["kiwi"];
            echo count($array); 
            echo "<br>";

            array_push($array, "kiwi");
            print_r($array);
            echo "<br>";

            array_pop($array);
            print_r($array);
            echo "<br>";

            print_r(array_reverse($array));
            echo "<br>";

            print_r(array_merge($array, $array1));
            echo "<br>";

            echo date("Y-m-d H:i:s");
            echo "<br>";

            //unix timestamp
            echo time();
            echo "<br>";

            $date = "2009-06-06 12:00:00";
            echo strtotime($date);
            echo "<br>";
            */
        ?>

        <?php
        /*
        //Associative Array
        $tasks = [
            "Laundry" => "Daniel",
            "Trash" =>"Frida",
            "Vacuum" =>"Basse",
            "Dishes" =>"Bella",
        ];

        $tasks["dusting"] = "Tara";
        print_r($tasks);
        echo "<br>";

        echo count($tasks);
        echo "<br>";

        echo $tasks["Laundry"];
        echo "<br>";

        print_r($tasks);
        echo "<br>";

        sort($tasks);
        print_r($tasks);
        echo "<br>";

        $fruits = [
            "apple",//0
            "banana",//1
            "cherry",//2
        ];

        #$fruits = array("apple", "banana", "cherry");
        #$fruits = ["apple", "banana", "cherry"];
        #$fruit01 = "apple";
        #$fruit02 = "pear";

        //echo $fruits;
        //echo "<br>";

        echo $fruits[01];
        echo "<br>";

        $fruits[] = "orange";
        echo $fruits[03];
        echo "<br>";

        $fruits[1] = "orange";
        echo $fruits[01];
        echo "<br>";

        unset($fruits[1]);
        echo $fruits[1]; 
        echo "<br>";
        
        array_splice($fruits, 0, 1);
        echo $fruits[0]; 
        echo "<br>";

        array_push($fruits, "Mango");
        print_r($fruits);
        echo "<br>";

        $food = [
            array("apple", "mango"),
            "banana",
            "cherry"
        ];

        echo $food[0][0];
        echo "<br>";

        $food = [
            "fruits" => array("apple", "banana", "cherry"),
            "meat" => array("chicken", "fish"),
            "vegetables" => array("cucumber", "carrot"),
        ];

        echo $food["vegetables"][0];
        */
        ?>

        <!--
        <p>This is the main content of the page.</p>

        <form action="<?php # echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="number" name="num01" placeholder="Number One" required>
            <select name="operator">
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>
            <input type="number" name="num02" placeholder="Number two" required>
            <button>Calculate</button>
        </form>
        -->

        <?php
            /*
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                //Grab data from inputs
                //$num01 = $_POST["num01"];
                $num01 = filter_input(INPUT_POST, "num01",
                FILTER_SANITIZE_NUMBER_FLOAT);
                $num02 = filter_input(INPUT_POST, "num02",
                FILTER_SANITIZE_NUMBER_FLOAT);
                $operator = htmlspecialchars($_POST["operator"]);

                //Error Handles
                $errors = false;
                 
                if  (empty($num01) || empty($num02) || empty($operator)){
                    echo "<p class='calc-error'>Fill in all fields!</p>";
                    $errors = true;
                }

                if (!is_numeric($num01) || !is_numeric($num02)){
                    echo "<p class='calc-error'>Input must be a number!</p>";
                    $errors = true;
                }

                //Calculate the numbers if no errors
                if (!$errors){
                    $value = 0;

                    switch($operator){
                        case "add":
                            $value = $num01 + $num02;
                            break;
                        case "subtract":
                            $value = $num01 - $num02;
                            break;
                        case "multiply":
                            $value = $num01*$num02;
                            break;
                        case "divide":
                            $value = $num01/$num02;
                            break;
                        default:
                            echo "<p class='calc-error'>Something went HORRIBLY wrong!</p>";
                                               
                    }
                    echo "<p class='calc-result'> Result = " .
                    $value . "</p>";
                }
            }
            */
        ?>


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
        <p>
            <?php
                //echo "Hello World! Today is " . date("l, F jS, Y") ;
            ?>
        </p>

    </main>


    <footer>
        <p>&copy; 2025 My PHP Webpage</p>
    </footer>

</body>
</html>
