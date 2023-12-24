<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>age</title>
</head>
<body>
<?php



$age = 30; 

if ($age >= 25 && $age <= 65) {
    echo "You are eligible to drive.";
} elseif ($age < 25) {
    echo "Sorry, you are too young to drive.";
} else {
    echo "Sorry, you are above the eligible age to drive.";
}

?>





</body>
</html>