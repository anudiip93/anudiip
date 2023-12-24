

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Day 14 Assignment PHP</title>

    <style>
     body {
      
      background-color: #d17c7c;
      margin: 0;
      padding: 0;
    }

    center {
      margin-top: 50px;
    }

    h2 {
      color: #333;
    }

    form {
      width: 50%;
      margin: auto;
      background-color: bisque;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type="submit"] {
      background-color: #4caf50;
      color: #fff;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: greenyellow;
    }
  </style>
  </head>
  <body>

  
    <h1> STUDENT DATA FORM </h1>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <?php



if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $firstname = $_POST ['firstname'];
    $lastname = $_POST ['lastname'];
    $email = $_POST ['email'];
    $address = $_POST ['address'];
    $password = $_POST ['password'];

    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Congratulation, student!</strong> Your data has been successfully submitted.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';

};

// connecting to the db

$servername = "localhost";
$username = "root";
$password = "";
$database = "student_data";

$conn = mysqli_connect($servername, $username, $password);

// die if the connection is not successful

if (!$conn){

    die("sorry we failed to connect ". mysqli_connect_error());

}else{

    echo "Connection to db is successful";
}
echo "<br>";
echo "<br>";

//sql query to be executed

$sql = "INSERT INTO `student_data`.`users` (`first_name`, `last_name`, `email`, `address`, `password`) VALUES ('$firstname', '$lastname', '$email', '$address','$password')";

$result = mysqli_query($conn,$sql);

?>
  
    <div class="container mt-5">
    <form action="/phpday/day14assignmentphp.php" method = "POST">

<!-- form for first name -->
  <div class="form-group">
    <label for="text">Enter your first name</label>
    <input type="text" class="form-control" name="firstname" id="firstname" aria-describedby="emailHelp" placeholder="Enter your first name here">
  </div>

  <!-- form for last name -->
  <div class="form-group">
    <label for="text">Enter your last name</label>
    <input type="text" class="form-control" name="lastname" id="lastname" aria-describedby="emailHelp" placeholder="Enter your last name here">
  </div>

    <!-- form for email -->
  <div class="form-group">
    <label for="text">Enter your email</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter your email here">
  </div>

    <!-- form for address -->
    <div class="form-group">
    <label for="text">Enter your address</label>
    <input type="text" class="form-control" name="address" id="address" aria-describedby="emailHelp" placeholder="Enter your address here">
  </div>

    <!-- form for password -->
  <div class="form-group">
    <label for="password">Enter your password</label>
    <input type="password" class="form-control" name = "password" id="password" placeholder="Enter your password here">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>