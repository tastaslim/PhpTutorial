<?php
namespace tut_14_OOPS\morePractice\Service\outlookMail;
require_once "vendor/autoload.php";
use GuzzleHttp\Client;
use tut_14_OOPS\morePractice\Authorization\authProvider\authProvider;
class Mail{
    private $provider;
    private $token;
    function __construct(authProvider $provider)
    {
        $this->provider=$provider;
        $this->token=$provider->getAccessToken();
    }

    public function listMailFolders($userId):array{
        $client = new Client([
            'base_uri' => 'https://reqres.in',
        ]);
        $response = $client->request('GET', '/api/users', [
            'query' => [
                'page' => '2',
            ]
        ]);
        $body = $response->getBody();
        $arr_body = json_decode($body);
        return $arr_body;
    }
}
?>