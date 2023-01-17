
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
  <!-- Meta tags for description and keywords -->
  <meta name="description" content="Nigeria telecommunication chatbot ">
  <meta name="keywords" content="chatbot">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <title>Telecom Chatbot</title>
 <link rel="stylesheet" href="app.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/annyang/2.6.1/annyang.min.js"></script>
 <script type="text/javascript" src="https://unpkg.com/jso/dist/jso.js"></script>
 <script type="text/javascript">
 document.addEventListener("DOMContentLoaded", function(){
 document.getElementById("loading-spinner").style.display = "block";
 });
 </script>
</head>
<body>



<?php
if(isset($_POST['submit'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];
   $message = $_POST['chat'];
   

   $conn = new mysqli("hostname", "username", "password", "database");
   if($conn->connect_error){
       die("Connection failed: " . $conn->connect_error);
   }
   $sql = "INSERT INTO submissions (name, email, message,chat) VALUES ('$name', '$email', '$message','$chat')";
   if($conn->query($sql) === TRUE){
       echo "Submission successfully submitted.";
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }
   $conn->close();
}
?>


<script src="main.js"></script>
  <script src="Questions andanswers.js"></script>
  <script src="forms.js"></script>
  <script type="text/javascript">
</body>
</html>
