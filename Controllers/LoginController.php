<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

class LoginController extends Controller {

  public function index() {
    $data = array();
    if(isset($_POST['login_form'])){
      $username = addslashes($_POST['input_email']);
      $password = addslashes($_POST['input_password']);
      echo "<script type='text/javascript'>
      alert('HERE');
      </script>";
      $userX = new User();
      if($userX->setSession($username,$password)){
        $lnk = "Location: ".DEFAULT_URL;
        header($lnk);
      }else{
        $this->loadView('login',$data);
        echo "<script type='text/javascript'>
        alert('alert_info_login');
        </script>";
      }

    }else{
      $this->loadView('login',$data);
    }
  }

}

?>
