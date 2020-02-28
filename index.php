<?php include "includes/header.php"; ?>

<?php include "includes/nav.php"; ?>

<?php include "includes/db.php"; ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                   CMS
                    <small>Blog</small>
                </h1>

                <!-- First Blog Post -->

                    <?php
                    
                        $query = "SELECT * FROM posts";

                        $select_data_from_posts = mysqli_query($connection, $query);

                        while($row = mysqli_fetch_assoc( $select_data_from_posts)){
                            $posts_title = $row['posts_title'];
                            $posts_author = $row['posts_author'];
                            $posts_date = $row['posts_date'];
                            $posts_image = $row['posts_image'];
                            $posts_content = $row['posts_content'];


                            ?>
                                            
                                <h2>
                                    <a href="#"><?php echo "{$posts_title}"; ?></a>
                                </h2>
                                <p class="lead">
                                    by <a href="index.php"><?php echo "{$posts_author}"; ?></a>
                                </p>
                                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo "{$posts_date}"; ?> at 10:00 PM</p>
                                <hr>
                                <img class="img-responsive" src="images/<?php echo "{$posts_image}"; ?>" alt="">
                                <hr>
                                <p><?php echo "{$posts_content}"; ?></p>
                                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                                <hr>

              


                      <?php  }?>



                    
                    



            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php"; ?>
        </div>
        <!-- /.row -->

        <hr>

      <?php include "includes/footer.php"; ?>