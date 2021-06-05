<?php
namespace tut_14_OOPS\morePractice\Service\outlookMail;
use tut_14_OOPS\morePractice\Authorization\authProvider\authProvider;
class Mail{
    private $provider;
    function __construct(authProvider $provider)
    {
        $this->provider=$provider;
    }

    public function listMailFolders($params):array{
        string $url="https://graph.microsoft.com/users/".$params->$userId."/mailFolders";
        
    }
}
?>