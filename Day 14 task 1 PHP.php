<!DOCTYPE html>
<html>
<head>
  <title>Input Form</title>
  <script>
    function validateForm() {
      var selectedOption = document.querySelector('input[name="choice"]:checked');
      var userInput = document.getElementById('userInput').value;
      
      if (!selectedOption) {
        alert("Please select an option (Username or Phone Number).");
        return false;
      }

      if (selectedOption.value === "username" && userInput.trim() === "") {
        alert("Please enter a username.");
        return false;
      }

      if (selectedOption.value === "phone" && userInput.trim() === "") {
        alert("Please enter a phone number.");
        return false;
      }

     
      return true;
    }
  </script>
</head>
<body>
  <form action="submit.php" method="post" onsubmit="return validateForm()">
    <input type="radio" id="username" name="choice" value="username">
    <label for="username">Username</label><br>
    <input type="radio" id="phone" name="choice" value="phone">
    <label for="phone">Phone Number</label><br><br>

    <input type="text" id="userInput" name="userInput">
    <input type="submit" value="Submit">

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $choice = $_POST["choice"];
    $userInput = $_POST["userInput"];

    if ($choice === "username") {
        if (empty($userInput)) {
            echo "<script>alert('Error: Please enter a username.');</script>";
        } else {
           
            echo "<script>alert('Success: Username submitted - $userInput');</script>";
        }
    } elseif ($choice === "phone") {
        if (empty($userInput)) {
            echo "<script>alert('Error: Please enter a phone number.');</script>";
        } else {
           
            echo "<script>alert('Success: Phone number submitted - $userInput');</script>";
        }
    } else {
        echo "<script>alert('Error: Invalid choice.');</script>";
    }
}
?>

  </form>
</body>
</html>
