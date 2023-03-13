<?php 
session_start();
require_once("vendor/autoload.php");
require_once("views/counter.php");

// require_once("views/upload.php");
// if(!empty($_FILES)){

//     var_dump($_FILES);
// }

// if(!empty($_POST)){
   
//     if(empty($_POST["name"]) ||empty($_POST["email"]) || empty($_POST["message"]) ){
//         $error = "The Data cannot be blanked";
//     }elseif(strlen($_POST["name"]) > MAX_NAME_LENGTH){
//         $error = "Name must be less than less than 100 charchters";
//     }elseif(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
//         $error = "Email is not valid";
//     }elseif(strlen($_POST["message"]) > MAX_MESSAGE_LENGTH){
//         $error = "Message must be less than less than 255 charchters";
//     }
//     else{
        
//         save_to_file();
//         $error = "<strong>". WELCOME_MESSAGE ."</strong> </br></br>
//                   <strong>Name: </strong>" .$_POST["name"] . "</br>".
//                   "<strong>Email: </strong>" .$_POST["email"] . "</br>".
//                   "<strong>Message: </strong>" .$_POST["message"];
        
//         die($error);
//     }
// }


// $parameter = isset($_GET["page"]) ? $_GET["page"] : "";
// if ($parameter === "users")
//     require_once("views/users.php");
// else
//     require_once("views/form.php");

?>