<?php

$dayOfWeek = "Monday";

switch ($dayOfWeek) {
    case "Monday":
    case "Tuesday":
    case "Wednesday":
    case "Thursday":
    case "Friday":
        echo "It's a weekday";
        break;
    case "Saturday":
    case "Sunday":
        echo "It's the weekend";
        break;
    default:
        echo "Invalid ";
}
?>
