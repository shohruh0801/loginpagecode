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


?>





<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}
a{
text-decoration:none;
}
.container {
  width: 300px;
  margin: 0 auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
  margin-top: 100px;
}

h1 {
  text-align: center;
  margin-bottom: 30px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  box-sizing: border-box;
  margin-bottom: 20px;
}

button[type="submit"] {
  width: 100%;
  padding: 10px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #3e8e41;
}
 image
 {
  width: 18rem;
}
  </style>
  <body>
    <div class="container">
      <h1>Login</h1>
      <form action="./" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" >
        <label for="username">Surname:</label>
        <input type="text" id="surname" name="surname" >
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" >
     
        <br><br><br> 
                <button class="btn" type="submit"><a href="./second.php">Login</a></button>
               
                 
      </form>
     
    </div>
  
  </body>
</html>