<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ejemplo extends CI_Controller { // los controladores el nombre de la clase con mayusculas y el del controlador minuscualas
  function __consturct(){ // el constuctor es con 2 _ y consturct
    parent::__consturct(); // constructor padre
  }
    function index(){
      $this->load->view('ejemplo_view');
    }
}
 ?>
