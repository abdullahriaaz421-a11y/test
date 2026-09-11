<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String/concatenation operators</title>
</head>
<body>
    <?php
        $age = 27;
        echo "My age is :: $age </br>"; // this method works with double quotes only
        echo 'your age is $age </br>'; // this method will not work with single quote 
        echo 'my age is :: ' .$age. '</br>';

        $name = "Abdullah";
        $name1 = " Riaz";
        $name .= $name1;
        echo $name;

    ?>
</body>
</html>