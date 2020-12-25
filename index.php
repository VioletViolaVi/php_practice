<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
 
    <form method="GET">
        <input type="text" name="inputColour">
        <button>SUBMIT</button>
    </form>

    <?php
    echo "Hello World. First php to the browser yey!" . "<br>";

    $a = 10;
    echo $a . "<br>";

    print "Vivian" . "<br>";

    print 12 . "<br>";

    echo 10 * 10 . "<br>";

    $name = "This is a string in php that has been called \$name.";
    echo $name . "<br>";

    $colour = $_GET["inputColour"];
    /* $colour = "red";
       $colour = "yellow";*/
    // $colour = "pink";
    // $colour = "green";
    // $colour = "purple"; 
    echo "I like the colour " . $colour . "." . "<br>";
    
    
    echo strlen("Hi again! Vivian!") . "<br>";

    echo str_word_count("Hi again! Vivian!") . "<br>";

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
</body>

</html>