<?php
session_start();

  class Coorclt
  {
    private $_id;
    private $_name;
    private $_address;
    private $_email;
    private $_tel;

    //Name
    function SetName($name) {
      $this->_name=$name;
    }
    function GetName($name) {
      echo "<p> Raison sociale : " . $this->_name . "</p>";
    }

    //Address
    function SetAddress($addr) {
      $this->_address=$addr;
    }
    function GetAddress() {
      echo "<p> Addresse : " . $this->_address . "</p>";
    }

    //Email
    function SetEmail($email) {
      $this->_email=$email;
    }
    function GetEmail() {
      echo "<p> Email de contact : " . $this->_email . "</p>";
    }

    //Tel
    function SetTel($tel) {
      $this->_tel=$tel;
    }
    function GetTel() {
      echo "<p> Numero de téléphone du contact : " . $this->_tel . "</p>";
    }

  }
?>
