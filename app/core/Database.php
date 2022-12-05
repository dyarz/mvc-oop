<?php
class Database
{
  private $host = DB_HOST;
  private $user = DB_USER;
  private $pass = DB_PASS;
  private $dbname = DB_NAME;

  private $dbh;
  private $stmnt;
  public function __construct()
  {
    $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
    $option = [
      PDO::ATTR_PERSISTENT => true,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    try {
      $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }
  public function query($query)
  {
    $this->stmnt = $this->dbh->prepare($query);
  }
  public function bind($param, $value, $type = null)
  {
    if (is_null($type)) {

      switch (true) {
        case is_int($value):
          $type = PDO::PARAM_INT;
          break;
        case is_bool($value):

          $type = PDO::PARAM_BOOL;
          break;
        case is_null($value):

          $type = PDO::PARAM_NULL;
          break;
        default:

          $type = PDO::PARAM_STR;
          break;
      }
    }
    $this->stmnt->bindValue($param, $value, $type);
    //$this->stmnt->bind();

    //echo "binding";
  }
  public function execute()
  {
    // echo "execute";
    $this->stmnt->execute();
  }
  public function resultSet()
  {
    $this->execute();
    return $this->stmnt->fetchAll(PDO::FETCH_ASSOC);
  }
  public function single()
  {
    $this->execute();
    return $this->stmnt->fetch(PDO::FETCH_ASSOC);
  }
  public function rowCount()
  {
    return $this->stmnt->rowCount();
  }
}
