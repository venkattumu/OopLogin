<?php

include 'class.php';

if(isset($_POST['signin'])){
    $name     = $info->checkInput($_POST['name']);
    $email    = $info->checkInput($_POST['email']);
    $password = $info->checkInput($_POST['password']);
    $mobile   = $info->checkInput($_POST['mobile']);

    // if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	// 		$error = "Invalid email format";
	// 	} else if(strlen($name) > 20){
	// 		$error = "Name Should be between 6 to 20";
	// 	} else if(strlen($password) < 7){
	// 		$error = "Password is too short";
	// 	} else{
    //             $user_id = $info->insert('info', array('name' => $name, 'email' => $email, 'mobile' => $mobile, 'password' => $password ));
    //             $_SESSION['id'] = $user_id;
	// 			header("location: https://www.youtube.com/");
	// 		}
	// 	}


   $sql =  "INSERT INTO info "

    }




include_once 'header.php';
?>
<!-- breadcrum -->
<div class="bc-icons-2 mt-5 pt-4">

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb indigo lighten-4">
      <li class="breadcrumb-item"><a class="black-text" href="#">Home</a><i class="fas fa-caret-right mx-2"
          aria-hidden="true"></i></li>
      <li class="breadcrumb-item"><a class="black-text" href="#">Library</a><i class="fas fa-caret-right mx-2"
          aria-hidden="true"></i></li>
      <li class="breadcrumb-item active">Data</li>
    </ol>
  </nav>
</div>  
<!-- end breadcrum -->

<div class="container mt-4 text-center">
    <div class="col-md-6 text-center">
<!-- Default form register -->
<form class="text-center border border-light p-5" method="post" action ="">

    <p class="h4 mb-4">Sign up</p>

   
        
    <!-- Full name -->
    <input type="text" name="name" id="defaultRegisterFormFullName" class="form-control mb-4" placeholder="Full name">
    
    <!-- E-mail -->
    <input type="email" name="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">

    <!-- Password -->
    <input type="password" name="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
        At least 8 characters 
    </small>

    <!-- Phone number -->
    <input type="text" name="mobile" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
        Optional - for two step authentication
    </small>

    <!-- Newsletter -->
    <div class="custom-control custom-checkbox">
        <input type="checkbox" name="" class="custom-control-input" id="defaultRegisterFormNewsletter">
        <label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our newsletter</label>
    </div>

    <!-- Sign up button -->
    <input class="btn btn-info my-4 btn-block" type="submit" name="signin" value = "Sign in">

    <!-- Social register -->
    <p>or sign up with:</p>

    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-facebook-f"></i>
    </a>
    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-twitter"></i>
    </a>
    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-linkedin-in"></i>
    </a>
    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-github"></i>
    </a>

    <hr>

    <!-- Terms of service -->
    <p>By clicking
        <em>Sign up</em> you agree to our
        <a href="" target="_blank">terms of service</a>

</form>
<!-- Default form register -->
</div>
</div>
<?php 
    include_once 'footer.php';
?>