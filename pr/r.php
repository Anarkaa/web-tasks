<?php
    $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, 'lamoda');
   
         if(! $conn ){
            die('Could not connect: ' . mysqli_error());
         }
            
         if (isset($_GET['Image'])) {
            $sql = "INSERT INTO r (ID, Image, Name, Price)
          VALUES (NULL, '".$_GET['Image']."','".$_GET['Name']."','".$_GET['Price']."','"."')";
          $result = mysqli_query($conn, $sql);
         }
        $sql = "SELECT * FROM r";
        $result = mysqli_query($conn,$sql);
        $length = mysqli_num_rows($result);
?>
<html>

  <head>
    <meta charset="utf-8">
    <head> 
	<style>
    .card{
      width: 355px;
      height: 480px;
      border: 2px solid lightblue;
      margin-left: 5px;
    }
    img{
      width: 350px;
      height: 400px;
      padding: 2px;

    }
    body{
      display: flex;

    }
    .info{
      text-align: center;
    }
	</style>
    </head>
  </head>

  <body>
    <?php
        
        for($i=0; $i<$length;$i++){
            $row = mysqli_fetch_assoc($result);
            print '<div class="card">
            <img src="'.$row['Image'].'"/>
          <div class="info">
        <h3><div class="name">'.$row['Name'].'</div></h3>
    <div class="">
      <div class="price"><div class="price">Price:</div><div>'.$row['Price'].' тг</div></div>
      </div> 
      </div>
    </div>
        </div>';
    }
        
    mysqli_close($conn);
?>
  </body>

</html>