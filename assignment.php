<?php
echo "<h1> Task 1</h1>";
/* task 1*/
$name = "ariff";
$age =  "21";
$city = "Pahang";

echo "My name is $name, I am $age years old, and I live in $city.";



/* task 2*/
echo "<h1> Task 2</h1>";
echo "<br>";
$grade = "89";

if ($grade >= 90) {
    echo "Excellent!";
} elseif ($grade >= 80 && $grade <= 89) {
    echo "Good job!";
} elseif ($grade >= 70 && $grade <= 79) {
    echo "Keep it up!";
} else {
    echo "Needs improvement";
}
echo "<br>";

/* task 3*/
echo "<h1> Task 3</h1>";

for ($a = 1; $a <= 10; $a++) {
 echo $a . "<br>";
}
$favoriteFruits = ["jambu", "durian", "mango", "Grapes"];
foreach ($favoriteFruits as $fruit) {
 echo $fruit . "<br>";
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form</title>
</head>
<body>

    <h1> Task 4</h1>
    <form action="/phpday/day13-assignment/assignment.php" method ="POST"> 
        Name: <input type="text" name="name"><br>
        Age: <input type="text" name="age"><br>
        <input type="submit" value="Submit">
    </form>


</body>
</html>
<?php
if ($_SERVER ['REQUEST_METHOD'] == 'POST'){

    $name = $_POST ['name'];
    $age = $_POST ['age'];
    echo "My name is $name, I am $age years old.";
}

echo "<br>";
echo "<h1>Task 5</h1>";

function calculateSum($num1, $num2) {
    return $num1 + $num2;
}

$result = calculateSum(67, 10);
echo "The sum is: $result<br>"

?>





