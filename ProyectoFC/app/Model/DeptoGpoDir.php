<?php 
class DeptoGpoDirs extends AppModel { 
    var $name = ' DeptoGpoDirs '; 
    var $validate = array (); 
    // RELACION DEPTOGPODIR:DEPARTAMENTO 1:N
    var $hasMany = array(
    		'Departamento' => array(
    				'className'     => 'Departamento',
    				'foreignKey'    => 'departamento_id',
    		),
);
    // RELACION DEPTOGPODIR:GRUPO 1:N
    var $hasMany = array(
    		'Grupo' => array(
    				'className'     => 'Grupo',
    				'foreignKey'    => 'grupo_id',
    		)
    );
    // RELACION DEPTOGPODIR:DIRECTOR 1:1
    var $hasOne = array(
    		'Director' => array(
    				'className'     => 'Director',
    				'foreignKey'    => 'director_id',
    		)
    );
    
    
  } 
?>
