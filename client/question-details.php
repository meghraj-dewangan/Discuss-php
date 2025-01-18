<div class="container">
<div class="row">

<div class="col-8">
 <h1 class="heading">Question</h1>
    <?php
    
    include("./common/db.php");
    $query = "select * from questions where id = $qid";
    $result = $conn->query($query);
   
    $row = $result->fetch_assoc();
    $cid=$row['category_id']; //category id
    // print_r($row);

    echo  "<h4 class='margin-bottom-15 question-title'>Question : ".$row['title']."</h4>
    <p class='margin-bottom-15'>".$row['description']."</p>";
    
    include("./client/answers.php");
    ?>

   <?php
   $is_loggedin = isset($_SESSION['user']['username']);

   $textarea_margin_class = $is_loggedin ? 'mb-3' : '';

   ?>

    <form action="./server/requests.php" method="POST" >
        <input type="hidden" name="question_id" value="<?php echo $qid?>">
    <textarea name="answer" class="form-control <?php echo $textarea_margin_class; ?>" placeholder="Your answer..."></textarea>
   
    <?php

    if ($is_loggedin ) {
      echo '  <button  type="submit" class="btn btn-primary">Write your answer</button>';
        
    } else{
        echo "<p class='text-danger fs-6'>please signup/login for answer</p>";
    }
    ?>
    </form>
   
</div>

<div class="col-4">
   
    <?php

    $categoryQuery = "select name from category where id='$cid'";
    $categoryResult = $conn->query($categoryQuery);
    $categoryRow = $categoryResult->fetch_assoc();
    echo " <h1>".ucfirst($categoryRow['name'])."</h1>";

  
    $query = "select * from questions where category_id=$cid and id!=$qid";
    $result = $conn->query($query);
    foreach($result as $row){
        $id = $row['id'];
       
        $title=$row['title'];
        echo "<div class='question-list'>
        
        <h4><a href='q-id=$id'>$title</a></h4>
        
        </div>";
    }
    ?>

</div>
    
</div>
   
</div>

