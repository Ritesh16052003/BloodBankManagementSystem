<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="patient.css">
</head>
<body>
    <div id="nav" >
        <div id="nav1">
           <i class="fa-solid fa-heart-pulse" style="font-size: 25px; padding-bottom:15px ;"></i> 
            <h1>Web Based Blood Bank System</h1>

        </div>
       
        <div id="nav2">
            <span id="1" ><a href="index.php" >Home</a></span>
            <span id="2"><a href="#patient" >Patient</a></span> 
            <span id="4"><a href="donar.php">Donar</a></span>
            <span id="4"><a href="admin.php">Admin</a></span>
        </div>
    </div>
    <div class="container" >

        <div class="form">

            <div class="box1" ><h1 style="padding-top: 30px;">BLOOD REQUEST</h1></div>
            
            <div class="box2" style="margin: 60px;">
                <form action="patient.php" method="post">

                    <label for="hos_name">Hospital name:</label>
                    <input type="text" id="hos_name" name="hos_name" required><br><br>
                    
                    <label for="fname">First name:</label>
                    <input type="text" id="fname" name="fname" required><br><br>
                    <label for="lname">Last name:</label>
                    <input type="text" id="lname" name="lname" required ><br><br>

                   

                    <label for="b_group">Blood Group:</label>
                    <select  id="b_group" name="b_group" required>
                        <option value="A+">A+</option>
                        <option value="B+">B+</option>
                        <option value="O+">O+</option>
                        <option value="AB+">AB+</option>
                        <option value="A-">A-</option>
                        <option value="B-">B-</option>
                        <option value="O-">O-</option>
                        <option value="AB-">AB-</option>
                    </select><br><br>

                    <label for="b_qnt">Unit(in ml):</label>
                    <input type="text" id="b_qnt" name="b_qnt" required><br><br>

                    <label for="age">Age:</label>
                    <input type="number" min="1" max="99" id="age" name="age" required><br><br>


                    <label for="gender">Gender:</label>
                    <select  id="gender" name="gender" required>
                        <option  value="m">Male</option>
                        <option value="f">Female</option>
                        <option  value="o">Other</option>
                    </select><br><br>

                    <label for="hos_phoneNo">Hosp. Phone no.:</label>
                    <input type="tel"   id="hos_phoneNo" name="hos_phoneNo" required><br><br><br>

                    <button type="submit" name="submit" >REQUEST</button>
                    
                </form>
            </div>
            
                        
        
        </div>
        
    </div>
   
    
</body>
</html>

<?php
 // Database Connection
 $server = "localhost";
 $username = "root";
 $password = "";
 $dbname = "blood_bank";

 // Create a database connection
 $conn =  mysqli_connect($server, $username, $password, $dbname);

 //check connection

 if($conn->connect_error){
 die("connection to this database failed due to" . $conn->connect_error);
 }

 if(isset($_POST['submit'])){
    $hos_name = $_POST['hos_name'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $b_group = $_POST['b_group'];
    $b_qnt = $_POST['b_qnt'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $hos_phoneNo = $_POST['hos_phoneNo'];
            

    // SQL query to insert data into the table
    $sql = "INSERT INTO blood_request (hos_name,fname, lname, b_group, b_qnt, age, gender, hos_phoneNo) VALUES ('{$hos_name}', '{$fname} ', '{$lname}', ' {$b_group}','{$b_qnt}', '{$age}', '{$gender}', '{$hos_phoneNo}')";


    if ($conn->query($sql) === TRUE) {
        echo "<script>
                    let btn = document.querySelector('button');
                    btn.addEventListener('click', function() {
                        alert(' You have successfully registered');
                    });
                </script>";
        
        
    
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

 }

 $conn->close();
  
?>