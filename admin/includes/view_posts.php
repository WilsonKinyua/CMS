
     <table class = 'table table-striped table-bordered table-hover'>

                                            
                        <thead>
                        <tr>

                        <td>Id</td>
                        <td>Author</td>
                        <td>Title</td>
                        <td>Category</td>
                        <td>Status</td>
                        <td>Image</td>
                        <td>Tags</td>
                        <td>Comments</td>
                        <td>Date</td>
                        
                        </tr>

                        </thead>
                        <tbody>




                        <?php
                        
                        $query = "SELECT * FROM posts";

                        $select_posts = mysqli_query($connection, $query);

                        while($row = mysqli_fetch_assoc( $select_posts)){
                            $posts_id = $row['posts_id'];
                            $posts_author = $row['posts_author'];
                            $posts_title = $row['posts_title'];
                            $posts_category_id = $row['post_category_id'];
                            $posts_status = $row['posts_status'];
                            $posts_image = $row['posts_image'];
                            $posts_tags = $row['posts_tag'];
                            $posts_comments = $row['posts_comment_count'];
                            $posts_date = $row['posts_date'];
                            echo "<tr>";
                            echo "<td>$posts_id</td>";
                            echo "<td>$posts_author</td>";
                            echo "<td> $posts_title</td>";
                            echo "<td>$posts_category_id</td>";
                            echo "<td>$posts_status</td>";
                            echo "<td><img width='100' src ='../images/$posts_image'></td>";
                            echo "<td>$posts_tags</td>";
                            echo "<td>$posts_comments</td>";
                            echo "<td>$posts_date</td>";
                            echo "</tr>";

                        }
                        ?>





                        <td>10</td>
                        <td>Wilson Kinyua</td>
                        <td>Healthy Eating</td>
                        <td>Living</td>
                        <td>Active</td>
                        <td>Image</td>
                        <td>Wilson's Tags</td>
                        <td>Its a very big comment</td>
                        <td>Todays day</td>

                        </tbody>
                        </table>