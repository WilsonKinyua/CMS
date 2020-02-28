<?php 




// edit categories
function edit_categories(){

        global $connection;

    if(isset($_POST['submit'])){
        $cat_title = $_POST['cat_title'];
        if($cat_title == '' || empty($cat_title)){
            echo '<div class="alert alert-danger" role="alert">
            Please fill in the form!
          </div>';
        }else{
            echo '<div class="alert alert-success" role="alert">
            Successfully submitted!
          </div>';
          $query = "INSERT INTO categories(cat_title)";
          $query .= "VALUE('{$cat_title}')";
          $query_add_category = mysqli_query($connection,$query);

          if(!$query_add_category){
              die("Not successfull" .mysqli_error($connection));
          }
        }

    }
}




// find all categories

function findall_categories(){
    global $connection;
    $query = "SELECT * FROM categories";
    $display_to_table = mysqli_query($connection,$query);

       while($row = mysqli_fetch_assoc($display_to_table)){

       $cat_id = $row['cat_id'];
       $cat_title = $row['cat_title'];
       
         echo '<tr>';
           echo "<td> {$cat_id}</td>";
           echo "<td> {$cat_title}</td>";

           echo "<td> <a href='categories.php?delete={$cat_id} '> Delete</a></td>";
           echo "<td> <a href='categories.php?edit={$cat_id} '> Edit</a></td>";
           echo '</tr>';
   }

}


// delete categories


function delete_categories(){
    global $connection;
    if(isset($_GET['delete'])){
        $the_cat_id = $_GET['delete'];
        $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id} ";
        $delete_query = mysqli_query($connection,$query);
        header("Location: categories.php");
     }
}

?>