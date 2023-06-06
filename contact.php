<!DOCTYPE html>
<html lang="en">
<head>
<title>Tourism Website - MARINDUQUE</title>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"style="color: royalblue; font-family: 'Verdana'; font-weight: bold; font-size: 30px;">MARINDUQUE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-size: 15px;">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" style="font-family: 'Verdana';"href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="font-family: 'Verdana';"href="tours.php">Tours</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="font-family: 'Verdana';"href="about.php">About</a>
      </li>
      <li class="nav-item  active">
        <a class="nav-link" style="color: royalblue;font-family: 'Verdana';" href="contact.html">Contact<span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
    
  </div>
</nav>


<section>
    <div>
        <h2 class="text-center" style="margin-top: 50px"> Contact Us </h2>
    </div>

    <div class="w-50 m-auto">
        <form method="post">
            <div class="form-group">
                <label> Name: </label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label> Email: </label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label> Number: </label>
                <input type="number" name="number" class="form-control">
            </div>
            <div class="form-group">
                <label> Any Concern: </label>
                <input type="text" name="concern" class="form-control">
            </div>
            <button type="submit" class="btn btn-success"> Submit </button>
        </form>
    </div>
</section>


        <div>
            <h5 class="text-center" style="margin-bottom: 100px; margin-top: 100px; font-family: Verdana; font-size: 30px;">EXPLORE THE BEAUTY OF MARINDUQUE</h5>
        </div>


    <footer class="bg-dark text-center text-white" style=" left: 0;
  bottom: 0;
  width: 100%;
  background-color: red;
  color: white;
  text-align: center;">


  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    <?php
date_default_timezone_set('Asia/Manila');
?>
        <p>&copy; <?php echo date("Y"); ?> Marinduque Tourism. All rights reserved. |  <?php echo date("l, F j, Y h:i A"); ?></p>
  </div>
  <!-- Copyright -->
</footer>

</body>
</html>
