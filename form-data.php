<?php 

$email = $_GET['emailForm'];
$password = $_GET['passwordForm'];

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
  <ul>
    <li>
      <?php echo $email ?>
    </li>
    <li>
      <?php echo $password ?>
    </li>
  </ul>



</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

  
</body>
</html>