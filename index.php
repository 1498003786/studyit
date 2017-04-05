<?php
//    $array=($_SERVER);
//    echo $array["PATH_INFO"];
      $pathinfo="/dashboard/index";
      if(array_key_exists("PATH_INFO",$_SERVER)){
      $pathinfo=$_SERVER["PATH_INFO"];
      }
      $array=explode("/",substr($pathinfo,1));
      if(count($array)==2){
      include "views/".$array[0]."/".$array[1].".html";
      }else{
      include "views/"."dashboard"."/".$array[0].".html";
      }

?>