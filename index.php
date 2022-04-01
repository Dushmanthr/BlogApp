<?php
      session_start();
    ?>
    <?php
       include_once('inc/connection.php');
    ?>

<?php
       include_once('inc/navbar.php');
    ?>
    <?php

          $postbody = "";

         $query = "SELECT * FROM post_Table  ";

         $showpost = mysqli_query($conn,$query);

         if($showpost){
               if(mysqli_num_rows($showpost) > 0){
                   
                 while($post = mysqli_fetch_assoc($showpost)){

                    $postbody = $post['post_body'];
                 }
               }
         }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <style>
@import url('https://fonts.googleapis.com/css2?family=Russo+One&display=swap');
</style>
    <title>Blog App</title>
    <link rel="stylesheet" href="css/index.css">

</head>
<body >

      

   <div class="container">
       <div class="row">
           <div class="col-md-12">
              <div class= "jumbotron mt-4">
                  <h4 id = "jumbo-header">Welcome to the DonTube</h4>
              </div>

           </div>
         
       </div>
   </div>
    <div>
           <?php
              echo $postbody;
           
           ?>
    </div>
    
</body>


</html>