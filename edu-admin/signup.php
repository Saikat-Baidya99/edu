<?php 
    require_once "libs/functions.php";
?>


<!DOCTYPE html>
<html lang="en" class=" ">

<head>
    <meta charset="utf-8" />
    <title>Scale | Web Application</title>

    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat,
     flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  
    <link rel="stylesheet" href="css/app.v1.css" type="text/css" />

</head>

<body class="">
    <section id="content" class="m-t-lg wrapper-md animated fadeInDown">
 <div class="container aside-xl"> <a class="navbar-brand block" href="index.html">Scale</a>
         <section class="m-b-lg">
     <header class="wrapper text-center">
          <strong>Sign up to find interesting thing</strong>
     </header>


 <?php  

        if( isset($_POST['submit']) ){

             $name = $_POST['name'];
             $email = $_POST['email'];

                  // Password panagemant 
                    $pass = $_POST['pass'];
                    $hash_pass = password_hash( $pass, PASSWORD_DEFAULT);


            
         if( isset($_POST['check']) AND $_POST['check'] == 'agree' ){
                   $allow = true;

            }else{
                   $allow = false;
            }

         if( empty($name) || empty($email) || empty($pass) ){

              $mess = "<p class='alert alert-danger'> Field Must not be Empty
                      !<button class='close' data-dismiss='alert'>&times;</button></p>";

            }else if( $allow == false ){
              $mess = "<p class='alert alert-danger'> You must agree to go 
                      !<button class='close' data-dismiss='alert'>&times;</button></p>";

              }else {

         $sql = "INSERT INTO user_admin (name, email, pass, status)
                  VALUES ('$name','$email','$hash_pass','active')";

             $conn -> query($sql);

             $mess = "<p class='alert alert-success'> Data stable 
                     !<button class='close' data-dismiss='alert'>&times;</button></p>";

           }   

       }

  ?>

                <div class="mess">
                    <?php  

                      if( isset($mess) ){
                        echo $mess;
                      }

                    ?>
                </div>

       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
             <div class="list-group">
                <div class="list-group-item">
                 <input name="name" placeholder="Name" class="form-control no-border">
               </div>
             <div class="list-group-item">
        <input name="email" type="text" placeholder="Email" class="form-control no-border"> 
            </div>
            <div class="list-group-item">
     <input name="pass" type="password" placeholder="Password" class="form-control no-border">
           </div>
         </div>
               <div class="checkbox m-b">
          <label>
   <input name="check" value="agree" type="checkbox"> Agree the <a href="#">terms and policy</a>
        </label>
      </div>
   <button name="submit" type="submit" class="btn btn-lg btn-primary btn-block">Sign up</button>
       <div class="line line-dashed"></div>
              <p class="text-muted text-center"><small>Already have an account?</small></p> 
              <a href="index.php" class="btn btn-lg btn-default btn-block">Sign in</a> 

          </form>

   </section>
       </div>
    </section>
   
    <script src="js/app.v1.js"></script>
    <script src="js/app.plugin.js"></script>

</body>
</html>