<?php

namespace Src\Google\Mail;
use GuzzleHttp\Client;
use Src\Authorization\AuthProvider;

Class GMail extends AuthProvider{
    private $token;
    public function __construct(AuthProvider $AuthProvider)
    {
        $this->token=$AuthProvider->getAccessToken('microsoft');
    }
    public function listMailFolders(int $top=10, string $skip='')
    {
        $host='https://graph.microsoft.com';
        $version="v1.0";
        $url=$skip?"$host/$version/users?".'$top='.$top.'&$skip='.$skip:"$host/$version/users?".'$top='.$top;

        $client = new Client();
            $response = $client->request('GET', $url,["headers" => [
                 "Authorization" => "Bearer $this->token"
            ] 
        ]);
        $body = $response->getBody();
        $arr_body = json_decode($body,true);
        return $arr_body;
    }

    public function functionWithObjectParameter($params){
        $host='https://graph.microsoft.com';
        $version="v1.0";
        // "$host/$version/users?".'$top='.$params["top"].'&$skip='.$params["skip"]:"$host/$version/users?".'$top='.$params["top"];
        $url=isset($params["top"])
        ? (isset($params["skiptoken"])?"$host/$version/users/".$params["userId"].'/messages?$top='.$params["top"].'&$skiptoken='.$params["skiptoken"]:"$host/$version/users".$params["userId"].'/messages?$top='.$params["top"])
        :(isset($params["skiptoken"])?"$host/$version/users/".$params["userId"].'/messages?$skiptoken='.$params["skiptoken"]:"$host/$version/users/".$params["userId"]."/messages");
        if(isset($params["nextLink"])){
            $url=$params["nextLink"];
            echo $url;
        }
        $client = new Client();
            $response = $client->request('GET', $url,["headers" => [
                 "Authorization" => "Bearer $this->token"
            ] 
        ]);
        $body = $response->getBody();
        $arr_body = json_decode($body,true);
        return $arr_body;
    }
}
?>