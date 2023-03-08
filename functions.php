<?php
  function validate_form($var){
    if(isset($_POST[$var]) && !empty($_POST[$var])){
      return $_POST[$var];
    }
  }


  function save_to_file() {
    $fp = fopen(_Saving_File_, "a+");//fp is a handler..a+ if the file isn't existed so create it 
    $Date=date("F j Y g:i a");//to show the date
    $Date.=" , ";
    $ip = $_SERVER['REMOTE_ADDR'];  //to show ip
    $ip.=",";
    $written_string = implode(" , ", $_POST);//what Im gonna write in the file
    fwrite($fp,$Date);
    fwrite($fp,$ip);
    fwrite($fp, $written_string.PHP_EOL);
    fclose($fp);
}

function convert_file_to_array() {//a loop 3l arr if i have> user
  return file(_Saving_File_);//takee file and rerurn arr
}



  ?>

