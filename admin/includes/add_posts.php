    <?php
    
    if(isset($_POST['create_post'])){
        $post_title        = $_POST['title'];
        $post_author       = $_POST['post_author'];
        $post_category_id  = $_POST['post_category_id'];
        $post_status       = $_POST['posts_status'];

        $post_image        = $_FILES['image']['name'];
        $post_image_temp   = $_FILES['image']['tmp_name'];


        $post_tags         = $_POST['post_tags'];
        $post_content      = $_POST['post_content'];
        $post_date         = date('d-m-y');
        $post_comment_count = 4;

        move_uploaded_file($post_image_temp ,"../images/$post_image");
    }
    
    
    ?>
    
    
    <form action="" method="post" enctype="multipart/form-data">    
                    
                    
                    <div class="form-group">
                        <label for="title">Post Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>

                        <div class="form-group">
                    <label for="post_category">Post Category Id</label>
                    <input type="text" class="form-control" name="post_category_id">
                    </div>

                    <div class="form-group">
                    <label for="text">Posts Author</label>
                    <input type="text" class="form-control" name="post_author">
                    </div>

                    <div class="form-group">
                        <label for="post_tags">Post Status</label>
                        <input type="text" class="form-control" name="posts_status">
                    </div>
                    
                <div class="form-group">
                        <label for="post_image">Post Image</label>
                        <input type="file"  name="image">
                    </div>

                    <div class="form-group">
                        <label for="post_tags">Post Tags</label>
                        <input type="text" class="form-control" name="post_tags">
                    </div>
                    
                    <div class="form-group">
                        <label for="post_content">Post Content</label>
                        <textarea class="form-control "name="post_content" id="" cols="30" rows="10">
                        </textarea>
                    </div>
                    
                    

                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="create_post" value="Publish Post">
                    </div>


                </form>
                