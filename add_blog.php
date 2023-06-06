<?php

session_start();

//check if the button is clicked
if(isset($_REQUEST['publish'])){

	//open xml file
	$blogs = simplexml_load_file('files/blogs.xml');

	// Move the uploaded image to a directory on your server
    $uploadDirectory = __DIR__ . "/images/";
    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory, 0755, true);
    }
    $image = $_FILES["image"];
    $filename = uniqid() . "." . pathinfo($image["name"], PATHINFO_EXTENSION);
    $destination = $uploadDirectory . $filename;
    move_uploaded_file($image["tmp_name"], $destination);

    $xmlFile = 'files/blogs.xml';

    // Load the existing XML file or create a new one
    if (file_exists($xmlFile)) {
        $tours = simplexml_load_file($xmlFile);
    } else {
        $tours = new SimpleXMLElement('<tours></tours>');
	}
	//prepare all the tags and data
	$blog = $blogs->addChild('blog');

	$blog->addChild('id', $_REQUEST['blog_id']);
	$blog->addChild('title', $_REQUEST['blog_title']);
	$blog->addChild('author', $_REQUEST['blog_author']);
	$blog->addChild('date', $_REQUEST['blog_date']);
	$blog->addChild('content', $_REQUEST['blog_content']);




	//save the data
	$dom = new DomDocument();
	$dom->preserveWhiteSpace = false;
	$dom->formatOutput = true;
	$dom->loadXML($blogs->asXML());
	$dom->save('files/blogs.xml');

	//send a message to index
	$_SESSION['message'] = "Blog Successfully Posted";
	header("location: index.php");

} else {

	$_SESSION['message'] = "Fill up the form properly";
	header("location:index.php");
}

?>