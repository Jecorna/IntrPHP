<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ejemplo extends CI_Controller { // los controladores el nombre de la clase con mayusculas y el del controlador minuscualas
  function __consturct(){ // el constuctor es con 2 _ y consturct
    parent::__consturct(); // constructor padre
    $this->load->helper('mihelper');
  }
    function index(){
      $this->load->helper('mihelper');
      $this->load->view('ejemplo/headers');
      $this->load->view('ejemplo/ejemplo_view');
    }
    function holamundo(){
      $this->load->view('ejemplo/headers');
      $this->load->view('ejemplo/ejemplo_view');
    }
}
 ?>
