<?php
class Frecuencia extends AppModel {
	var $name = 'Frecuencia';
	var $validate = array('nombre' => array('rule' => 'notEmpty'));
	//Relacion Frecuencia:RecursoMaterial 1.n
	var $hasMany = array(
			'RecursoMaterial' => array(
					'className'  	=> 'RecursoMaterial',
					'foreignKey'    => 'frecuencia_id',
					//'conditions'  => array('Comentario.estado' => '1'),
			)
	);
}
?>