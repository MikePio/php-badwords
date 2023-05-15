<?php 

// $testString = 'test';

?>


<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">  
  <title>PHP Badwords</title>
</head>
<body class="bg-dark text-white">

  <!-- <h1>test</h1> -->
  <!-- <?php echo $testString ?> -->

  <div class="container p-5">

    <form action="form-data.php" method="GET">
      <div class="mb-3">
        <label for="emailForm" class="form-label">Email address</label>
        <input name="emailForm" type="email" class="form-control" id="emailForm" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="passwordForm" class="form-label">Password</label>
        <input name="passwordForm" type="password" class="form-control" id="passwordForm">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

  
</body>
</html>