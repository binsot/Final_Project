<!DOCTYPE html>
<html>
<head>
<title>Tourism Website - MARINDUQUE</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
      <li class="nav-item active">
        <a class="nav-link" style="color: royalblue;font-family: 'Verdana';" href="tours.php">Tours<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="font-family: 'Verdana';"href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="font-family: 'Verdana';"href="contact.php">Contact</a>
      </li>
      
    </ul>
    <section id="tours">
    <form class="form-inline my-2 my-lg-0" method="GET">
      <input class="form-control mr-sm-2" type="search" placeholder="Search..." aria-label="Search..." type="text" id="search" name="search" >
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div style="text-align: center; margin-top: 70px; font-family: 'Arial Black';;">
  <h1> TOURIST SPOTS </h1>
</div>

<section class="tours" style="text-align: center; margin-top: 70px; margin-bottom: 100px; font-family: Gilroy; ">
      <?php

if (isset($_GET['search'])) {
$search = $_GET['search'];
$xml = simplexml_load_file('\xampp\htdocs\marinduque\files\blogs.xml');
$found = false;
foreach ($xml->blog as $blog) {
if (stripos($blog->title, $search) !== false) {
    echo '<div class="blog">';
    echo '<h1>' . $blog->title . '</h1>';
    echo '<h6><span style="font-size: 20px;">' . $blog->content . '</h6></span>';
    echo '</div>';
    $found = true;
}
}
if (!$found) {
echo '<p> No Tourist Spot found.</p>';
}
// Display the search metadata
echo '<p> Showing results for search: ' . $search . '</p>';
} else {
$xml = simplexml_load_file('\xampp\htdocs\marinduque\files\blogs.xml');
foreach ($xml->blog as $blog) {
echo '<div class="blog">';
echo '<h1>' . $blog->title . '</h1>';
echo '<h6><span style="font-size: 20px;">' . $blog->content . '</h6></span>';
echo '</div>';
}
}

?>

</section>

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

</section>
	</main>
</body>
</html>
