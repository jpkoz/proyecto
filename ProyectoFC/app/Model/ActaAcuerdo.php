<?php 
class ActaAcuerdo extends AppModel { 
    var $name = 'ActaAcuerdo'; 
    var $validate = array('objetivo' => array('rule' => 'notEmpty'), 
    		'respons_utn' => array('rule' => 'notEmpty'), 'estado' => array('rule' => 'notEmpty'),
    		 'proyecto_id' => array('rule' => 'notEmpty'), 'conveniomarco_id' => array('rule' => 'notEmpty'),
    		 'departamento_id' => array('rule' => 'notEmpty'), 'grupo_id' => array('rule' => 'notEmpty')); 
 
    var $belongsTo = array(
	// RELACION ACTAACUERDO:PROYECTO 1:1    		 
            'Proyecto' => array( 
                    'className'     => 'Proyecto', 
                    'foreignKey'    => 'proyecto_id', 
                            ), 
	// RELACION ACTAACUERDO:CONVENIOMARCO 1:1 
            'ConvenioMarco' => array( 
                    'className'     => 'ConvenioMarco', 
                    'foreignKey'    => 'convenio_marco_id', 
            ), 
	// RELACION ACTAACUERDO:DEPARTAMENTO 1:N
    		'Departamento' => array(
    						'className'     => 'Departamento',
    						'foreignKey'    => 'departamento_id',
    				),
    // RELACION ACTAACUERDO:GRUPO 1:N
   			'Grupo' => array(
    						'className'     => 'Grupo',
    						'foreignKey'    => 'grupo_id',
    				),
    // RELACION ACTAACUERDO:ENTIDADFIRMANTE 1:1
   			'EntidadFirmante' => array(
    						'className'     => 'EntidadFirmante',
    						'foreignKey'    => 'entidad_firmante_id',
    				),
    // RELACION ACTAACUERDO:COMITENTE 1:1
    		'Comitente' => array(
    						'className'     => 'Comitente',
    						'foreignKey'    => 'comitente_id',
    				)
    		);
    		
    //----------------------------------------------------------------------		
    // RELACION ACTAACUERDO:ARCHIVOCONVENIO 1:1
    		var $hasOne = array(
    		'ArchivoConvenio' => array(
    				'className'     => 'ArchivoConvenio',
    				'foreignKey'    => 'acta_acuerdo_id',
    		),);
    	   		     
  } 
?>

