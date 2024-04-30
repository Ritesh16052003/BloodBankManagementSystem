<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div id="nav" >
        <div id="nav1">
           <i class="fa-solid fa-heart-pulse" style="font-size: 25px; padding-bottom:19px ;"></i> 
            <h1>Web Based Blood Bank System</h1>

        </div>
       
        <div id="nav2">
           
            <span id="logout"><a href="index.php">Logout</a> <i class="fa-solid fa-right-from-bracket" style="font-size: 15px; padding-left: 3px;"></i></span>
        </div>
    </div>
    <div class="container">
        <div class="container1" >
            <div class="home"  id="about" style=" margin-top: 30px;"><span><i class="fa-solid fa-house-chimney "></i></span><a href="../Fronted/index.php">Home</a></div>
            <div class="donar"  id="about"><span><i class="fa-solid fa-user"></i></span><a>Donar</a></div>
            <div class="patient" id="about"><span><i class="fa-solid fa-user"></i></span><a>Patient</a></div>
            <div class="donations"  id="about"><span><i class="fa-solid fa-hand-holding-dollar"></i></></span><a>Donations</a></div>
            <div class="blood_request"  id="about"><span></span><a>Blood Request</a></div>
            <div class="request_history"  id="about"><span></span><a>Request History</a></div>
            <div class="blood_stock"  id="about"><span><i class="fa-sharp fa-solid fa-hand-holding-droplet"></i></span><a>Blood Stock</a></div>
        </div>
        <div class="container2" style="width: auto;" >
            <div class="div1" id="bgrp">
                <div class="box">
                    <div class="a"><h3>A+</h3><span><i class="fa-sharp fa-solid fa-droplet" style=" font-size: 30px; color: brown; padding-right: 10px;"></i></span></div>
                    <div class="num">0</div>
                </div>
                <div class="box">
                    <div class="a"><h3>B+</h3><span><i class="fa-sharp fa-solid fa-droplet" style=" font-size: 30px; color: brown; padding-right: 10px;"></i></span></div>
                    <div class="num">0</div>
                </div>
                <div class="box">
                    <div class="a"><h3>O+</h3><span><i class="fa-sharp fa-solid fa-droplet" style=" font-size: 30px; color: brown; padding-right: 10px;"></i></span></div>
                    <div class="num">10</div>
                </div>
                <div class="box">
                    <div class="a"><h3>AB+</h3><span><i class="fa-sharp fa-solid fa-droplet" style=" font-size: 30px; color: brown; padding-right: 10px;"></i></span></div>
                    <div class="num">0</div>
                </div>
                
            </div>


            <div class="div2" id="bgrp">
                <div class="box">
                    <div class="a"><h3>A-</h3><span><i class="fa-sharp fa-solid fa-droplet" style=" font-size: 30px; color: brown; padding-right: 10px;"></i></span></div>
                    <div class="num">5</div>
                </div>
                <div class="box">
                    <div class="a"><h3>B-</h3><span><i class="fa-sharp fa-solid fa-droplet" style=" font-size: 30px; color: brown; padding-right: 10px;"></i></span></div>
                    <div class="num">0</div>
                </div>
                <div class="box">
                    <div class="a"><h3>O-</h3><span><i class="fa-sharp fa-solid fa-droplet" style=" font-size: 30px; color: brown; padding-right: 10px;"></i></span></div>
                    <div class="num">20</div>
                </div>
                <div class="box">
                    <div class="a"><h3>AB-</h3><span><i class="fa-sharp fa-solid fa-droplet" style=" font-size: 30px; color: brown; padding-right: 10px;"></i></span></div>
                    <div class="num">0</div>
                </div>
                
            </div>


            <div class="div3" id="bgrp" style=" border-top: 1px solid black;">
                <div class="box">
                    <div class="icon"><span style="color: blue;"><i class="fa-solid fa-users"></i></span></div>
                    <div class="a" style="height: 33%;justify-content: left; padding-left: 10px;"><p style="font-size:15px;">Total Donar</p></div>
                    <div class="num" style="height: 33%;">1</div>
                </div>
                <div class="box">
                    <div class="icon"><span style="color: blue;"><i class="fa-solid fa-regular fa-circle-dashed"></i></span></div>
                    <div class="a" style="height: 33%; justify-content: left; padding-left: 10px;"><p style="font-size:15px;">Total Requests</p></div>
                    <div class="num" style="height: 33%;">4</div>
                </div>
                <div class="box">
                    <div class="icon"><span style="color: blue;"><i class="fa-regular fa-circle-check"></i></span></i></div>
                    <div class="a" style="height: 33%; justify-content: left; padding-left: 10px;"><p style="font-size:15px;">Approved Requests</p></div>
                    <div class="num" style="height: 33%;">2</div>
                </div>
                <div class="box">
                    <div class="icon"><span style="color: blue;"><i class="fa-sharp fa-solid fa-droplet"></i></span></div>
                    <div class="a" style="height: 33%; justify-content: left; padding-left: 10px;"><p style="font-size:15px;">Total Blood Units (in ml)</p></div>
                    <div class="num" style="height: 33%;">35</div>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>