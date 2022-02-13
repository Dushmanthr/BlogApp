<?php
       include_once('inc/navbar.php');
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
<body >

   <div class="container">
       <div class="row">
           <div class="col-md-12">
             
                <div class="card mt-4">
                    <div class = "card-header" id = "card-header">
                          <h4>Sign Up Form</h4>

                         

                    </div>    <!--/card-header -->

                    <div class = "card-body" id = "card-body">
                        <form action="index.php">
                          <div class="form-group">
                            <label for="First Name">Fist Name</label>
                            <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            <small id="helpId" class="text-muted"></small>
                          </div>

                          <div class="form-group">
                            <label for="Last Name">Last Name</label>
                            <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            <small id="helpId" class="text-muted"></small>
                          </div>

                          <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="email" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            <small id="helpId" class="text-muted"></small>
                          </div>

                          <div class="form-group">
                            <label for="Password">Password</label>
                            <input type="password" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            <small id="helpId" class="text-muted"></small>
                          </div>

                    </div>           <!--/card-body -->

                    <div class = "card-footer" id="card-footer">
                               <button type="submit" class="btn btn-primary">Sign Up</button>

                     </div>            <!--/card-footer -->

                   
                </form>
              

                </div><!-- /card -->
           </div>
         
       </div>
   </div>

    
</body>


</html>