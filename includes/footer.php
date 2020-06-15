<?php


$query = "SELECT * FROM categories";

$cats = $db->select($query);
?>
<nav class="blog-pagination">
    <a class="btn btn-outline-primary" href="#">Older</a>
    <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
</nav>

</div><!-- /.blog-main -->

<aside class="col-md-4 blog-sidebar">
    <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
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
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
        </ol>
    </div>
</aside><!-- /.blog-sidebar -->

</div><!-- /.row -->

</main><!-- /.container -->

<footer class="blog-footer">
    <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@Ahmed Ali Qureshi</a>.</p>
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>
</body>
</html>
