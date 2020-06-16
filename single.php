<?php
include 'libs/database.php';
include 'libs/config.php';
include 'functions.php';
$db = new database();
 if(isset($_GET['id'])){
     $id = $_GET['id'];
     $query = "SELECT * FROM posts where id = '$id'";

     $post = $db->select($query);
     $row = $post->fetch_array();
 }

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>PHP Blog in OOP</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/blog/">
    <script src="bootstrap.js"></script>
    <!-- Bootstrap core CSS -->

    <link href="bootstrap.css" rel="stylesheet">
    <link href="custom.css" rel="stylesheet">

</head>
<body>
<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">

            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="#">Web Development</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="text-muted" href="#" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                </a>

            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 text-muted" href="index.php">Home</a>

            <a class="p-2 text-muted" href="about.php">About</a>
            <a class="p-2 text-muted" href="contact.php">Contact Us</a>

        </nav>
    </div>

    <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">PHP Tutorials Blog</h1>
            <p class="lead my-3">It's all about PHP Tutorials and hacks in English/Urdu/Hindi.</p>

        </div>
    </div>


</div>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <h3 class="pb-4 mb-4 font-italic border-bottom">
                From the Firehose
            </h3>

                <div class="blog-post">
                    <h2 class="blog-post-title"><?php echo $row['title']; ?></h2>
                    <p class="blog-post-meta"><?php echo formateDate($row['date']); ?> by <a href="#"><?php echo $row['author']; ?></a></p>

                    <p><?php echo $row['content'];?></p>
                </div><!-- /.blog-post -->

            <?php include 'includes/footer.php';  ?>
