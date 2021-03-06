<?php

  class students implements usersInterface {
    private $user;
    private $name;
    private $userType;
    private $module;
    private $emailAddr;

    function __construct($user, $name, $userType, $module, $emailAddr) {
      $this->user = $user;
      $this->name = $name;
      $this->userType = $userType;
      $this->module = $module;
      $this->emailAddr = $emailAddr;
    }

    public function getUser() {
      return $this->user;
    }

    public function getName() {
      return $this->name;
    }

    public function getUserType() {
      return $this->userType;
    }

    public function getModule() {
      return $this->module;
    }

    public function getEmailAddr() {
      return $this->emailAddr;
    }
    
  }

  class professors implements usersInterface {
    private $user;
    private $name;
    private $userType;
    private $module;
    private $emailAddr;
    private $classList = array();

    function __construct($user, $name, $userType, $module, $emailAddr, $classList) {
      $this->user = $user;
      $this->name = $name;
      $this->userTyp = $userType;
      $this->module = $module;
      $this->emailAddr = $emailAddr;
      array_push($this->clasList, $classList);
    }

    public function getUser() {
      return $this->user;
    }

    public function getName() {
      return $this->name;
    }

    public function getUserType() {
      return $this->userType;
    }

    public function getModule() {
      return $this->module;
    }

    public function getEmailAddr() {
      return $this->emailAddr;
    }

    public function getClassList() {
      return this->classList;
    }
  }

?>
