<?php
class User
{
  // db conn and table name
  private $conn;
  private $table = 'users';

  // obj props
  public $id;
  public $f_name;
  public $l_name;
  public $email;
  public $pwd;
  public $access_lvl;
  public $access_code;
  public $status;
  public $created;

  public function __construct($db)
  {
    $this->conn = $db;
  }
}