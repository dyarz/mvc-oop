<?php
class Mahasiswa_model
{
  private $table = 'mahasiswa';
  private $db;
  public function __construct()
  {
    $this->db = new Database;
  }
  public function getAllMahasiswa()
  {

    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }
  public function getAllMahasiswaByNama()
  {
    if (isset($_POST['keyword'])) {
      $key = $_POST['keyword'];

      $this->db->query('SELECT * FROM mahasiswa WHERE nama LIKE :keyword');
      $this->db->bind('keyword', "%$key%");
      return $this->db->resultSet();
    } else {
      return $this->getAllMahasiswa();
    }
  }
  public function getMahasiswaById($id)
  {
    $this->db->query("SELECT * FROM " . $this->table . " WHERE id=:id");
    $this->db->bind('id', $id);
    return $this->db->single();
  }
  public function tambahDataMahasiswa($data)
  {

    # code...
    $query = "INSERT INTO mahasiswa 
            VALUES 
            ('',:nama,:nim,:email,:jurusan,'1.jpg')";
    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('nim', $data['nim']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('jurusan', $data['jurusan']);

    $this->db->execute();
    return $this->db->rowCount();
  }
  public function hapusDataMahasiswa($id)
  {
    $query = "DELETE FROM mahasiswa WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $id);
    $this->db->execute();
    return $this->db->rowCount();
  }
  public function ubahDataMahasiswa($data)
  {

    # code...
    $query = "UPDATE mahasiswa SET nama= :nama, nim= :nim, email= :email, jurusan= :jurusan WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('id', $data['id']);
    $this->db->bind('nim', $data['nim']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('jurusan', $data['jurusan']);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
