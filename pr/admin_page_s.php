<?php
    $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, 'lamoda');
   
         if(! $conn ){
            die('Could not connect: ' . mysqli_error());
         }
          
          if(isset($_GET['delete'])){
             $sql = "DELETE FROM s WHERE ID=".$_GET['delete'];
           $result = mysqli_query($conn,$sql);
         }

         if (isset($_GET['Image'])) {
            $sql = "INSERT INTO s (ID, Image, Name, Price)
          VALUES (NULL, '".$_GET['Image']."','".$_GET['Name']."','".$_GET['Price']."','"."')";
          $result = mysqli_query($conn, $sql);
         }
        $sql = "SELECT * FROM s";
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
     <div class=""><a href="admin_page_s.php?delete='.$row['ID'].'">Delete</a></div>
      </div>
    </div>
        </div>';
    }
        
    mysqli_close($conn);
?>
  <form action="admin_page_s.php" style="margin-right: 50px">
      <h1>Admin Page</h1>
      <table>
            <tr>
                <td>Image(URL): </td>
                <td><input type="text" name="maker">
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="model"></td>
            </tr>
            <tr>
                <td>Price:</td>
                <td><input type="number" name="year"></td>
            </tr>
            <tr>
                <td>Products code:</td>
                <td><input type="number" name="price"></td>
            </tr>
        </table>
        <input type="submit" value="Add new">
    </form>
  </body>

</html>