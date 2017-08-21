<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ejemplo extends CI_Controller { // los controladores el nombre de la clase con mayusculas y el del controlador minuscualas
  function __consturct(){ // el constuctor es con 2 _ y consturct
    parent::__consturct(); // constructor padre
    $this->load->helper('mihelper');
  }
    function index(){
      $this->load->helper('form');
      $this->load->helper('mihelper');
      $this->load->library ('menu',array('<a href="http://www.google.com">inicio</a>','contacto','cursos'));// se le pueden enviar parametros y los recibe el contructor
      $data['mi_menu'] = $this->menu->construirMenu();
      $this->load->view('ejemplo/headers');
      $this->load->view('ejemplo/ejemplo_view', $data);
    }
    function holamundo(){
      $this->load->view('ejemplo/headers');
      $this->load->view('ejemplo/ejemplo_view');
    }
    function nuevo(){
      $this->load->helper('form');
      $this->load->view('ejemplo/headers');
      $this->load->view('ejemplo/formulario');
    }

}
 ?>
