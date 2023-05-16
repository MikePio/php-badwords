<?php 
//!ESEMPIO CON GET
//* METODO GET CHE RICHIAMA IL name DELL'INPUT
// $email = $_GET['emailForm'];
// $password = $_GET['passwordForm'];
//!ESEMPIO CON POST
//* METODO GET CHE RICHIAMA IL name DELL'INPUT
$email = $_POST['emailForm'];
$password = $_POST['passwordForm'];

?>


<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">  
  <title>Form results</title>
</head>
<body class="bg-dark text-white">

<div class="container p-5">
  
  <h2>La tua mail è <?php echo $email ?></h2>
  <h5>La tua mail è formata da <?php echo strlen($email)?> caratteri</h5>
  <hr>
  <h2>La tua password è <?php echo $password ?></h2>
  <h5>La tua password è formata da <?php echo strlen($password)?> caratteri</h5>
  


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

  
</body>
</html>