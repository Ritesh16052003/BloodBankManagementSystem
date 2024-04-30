<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="donar.css">
</head>
<body>
    <div id="nav" >
        <div id="nav1">
           <i class="fa-solid fa-heart-pulse" style="font-size: 25px; padding-bottom:15px ;"></i> 
            <h1>Web Based Blood Bank System</h1>

        </div>
       
        <div id="nav2">
            <span id="1" ><a href="index.php" >Home</a></span>
            <span id="2"><a href="patient.php" >Patient</a></span> 
            <span id="4"><a href="#Donar">Donar</a></span>
            <span id="4"><a href="admin.php">Admin</a></span>
        </div>
    </div>
    <div class="container" >

        <div class="form">

            <div class="box1" ><h1 style="padding-top: 30px;">BLOOD DONAR</h1></div>
            
            <div class="box2" style="margin: 60px;">
                <form action="donar.php" method="post">
                    <label for="fname">First name:</label>
                    <input type="text" id="fname" name="fname" required ><br><br>
                    <label for="lname">Last name:</label>
                    <input type="text" id="lname" name="lname" required><br><br>

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

                    <label for="age">Age:</label>
                    <input type="number" min="1" max="99" id="age" name="age" required><br><br>
                    <label for="gender">Gender:</label>
                    <input type="radio" id="Male" name="gender" value="m" required>
                    <label for="Male">Male</label>
                    <input type="radio" id="female" name="gender" value="f" required>
                    <label for="female">Female</label>
                    <input type="radio" id="other" name="gender" value="o" required>
                    <label for="other">Other</label><br><br>

                    <label for="number">Phone no.:</label>
                    <input type="tel"   id="number" name="number" required><br><br><br>

                    <button type="submit" name="submit">Submit</button>
                    
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
        
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $b_group = $_POST['b_group'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $number = $_POST['number'];
                

        // SQL query to insert data into the table
        $sql = "INSERT INTO blood_donar (fname, lname, b_group, age, gender, number) VALUES ( '{$fname} ', '{$lname}', ' {$b_group}', '{$age}', '{$gender}', '{$number}')";


        if ($conn->query($sql) === TRUE) {
            echo "<script>
                    let btn = document.querySelector('button');
                    btn.addEventListener('click', function() {
                        alert('Thank you! You have successfully registered');
                    });
                </script>";
        
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }

    $conn->close();
 
?>

