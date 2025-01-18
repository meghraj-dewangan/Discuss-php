<div class="container">
    <h1 class="heading">Login</h1>
    <form class="row g-3" method="POST" action="./server/requests.php">
  
  <div class="sm-3 col-6 offset-sm-3">
    <label for="email" class="form-label">User Email</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="enter user email">
  </div>

  <div class="sm-3 col-6 offset-sm-3">
    <label for="password" class="form-label">User Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="enter user password">
  </div>


  
  
  <div class="sm-3 col-6 offset-sm-3">
    <button type="submit" name='login' class="btn btn-primary">Login</button>
  </div>
</form>
<p class="text-center mt-3">
        Don't have an account? <a href="?signup=true">Sign up here</a>
    </p>
</div>