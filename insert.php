7r<?php
  //Database Connection
  $conn = mysqli_connect("localhost","root","","viscnity");
  if(!$conn){
     die('Connection Failed!');
  }
  //Getting information from front end
  if(isset($_POST['names']) && isset($_POST['username']) && isset($_POST['password'])){
      $names    = $_POST['names'];
      $username = $_POST['username'];
      $password = $_POST['password'];
  //Query to insert customers
     $sql = "INSERT INTO customers(customer_name,username,password) VALUES('$names','$username','$password')";
     $result = mysqli_query($conn,$sql);
     if($result){
        ?>
           <script>alert('Customer Registered Successfully!');</script>
        <?php
           header('Location: register.php');
     }

  }




?>