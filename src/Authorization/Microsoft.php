<?php
  namespace tut_14_OOPS\morePractice\Authorization\Microsoft;
  use tut_14_OOPS\morePractice\Authorization\authProvider\authProvider;
  class Microsoft implements authProvider{
      public function getAccessToken(string $token): string
      {
        return $token;
      }
  }
?>
