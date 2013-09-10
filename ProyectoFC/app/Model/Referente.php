<?php
class Referente extends AppModel {
	var $name = 'Referente';
	var $validate = array ();
	// RELACION REFERENTE:COMITENTE 1:n
	var $hasMany = array(
			'Comitente' => array(
					'className'     => 'Comitente',
					'foreignKey'    => 'comitente_id',
							),);
//--------------------------------------------------
	// RELACION REFERENTE:PROYECTO
	var $belongsTo = array(
			'Proyecto' => array(
					'className'     => 'Proyecto',
					'foreignKey'    => 'proyecto_id',
			)
	);
	
	
}
?>