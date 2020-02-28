
            <div class="col-md-4">

      
                        

<!-- Blog Search Well -->
        <div class="well">
    <h4>Blog Search</h4>
    <form class="form_control" action="search.php" method="post">
    <div class="input-group">
        <input type="text" class="form-control" name="search">
        <span class="input-group-btn">
            <button class="btn btn-primary" type="submit" name="submit">
                <span class="glyphicon glyphicon-search"></span>
        </button>
        </span>
    </div>
    </form>
    <!-- /.input-group -->
</div>

<!-- Blog Categories Well -->
<div class="well">
    <h4>Blog Categories</h4>
    <div class="row">
        <div class="col-lg-6">
            <ul class="list-unstyled">



            <?php 
                    

                    $query = " SELECT * FROM categories LIMIT 10";
                    $select_display_categories = mysqli_query($connection,$query);


                    while($row = mysqli_fetch_assoc($select_display_categories)){
                       $cat_title = $row['cat_title'];
                        echo "<li><a href='#' >{$cat_title}</a></li>";


                    };
                    ?>
              




            </ul>
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <ul class="list-unstyled">
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
            </ul>
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>

<!-- Side Widget Well -->
<?php include "includes/widget.php"; ?>

</div>
