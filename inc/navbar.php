<style>
    #create{
      border: 1px solid #0066ff;
      color: #0066ff;
      padding: 5px;
      padding-left: 2px;
    }

    #create:hover{
      border: 1px solid #0066ff;
      color: #fff;
      background:#0066ff;
    }

    #signout{
      border: 1px solid #0066ff;
      color: #0066ff;
      padding: 5px;
      padding-left: 2px;
      width: auto;
    }

    #signout:hover{
      border: 1px solid #0066ff;
      color: #fff;
      background:#0066ff;
    }

    .nav-item {
             
                padding:10px 5px;
             
                
              }

</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tags</a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
      <!--   <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> -->
      </ul>
    <ul class="navbar-nav >
    <li class="nav-item style ="float:right; padding-left: 950px;">
          <!-- <a class="nav-link " href="signin.php" >Sign In</a>  -->
          </li>

          <!-- <li class="nav-item">
          <a class="nav-link " href="signup.php" >Sign Up</a> </li> -->

          <?php
               //To remove signin and signup buttons after set the session(after login user)
               if(isset($_SESSION['User_fname'])){
                        
               echo "
               <li class='nav-item style ='float:right; padding-left: 950px;'>
               <a id = 'create' class='nav-link ' href='create_post.php' >Create</a> </li>


               <li class='nav-item'>
               <a id = 'signout' class='nav-link ' href='signout.php' >Sign Out</a> </li>
               ";
      

               }
               else{
                                 
                echo "
                <li class='nav-item'>
                <a class='nav-link ' href='signin.php' >Sign In</a> </li>
 
 
                <li class='nav-item'>
                <a class='nav-link ' href='signup.php' >Sign Up</a> </li>
                ";
               }
          
          ?>
    </ul>
    </div>
  </div>
</nav>