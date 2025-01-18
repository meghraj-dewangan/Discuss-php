<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container "  >
    <a class="navbar-brand me-5" href="./">
        <img src="./public/discusslogo.png" alt="logo"  width="300px">
    </a>

    <div class="navbar bg-body-tertiary">
    <div class="container-fluid">
   
      <form class="d-flex" role="search" action="" >
       <input class="searchinput" name="search" class="form-control me-2" type="search" placeholder="Search questions">
       <button class="btn btn-outline-success" type="submit">Search</button>
     </form>
    </div>
   </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-5 " style="font-size:0.9rem">
        <a class="nav-link active" id="home"  href="./">Home</a>

        <?php
          if (isset($_SESSION['user']['username'])) {
          echo '<a class="nav-link" href="./server/requests.php?logout=true" >Logout('.ucfirst($_SESSION["user"]["username"]).')</a>';
          echo '<a class="nav-link" href="?ask=true" style="width:9rem">Ask A Question</a>';
          echo '<a class="nav-link" href="?u-id='.$_SESSION["user"]["user_id"].' " style="width:9rem">My Questions</a>';
          } 
        ?>

        <?php
          if (!isset($_SESSION['user']['username'])) {
            echo '<a class="nav-link" href="?login=true">Login</a>';
            echo ' <a class="nav-link" href="?signup=true">SignUp</a>';
          } else {
          //
          }
        ?>
   
        
       
        <a class="nav-link" href="?latest=true" style="width:9rem; hover:background-color:red">Latest Question</a>
       
      </div>
    </div>

  </div>
  
 
</nav>