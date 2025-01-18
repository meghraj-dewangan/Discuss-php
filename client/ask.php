<div class="container">
    <h1 class="heading">Ask a Question</h1>
    <form class="row g-3" method="POST" action="./server/requests.php">
  
  <div class="sm-3 col-6 offset-sm-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder=" Enter a question">
  </div>

  <div class="sm-3 col-6 offset-sm-3">
    <label for="Description" class="form-label">Description</label>
    <textarea  name="Description" class="form-control" id="Description" placeholder=" Write Description"></textarea>
  </div>

  <div class="sm-3 col-6 offset-sm-3">
    <label for="Category" class="form-label">Category</label>
   
       <?php

        include("category.php");
       ?>

  </div>

  <div class="sm-3 col-6 offset-sm-3">
    <button type="submit" name="ask" class="btn btn-primary">Ask Question</button>
  </div>
</form>
</div>