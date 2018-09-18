<?php
namespace controlador\core;

class Controller {
  private $default = 'home';
  public function __construct(){
    $this->setPage();
  }
  public function setPage(){
    if($this->getPage() == null){
      //si no se envia page
      require_once("../app/vistas/app_main/404.php");
    }elseif (file_exists("../app/vistas/{$this->getPage()}.php")) {
      // si se envia page y se pide una vista
      require_once("../app/vistas/{$this->getPage()}.php");
    }else{
      // si se pide page pero no una vista o no se encuentra
      require_once("../app/vistas/app_main/404.php");
    }
  }


  public function getPage(){
    if (!isset($_GET['page'])){
      if(file_exists("../app/vistas/{$this->default}.php")){
        die(require_once ("../app/vistas/{$this->default}.php"));
      }else{
        echo $this->default;
      }
    }else{
      return htmlspecialchars($_GET['page'], ENT_QUOTES);
    }
  }
}
