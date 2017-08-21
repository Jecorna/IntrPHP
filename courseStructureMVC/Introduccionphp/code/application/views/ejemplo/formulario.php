<?php
echo form_open("/ejemplo/recibirdatos");
 ?>
 <?php
  $nombre = array('name' => 'nombre',
    'placeholder' => 'escribe tu nombre');
    $apellido = array('name' => 'nombre',
      'placeholder' => 'escribe tu apellido');
  ?>
     <?php
     echo form_input($nombre);
     ?></label>
     <br>
     <br>
     <label >Apellido:
        <?php
        echo form_input($apellido);
        ?></label>
        <?php echo form_submit('','Subir curso'); ?>
 <?php echo form_close(); ?>
</body>
</html>
