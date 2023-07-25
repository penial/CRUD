<?php
include 'database.php';
if(isset($_POST['submit'])){
  $username=$_POST['Name'];
  $Date=$_POST['date_define'];
  $address=$_POST['address'];
  $Department=$_POST['department'];
  $number=$_POST['Number'];
  $Gender=$_POST['gender'];
  $Blood=$_POST['Blood'];
  $sql="INSERT INTO Staff(name,date_of_joining,address,department,phone_number,gender,blood_group)
  Values('$username','$Date','$address','$Department','$number','$Gender','$Blood')";
  if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully";
  }
  else {
    echo "Error: " . mysqli_error($conn);
}
}

// Close connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>CRUD OPERATION</title>
</head>
<body>
    <div class="container">
      <div class=bg-secondary>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="bg-warning">
          <div class="mt-5">
            <div class="form-group">
                <label for="name">Name:</label><br>
                <input type="text" name="Name" placeholder="Enter your name" autocomplete="ON" class="form-control">
            </div>
            <div class="mt-2">
              <label for="date_define">Date of Joining</label><br>
              <input type="date" name="date_define" class="form-control ml-2">
            </div>
            <div class="mt-2">
              <label for="address">Address</label><br>
              <textarea name="address" rows="4" cols="50"></textarea>
            </div>
            <div class="mt-2">
              <label for="department">Department</label><br>
              <select class="form-select" name="department">
                <option value="pick_one">Select Department</option>
                <option value="IT">IT</option>
                <option value="CSE">CSE</option>
                <option value="MECH">MECH</option>
                <option value="ECE">ECE</option>
                <option value="AUtp">Automobile</option>
              </select>
            </div>
            <div class="mt-2">
              <label for="number">Number</label><br>
              <input type="number" name="Number" class="form-control">
            </div>
            <div class="mt-3">
              <input type="radio" name="gender" value="Male" required>
              <label for="gender">Male</label>
              <input type="radio" name=gender value="Female">
              <label for="gender">Female</label>
            </div>
            <div class="mt-4">
              <label for="Blood">Blood</label>
              <select class="form-select" name="Blood">
                <option value="select value">Select any one of the option</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
              </select>
            </div>
            <div class="mt-5">
              <input type="submit" value="SUBMIT" name="submit" class="btn btn-success" >
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>