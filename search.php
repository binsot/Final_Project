<!-- <?php
$blogs = simplexml_load_file("\xampp\htdocs\marinduque\files\blogs.xml'");

if (isset($_GET["q"])) {
  $query = $_GET["q"];

  foreach ($blogs->blog as $blog) {
    $title = (string) $blog->title;
    $content = (string) $blog->content;

    if (strpos(strtolower($title), strtolower($query)) !== false ||
        strpos(strtolower($content), strtolower($query)) !== false) {
      // Display the matching blog post here
      echo "<div class='col-lg-6 col-sm-6 single-blog'>";
      echo "<a href='viewblog.php?id={$blog->id}'><h4>{$title}</h4></a>";
      echo "<p>" . mb_strimwidth($content, 0, 200, ". read more...") . "</p>";
      echo "<p class='post-date'>{$blog->author} - {$blog->date}</p>";
      echo "</div>";
    }
  }
}
?> -->