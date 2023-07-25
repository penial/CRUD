<?php
include "database.php";
if(isset($_GET['updateid'])){
    $id=$_GET['updateid'];
    $sql="select * from Staff  where id='$id'";
    $result= $conn -> query($sql);
    if(!$result){
        die("Invalid query");
    }
    $row =mysqli_fetch_array($result);

}


 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
      <div class=bg-secondary>
        <form action="" method="post" class="bg-primary">
          <div class="mt-5">
            <div class="form-group">
                <label for="name">Name:</label><br>
                <input type="text" name="Name" placeholder="Enter your name" autocomplete="ON" class="form-control" value="<?php echo $row['name']?>">
            </div>
            <div class="mt-2">
              <label for="date_define">Date of Joining</label><br>
              <input type="date" name="date_define" class="form-control ml-2" value="<?php echo $row['date_of_joining']?>">
            </div>
            <div class="mt-2">
                <label for="address">Address</label><br>
                <textarea name="address" rows="4" cols="50"><?php echo $row['address']; ?></textarea>
            </div>
            </div>
            <div class="mt-2">
              <label for="department">Department</label><br>
              <select class="form-select" name="department">
                <option value="pick_one">Select Department</option>
                <option value="IT" <?php echo $row['department'] === 'IT' ? 'selected' : ''; ?>>IT</option>
                <option value="CSE" <?php echo $row['department'] === 'CSE' ? 'selected' : ''; ?>>CSE</option>
                <option value="MECH" <?php echo $row['department'] === 'MECH' ? 'selected' : ''; ?>>MECH</option>
                <option value="ECE" <?php echo $row['department'] === 'ECE' ? 'selected' : ''; ?>>ECE</option>
                <option value="AUto" <?php echo $row['department'] === 'AUto' ? 'selected' : ''; ?>>Automobile</option>
            </select>
            </div>
            <div class="mt-2">
              <label for="number">Number</label><br>
              <input type="number" name="Number" class="form-control" value="<?php echo $row['phone_number']?>">
            </div>
            <div class="mt-3">
                <input type="radio" name="gender" value="Male" <?php echo $row['gender'] === 'Male' ? 'checked' : ''; ?>>
                <label for="gender">Male</label>
                <input type="radio" name="gender" value="Female" <?php echo $row['gender'] === 'Female' ? 'checked' : ''; ?>>
                <label for="gender">Female</label>
            </div>
            <div class="mt-4">
              <label for="Blood">Blood</label>
              <select class="form-select" name="Blood">
                <option value="A+" <?php echo $row['blood_group'] === 'A+' ? 'selected' : ''; ?>>A+</option>
                <option value="A-" <?php echo $row['blood_group'] === 'A-' ? 'selected' : ''; ?>>A-</option>
                <option value="B+" <?php echo $row['blood_group'] === 'B+' ? 'selected' : ''; ?>>B+</option>
                <option value="B-" <?php echo $row['blood_group'] === 'B-' ? 'selected' : ''; ?>>B-</option>
                <option value="O+" <?php echo $row['blood_group'] === 'O+' ? 'selected' : ''; ?>>O+</option>
                <option value="O-" <?php echo $row['blood_group'] === 'O-' ? 'selected' : ''; ?>>O-</option>
                <option value="AB+" <?php echo $row['blood_group'] === 'AB+' ? 'selected' : ''; ?>>AB+</option>
                <option value="AB-" <?php echo $row['blood_group'] === 'AB-' ? 'selected' : ''; ?>>AB-</option>
              </select>
            </div>
            <div class="mt-5">
              <input type="submit" value="UPDATE" name="submit" class="btn btn-success" >
              <button type="button"><a href="read.php" class="btn btn-secondary">View page</a></button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <?php
    if(isset($_POST['submit'])){
        $username=$_POST['Name'];
        $Date=$_POST['date_define'];
        $address=$_POST['address'];
        $Department=$_POST['department'];
        $number=$_POST['Number'];
        $Gender=$_POST['gender'];
        $Blood=$_POST['Blood'];
        $sql="UPDATE Staff SET name='$username',date_of_joining='$Date',address='$address',department='$Department',
        phone_number='$number',gender='$Gender',blood_group='$Blood' WHERE id='$id'";
        $result=mysqli_query($conn,$sql);
        echo $result;
        if(($result)){
            echo "UPADTED SUCCESSFULLY";
        }
        else{
            echo "not updated";
        }
    }
    mysqli_close($conn);
    ?>
</body>
</html>
