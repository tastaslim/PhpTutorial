<?php

use Src\Authorization\AuthProvider;
use Src\Google\Mail\GMail;

require_once realpath("vendor/autoload.php");
  $data=new GMail(new AuthProvider());
  $params=array("userId"=>"mark@securemigration.in");
  $response= $data->functionWithObjectParameter($params);
  print_r($response) ;
  while(isset($response["@odata.nextLink"])){
    echo $response["@odata.nextLink"];
    $params=array("userId"=>"mark@securemigration.in","nextLink"=> $response["@odata.nextLink"]);
    $response= $data->functionWithObjectParameter($params);
    print_r($response) ;
  }
?>

