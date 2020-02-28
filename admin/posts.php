<?php include "includes/admin_header.php"; ?>

<?php header("Location: "); ?>
<div id="wrapper">

    <!-- Navigation -->
    <?php include "includes/admin_nav.php"; ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                <h1 class="page-header">
                            Welcome to Posts
                            <small>Author</small>
                        </h1>

                        <?php

                        if(isset($_GET['source'])){

                        $source = $_GET['source'];
                        }else{
                            $source = "";
                        }
                        
                        switch($source){
                        case "add_posts";
                        include "includes/add_posts.php";
                        break;
                        case "31";
                        echo "NICE";
                        break;
                        case "30";
                        echo "NICE";
                        break;
                        default:
                            //code here
                            include "includes/view_posts.php";
                        break;

                        }
                            ?>

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->


    <?php include "includes/admin_footer.php"; ?>