<?php
  namespace tut_14_OOPS\morePractice\Authorization\authProvider;
  interface authProvider{
      public function getAccessToken(string $token):string;
  }
?>