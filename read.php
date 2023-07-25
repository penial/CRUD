<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="mt-5">
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Date_of_Joining</th>
                            <th scope="col">Address</th>
                            <th scope="col">Department</th>
                            <th scope="col">Number</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Blood_Group</th>
                            <th scope="col">OPERATION</th>  
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "database.php";
                        $sql="select * from Staff";
                        $result= $conn -> query($sql);
                        if(!$result){
                            die("Invalid query");
                        }
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>".$row["id"]."</td>";
                            echo "<td>".$row["name"]."</td>";
                            echo "<td>".$row["date_of_joining"]."</td>";
                            echo "<td>".$row["address"]."</td>";
                            echo "<td>".$row["department"]."</td>";
                            echo "<td>".$row["phone_number"]."</td>";
                            echo "<td>".$row["gender"]."</td>";
                            echo "<td>".$row["blood_group"]."</td>";
                            echo "<td><a class='btn btn-warning' href='update.php?id=".$row["id"]."'>UPDATE</a></td>";
                            echo "<td><a class='btn btn-danger' href='delete.php?id=".$row["id"]." '>DELETE</a></td>";
                            echo "</tr>";
                        }

                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>
