<?php
             session_start();
      ?>
     
      <?php
              include_once('inc/connection.php');
      ?>
      
      <?php
          if(!isset($_SESSION['User_fname'])){

            header("Location: index.php");

          }
    
    ?>

    <?php
              if(isset($_POST['submit'])){

                //Define and assigning values for the variables

                $post_title = Input_varify($_POST['title']);
                $post_body = Input_varify($_POST['post_body']);

                //write database insert query
                $query = "INSERT INTO post_table(post_title,post_body,create_at)VALUES('{$post_title}','{$post_body}',NOW())";

                $result = mysqli_query($conn, $query);


                if($result){
                    $msg = "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
                    <strong>Post successfully created!</strong> Your post is visible now
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                    </button>
                  </div>";
                }
                else{
                    echo "Post not created".mysqli_error($conn);
                }
              }

              function input_varify($data){
                // to remove empty spaces of the user input
                 $data = trim($data);
                
                 //to remove the backslashes from the user inputs
                 $data = stripslashes($data);
      
                 //to convert special characters to html entities
                 $data = html_entity_decode($data);
      
                 return $data;
      
                      
      
          
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
    <title>Create Post</title>
    <link rel="stylesheet" href="css/signup.css">
   


</head>
<body>
<?php
       include_once('inc/navbar.php');
    ?>

   <div class="container">
       <div class="row">
           <div class="col-md-12">
             
                <div class="card mt-4">
                    <div class = "card-header" id = "card-header">
                          <h4>Create a new Post</h4>

                             

                    </div>    <!--/card-header -->

                    <div class = "card-body" id = "card-body">
                        <form action="create_post.php" method ="POST">

                           <?php if(!empty($msg)){echo $msg;}?>

<div class="form-group">
  <label for="">Title</label>
  <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId">
  <small id="helpId" class="text-muted">Post Title</small>
</div>
 
                <div class="form-group">
                  <label for=""></label>

                        <script src="plugins/ckeditor/ckeditor.js"></script>
                      
                  <textarea class="form-control" name="post_body" id="post_body" rows="15"></textarea>
                     
                  <script>
                                   CKEDITOR.replace( 'post_body' );
                 </script>


                </div>

                          

                    </div>           <!--/card-body -->

                    <div class = "card-footer" id="card-footer">
                               <button type="submit" name="submit" class="btn btn-primary">Submit</button>

                     </div>            <!--/card-footer -->

                   
                </form>
              

                </div><!-- /card -->
           </div>
         
       </div>
   </div>

    
</body>


</html>