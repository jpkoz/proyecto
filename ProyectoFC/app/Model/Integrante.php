<?php
class Integrante extends AppModel {
	var $name = 'Integrante';
	var $validate = array('dedicacion' => array('rule' => 'notEmpty'), 'pago_mensual' => array('rule' => 'notEmpty'), 'valor_seguro' => array('rule' => 'notEmpty'), 'fecha_ini' => array('rule' => 'notEmpty'), 'fecha_fin' => array('rule' => 'notEmpty'));
	//Relacion Integrante:Director 1.1
	var $hasOne = array(
			'Director' => array(
					'className'  	=> 'Director',
					'foreignKey'    => 'integrante_id',
					//'conditions'  => array('Comentario.estado' => '1'),
			)
	);
	//Relacion Integrante:Equipo 
	var $hasAndBelongsToMany = array(
			'Equipo' => array(
					'className'  				=> 'Equipo',
					'joinTable'    				=> 'equipos_integrantes',
					'foreignKey'    			=> 'integrante_id',
					'associationForeignKey'    	=> 'equipo_id',
					//'conditions'   	 		=> array('Comentario.estado' => '1'),
			)
	);
	//Relacion Integrante:Persona 1.1
	var $belongsTo = array(
			'Persona' => array(
					'className'  	=> 'Persona',
					'foreignKey'    => 'persona_id',
					//'conditions'  => array('Comentario.estado' => '1'),
			),
			//Relacion Integrante:CategoriaPersona 1.1
			'CategoriaPersona' => array(
					'className'  	=> 'CategoriaPersona',
					'foreignKey'    => 'categoria_persona_id',
					//'conditions'  => array('Comentario.estado' => '1'),
			),
			//Relacion Integrante:Rol 1.1
			'Rol' => array(
					'className'  	=> 'Rol',
					'foreignKey'    => 'rol_id',
					//'conditions'  => array('Comentario.estado' => '1'),
			),
			//Relacion Integrante:TipoPago 1.1
			'TipoPago' => array(
					'className'  	=> 'TipoPago',
					'foreignKey'    => 'tipo_pago_id',
					//'conditions'  => array('Comentario.estado' => '1'),
			)
	);
}
?>
