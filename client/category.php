
<select class="form-control" name="Category" id="Category">
    <option value="">Select a Category</option>
    <?php
    
    include("./common/db.php");

    $query = "select * from category";
     $result = $conn->query($query);
     foreach($result as $row){
        $name =ucfirst($row['name']) ;
        $id = $row['id'];
        echo "<option value='$id'>$name</option>";//after make in option in sql then here show from database
     }
    
    ?>
</select>
