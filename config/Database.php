<?php
class Database
{
  // db credentials
  private $dsn = 'mysql:host=127.0.0.1;dbname=php_tutorials;charset=utf8mb4';
  private $usr = 'kostia';
  private $pwd = '123';
  private $opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ];
  public $conn;
  // establish db conn
  public function get_conn()
  {
    $this->conn = null;
    try
    {
      $this->conn = new PDO($this->dsn, $this->usr, $this->pwd, $this->opt);
    }
    catch (PDOException $exc)
    {
      echo "Ошибка соединения: " . $exc->getMessage();
    }

    return $this->conn;
  }


}