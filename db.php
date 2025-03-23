<?php
   
     $username = $_POST["username"];
     $email = $_POST["email"];
     $message = $_POST["message"];

     $connection = new mysqli('localhost', 'root', '', 'users');
     if($connection -> connect_error){
          die("connection failed : " .$connection->connect_error);
     }else{
          $stmt = $connection -> prepare("insert into info (username, email, message) values(?, ?, ?)");
          $stmt ->bind_param("sss", $username, $email, $message);
          $stmt ->execute();
          // echo " Registraion Successful...";
          header("location: support.html");
          echo "
          <script>
          alert('Check your email to confirm you have signed up.');
          </script>
           ";
          $stmt -> close();
          $connection -> close();
     }





?>
