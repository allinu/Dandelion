<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>?</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/custom.css">
    <link rel="stylesheet" href="./css/animate.css">
</head>
<body>

<div id="out">
    <div id="left">
        <p class="text-light display-4">
            <?php

            $id = $_GET["id"];

            $mysql = mysqli_connect("127.0.0.1","admin","root","ctf");
            if (mysqli_connect_errno()){
                exit(mysqli_connect_error());
            }
            else{
                $result = mysqli_query($mysql, "select * from test where id= ".$id);
                while($data = mysqli_fetch_assoc($result)){
                    echo ($data["id"]." ".$data["name"]." ".$data["info"]);
                    echo "<br>";
                }
                mysqli_close($mysql);
            }
            ?>
        </p>
    </div>
    <div id="right">
        <img src="./images/nv.png" alt="nv" width="270" height="570">
    </div>
</div>


</body>
</html>