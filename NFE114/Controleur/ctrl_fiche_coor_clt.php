<?php
session_start();
  class Coorclt
  {
    private $_id;
    private $_nom;
    private $_adress;
    private $_email;
    private $_tel;

    //Name
    function SetNom($nom) {
      $this->_nom=$nom;
    }
    function GetNom($nom) {
      echo "<p> Raison sociale : " . $this->_nom . "</p>";
    }

    //Adress
    function SetAdress($addr) {
      $this->_adress=$addr;
    }
    function GetAdress() {
      echo "<p> Adresse : " . $this->_adress . "</p>";
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
