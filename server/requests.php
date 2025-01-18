<?php

session_start();
include("../common/db.php");


if(isset($_POST['signup'])){
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];

    $user = $conn->prepare("insert into users 
    (id,username,email,password,address) values (NULL,'$username','$email','$password','$address')");

    $result = $user->execute();
    echo $user->insert_id;  // for show id which is add in database
    
    if($result){
        echo "New user registered";
        $_SESSION["user"] = ["username"=>$username , "email"=>$email,"user_id"=>$user->insert_id];
        header("location: /discuss");
    }else{
        echo "user not register";
    }


} else if (isset($_POST['login'])) {
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = "";
    $user_id = 0;

    $query = "select * from users where email = '$email' and password = '$password'";
    $result = $conn->query($query);
   
   if($result->num_rows==1){
      foreach($result as $row){
        
         $username = $row['username'];
         $user_id = $row['id'];
       
      }
       echo $username;
   
       $_SESSION['user'] =  ["username"=>$username , "email"=>$email,"user_id"=>$user_id];
        header("location:/discuss");
    } else{
        // Login fails show error and redirect to signup page

        echo "Invalid Credentials, please try again.";
        header("location:/discuss?signup");
    }


    
} else if (isset($_GET['logout'])) {

   session_unset();
   header("location: /discuss");



}else if (isset($_POST["ask"])){
    print_r($_POST);
    print_r($_SESSION);

    
    $title = $_POST['title'];
    $description = $_POST['Description'];
    $category_id = $_POST['Category'];
    $user_id = $_SESSION['user']['user_id'];

    $question = $conn->prepare("insert into questions 
    (id,title,description,category_id,user_id) values (NULL,'$title','$description','$category_id','$user_id')");

    $result = $question->execute();
    echo $question->insert_id;  // for show id which is add in database
   if($result){
    header("location:/discuss");
   } else{
    echo "Question is added to website";
   }




}else if(isset($_GET['delete'])){
    echo $qid=$_GET['delete'];
    $query= $conn->prepare("delete from questions where id=$qid");
    $result = $query->execute();
    if($result){
        header("location:/discuss");
    }else{
        echo "Question not deleted";
    }
}

else if (isset($_POST["answer"])){
    print_r($_POST);


     
    $answer = $_POST['answer'];
    $question_id = $_POST['question_id'];
    $user_id = $_SESSION['user']['user_id'];

    $query = $conn->prepare("insert into answers 
    (id,answer,question_id,user_id) values (NULL,'$answer','$question_id','$user_id')");

    $result = $query->execute();
    echo $query->insert_id;  // for show id which is add in database
   if($result){
    header("location:/discuss/?q-id=$question_id");
   } else{
    echo "Answer is not submmited";
   }


}
?>