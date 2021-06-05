<?php
  namespace tut_14_OOPS\morePractice\Authorization\Google;
  use tut_14_OOPS\morePractice\Authorization\authProvider\authProvider;
  class Google implements authProvider{
      public function getAccessToken(string $token): string
      {
          return $token;
      }
  }
?>