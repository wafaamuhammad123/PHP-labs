<?php

class Counter  {
private $_count;
//3shan at2kd en lragel ele et3d mt3dsh tne



public function __construct(){//magic fn 3shan mbnadehosh b esmo bnadeh b new 
//h initialize count
//minf3sh anade member var without this
$this->_count= $this-> get_count();


}

public function get_count(){//da m3nah enha fn bs btgeb val mesh bt do action or tl3b fl coount so it only return
    if(file_exists(_counter_File_)){

       return intval(file_get_contents(_counter_File_));
    }
    else{
        return 0; 
    }

}


public function increment(){
if(!isset($_SESSION[session_key])){//lw lragel mgash abl kda zwdle l counter
$this-> _count ++;//hzwd count
$_SESSION[session_key]=true;
return $this->_count;//hirg3le new val

}
else{
    return false;
}
}

public function update(){//3uzen n update counter da
$fp=fopen(_counter_File_,"w+");
fwrite($fp,$this->_count);
fclose($fp);

}

public function increment_and_update(){
if($this-> increment()!=false){//hnade fn increment..baolo en bas lama yhsal change so update mesh hn update kol mra
$this-> update(); 
}} 






}