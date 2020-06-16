<?php


$query = "SELECT * FROM categories";

$cats = $db->select($query);
?>
<nav class="blog-pagination">
    <a class="btn btn-outline-primary" href="index.php">Back</a>
</nav>

</div><!-- /.blog-main -->

<aside class="col-md-4 blog-sidebar">
    <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">Web development is the work involved in developing a website for the Internet (World Wide Web) or an intranet (a private network).</p>
    </div>

    <div class="p-4">
        <h4 class="font-italic">Categories</h4>
        <ol class="list-unstyled mb-0">
            <?php while ($row = $cats->fetch_array()):   ?>
            <li><a href="category.php?id=<?php  echo $row['id']; ?>"><?php  echo $row['title'];?></a></li>
           <?php endwhile;  ?>


        </ol>
    </div>

    <div class="p-4">
        <h4 class="font-italic">Elsewhere</h4>
        <ol class="list-unstyled">
            <li><a href="https://github.com/AhmedQureshi131">GitHub</a></li>
            <li><a href="https://www.linkedin.com/in/ahmed-ali-qureshi-319420135/">LinkedIn</a></li>
        </ol>
    </div>
</aside><!-- /.blog-sidebar -->

</div><!-- /.row -->

</main><!-- /.container -->

<footer class="blog-footer">
    <p>Blog template built <a href="https://getbootstrap.com/"></a> by <a href="https://www.linkedin.com/in/ahmed-ali-qureshi-319420135/">@Ahmed Ali Qureshi</a>.</p>
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>
</body>
</html>
