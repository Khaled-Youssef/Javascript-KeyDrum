<?php 
$pagetitle = "Login";
include_once 'includes/tables.class.php';
include_once 'includes/header.php';
  if (isset($_POST)){
    if (!empty($_POST) && (!empty($_POST))){
    $loginEmail= $_POST['loginEmail'];
    $loginPassword= $_POST['loginPassword'];
    $loginCheck = new users;
    $loginResult = $loginCheck -> selectOne("email = '$loginEmail' AND password = '$loginPassword'");
     if (!empty((array) $loginResult)){
        echo "Login Successfully </br>";
        print_r($loginResult);
        $_SESSION['email'] = $loginEmail;
        $_SESSION['password'] = $loginPassword;
        $_SESSION['userGroup'] =  $loginResult['userGroup'];
        print_r($_SESSION);
    }
      else{
          echo "<h3>Login failed</h3>  <p>Please try againg</p> <a href=" . $scriptLink . ">Try again";
      }
    }
  }

?>

