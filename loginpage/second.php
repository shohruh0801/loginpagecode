<?php

require "db.php";
$admininform = "SELECT * FROM logi";
$result = $conn->query($admininform);


if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['password'])  ) {
    $name = $_POST['name'];
    
    $surname = $_POST['surname'];

    $password = $_POST['password'];
   
    $upd = mysqli_query($conn, "INSERT INTO logi( name, surname, password) VALUES ('$name','$surname','$password')");
}

$serinform = "SELECT * FROM logi";
$serresults = mysqli_query($conn, $serinform)


?>





<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Table and Buttons</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/1L_dstPt3HV5HzF6Gvk/e3s4Wz6iJgD/+ub2oU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
  <?php
            if (mysqli_num_rows($serresults) > 0) {
                while ($serrow = mysqli_fetch_assoc($serresults)) {
                    ?>
    <div class="container">
   <br>
      <table class="table">
        <thead>
          <tr>
            <th><?=$serrow['name']?></th>
            <th><?=$serrow['surname']?></th>
            <th><?=$serrow['password']?></th>
            
  
          </tr>
        </thead>
       
        </tbody>
      </table>

    </div>
    <?php
                }
            } else {
                echo "0 results";
            }
            ?>
  </body>
</html>

