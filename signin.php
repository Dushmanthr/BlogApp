
<?php
             session_start();
      ?>
     
      <?php
              include_once('inc/connection.php');
      ?>
      
      <?php
        if(isset($_POST['submit'])){
          //declaring variables and assign empty values
         
          $email = "";
          $password="";
          $msg = "";

         
           $email = input_varify($_POST['email']);
           $password = input_varify($_POST['password']);

          
         $query1 = "SELECT * FROM user_table WHERE email='{$email}' AND pwd = '{$password}' Limit 1";

         $showResult = mysqli_query($conn,$query1);
           
         if($showResult){
             if( mysqli_num_rows($showResult) ==1){
                    
                   $user = mysqli_fetch_assoc($showResult);
                   $_SESSION['User_fname'] = $user['Fname'];
                   $_SESSION['User_Lname'] = $user['Lname'];

                  header("Location: index.php");
             }

             else{
                $msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
              <strong>Sorry!</strong> Please check your email or password!
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
              </button>
            </div>";
             }
         }

        }

        function input_varify($data){
          // to remove empty spaces of the user input
           $data = trim($data);
          
           //to remove the backslashes from the user inputs
           $data = stripslashes($data);

           //to convert special characters to html entities
           $data = htmlspecialchars($data);

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
    <title>Blog App</title>
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
                          <h4>Sign In Form</h4>

                             

                    </div>    <!--/card-header -->

                    <div class = "card-body" id = "card-body">
                        <form action="signin.php" method ="POST">

                           <?php if(!empty($msg)){echo $msg;}?>

                         

                          <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId">
                            <small id="helpId" class="text-muted"></small>
                          </div>

                          <div class="form-group">
                            <label for="Password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId">
                            <small id="helpId" class="text-muted"></small>
                          </div>

                    </div>           <!--/card-body -->

                    <div class = "card-footer" id="card-footer">
                               <button type="submit" name="submit" class="btn btn-primary">Sign In</button>

                     </div>            <!--/card-footer -->

                   
                </form>
              

                </div><!-- /card -->
           </div>
         
       </div>
   </div>

    
</body>


</html>