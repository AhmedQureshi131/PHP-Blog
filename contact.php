<?php
session_start();
if(isset($_POST['submit'])){
    $name= mysqli_real_escape_string($db->link, $_POST['name']);
    $email= mysqli_real_escape_string($db->link, $_POST['email']);
    $phone= mysqli_real_escape_string($db->link, $_POST['contact']);
    $content= mysqli_real_escape_string($db->link, $_POST['content']);


    if($name=='' || $email=='' || $phone=='' || $content==''){
        ?>
        <script>alert("Your Response is Successfully Received")</script>

        <?php
    }else{
        ?>
       <script>alert("Your Response is Successfully Received")</script>

<?php
    }
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

            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 text-muted" href="index.php">Home</a>

            <a class="p-2 text-muted" href="about.php">About</a>
            <a class="p-2 text-muted" href="contact.php">Contact Us</a>
            <?php  if(isset($_SESSION['email'])):?>
                <a class="p-2 text-muted" href="admin/index.php">Go to Admin Panel </a>
            <?php endif;?>
        </nav>
    </div>

    <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">Contact Us</h1>

        </div>
    </div>


</div>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-12 blog-main">
            <form action="" method="post">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Your Name:</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" placeholder="Enter Your Full Name" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Enter Your Email Address" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Phone Number:</label>
                    <div class="col-sm-10">
                        <input type="text" name="contact" class="form-control" placeholder="Enter Your Phone Number" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Message:</label>
                    <div class="col-sm-10">
                        <textarea name="content" class="form-control" row="3" placeholder="Enter Your Message">  </textarea>
                    </div>
                </div>







                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        <a href="index.php" class="btn btn-success">Cancel</a>

                    </div>
                </div>
            </form>
