<?php
   // Establish a database connection
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "test";

   $conn = new mysqli($servername, $username, $password, $dbname);

  

   /* Process the form data
   if ($_SERVER["REQUEST_METHOD"] == "POST") 
   {
*/


       $fname = $_POST["fname"];
       $lname = $_POST["lname"];

       
       $email = $_POST["email"];
       $number = $_POST["number"];

       $address = $_POST["address"];

       $sql = "INSERT INTO `myform` (`fname`, `lname`,`email`, `number`,`address`) VALUES ('$fname','$lname','$email','$number','$address')";

       if ($conn->query($sql) === TRUE) {
           echo "Data successfully inserted.";
       } else {
           echo "Error: " . $sql . "<br>" . $conn->error;
       }
   

   /*Close the database connection
   $conn->close();
   */
   ?>
