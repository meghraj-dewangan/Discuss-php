<div>
    <h1 class="heading">Categories</h1>
    <?php

        include("./common/db.php");
      
     $query = "select * from category";
     $result = $conn->query($query);
     foreach($result as $row){
        $name = ucfirst($row['name']);
        $id = $row['id'];
  
        echo "<h4 class = 'row question-list'><a href='?c-id=$id' >$name</a></h4>";
   
   
        }
    
    
    ?>
</div>