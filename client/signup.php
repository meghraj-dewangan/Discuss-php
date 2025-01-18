<div class="container">
    <h1 class="heading">Signup</h1>
    <form class="row g-3 "  method="POST" action="./server/requests.php" >
  <div class="sm-3 col-6 offset-sm-3 ">
    <label for="username" class="form-label">User Name</label>
    <input type="text" class="form-control" name="username" id="username" placeholder="enter user name">
  </div>

  <div class="sm-3 col-6 offset-sm-3">
    <label for="email" class="form-label">User Email</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="enter user email">
  </div>

  <div class="sm-3 col-6 offset-sm-3">
    <label for="password" class="form-label">User Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="enter user password">
  </div>

  <div class="sm-3 col-6 offset-sm-3">
    <label for="address" class="form-label">User Address</label>
    <input type="text" class="form-control" name="address" id="address" placeholder="enter user address">
  </div>
  
  
  <div class="sm-3 col-6 offset-sm-3">
    <button type="submit" name="signup" class="btn btn-primary">Signup</button>
  </div>
</form>
</div>