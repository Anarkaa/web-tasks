<?php
    session_start();
    echo $_SESSION['username']."<br>";
    $conn = mysqli_connect('localhost','root','', 'cars');
    $sql = "SELECT * FROM cars";
    $result = mysqli_query($conn,$sql);
    $size = mysqli_num_rows($result);  
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .card{
            border: 2px solid black;
            height: auto;
            width: auto;
        }
        .cards{
            width: 260px;
            display: block;
        }
        .img_car{
            width: 250px;
            height: 170px;
        }
    </style>
</head>
<body>
    <?php
        if ($size>0){
            echo "<div class = 'cards'>";
            for($i = 0; $size > $i;$i++){
                $row = mysqli_fetch_assoc($result);
                $url = $row['url'];
                $id = $row['id'];
                echo "<div class = 'card'>
                        <img src = '$url' class = 'img_car'>
                    </div>";
            }
            echo "</div>";
        }
        else{
            echo "No cars yet";
        }
    ?>
    
</body>
</html>