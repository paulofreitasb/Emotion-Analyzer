<?php

class homeController extends Controller {

  public function __construct(){

    if(isset($_SESSION["userLogged"]) && !empty($_SESSION["userLogged"])){
    }else{
      $links = "Location: ".DEFAULT_URL."/login";
      header($links);
    }

  }

  public function index(){
    $data = array();
    $this->loadTemplate('home', $data);
  }



}

?>
