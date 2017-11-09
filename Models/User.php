<?php
class User extends Model {

  public function setSession($username, $password){
    $stmt = $this->db->prepare("SELECT * FROM tbl_users WHERE username='$username' AND password='$password'");
    $stmt->execute();
    if($stmt->rowCount() > 0){
      $stmt = $stmt->fetch();
      $_SESSION["userLogged"] = $stmt['id_users'];
      return true;
    }else{
      return false;
    }
  }

}
?>
