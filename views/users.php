<?php
//$site_map = read_from_external_site("https://www.foxnews.com/");
//echo $site_map;

$test_parameter = isset($_GET["name"])?$_GET["name"]:"";
$_SESSION["name"] = $test_parameter;//3mlt var w hteto fl session 3shan a2dr a access it mn pgs tnea
do_array_example();

// $users = convert_file_to_array();
// $key=array("Date:" , "Ip address:","name:","email:","message:");
// foreach($users as $user){//each new user h echo details bt3to
//     $user_details = explode(",",$user);
//       echo "New User <br/>";
//       echo str_repeat("*", 20);//krrha 20 mra
//         echo "<Div>";
//         $i=0;
//     foreach($user_details as $value ){
//       echo "<h3> $key[$i] $value </h3>";
//       $i=$i+1;
      
//     }
//       echo "</div>";
// }


