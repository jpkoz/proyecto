<?php 
class ConvenioEspecifico extends AppModel { 
    var $name = 'ConvenioEspecifico'; 
    var $validate = array (); 

    // RELACION CONVENIOESPECIFICO:DEPARTAMENTO 1:N 
    var $hasMany = array( 
            'Departamento' => array( 
                    'className'     => 'Departamento', 
                    'foreignKey'    => 'departamento_id', 
                            ) 
                        ); 
    // RELACION CONVENIOESPECIFICO:GRUPO 1:N 

    var $hasMany = array( 
            'Grupo' => array( 
                    'className'     => 'Grupo', 
                    'foreignKey'    => 'grupo_id', 
                            ) 
                        ); 
    // RELACION CONVENIOESPECIFICO:COMITENTE 1:1 

    var $hasOne = array( 
            'Comitente' => array( 
                    'className'     => 'Comitente', 
                    'foreignKey'    => 'comitente_id', 
                            ) 
                        ); 
// RELACION CONVENIOESPECIFICO:PROYECTO 1:1 

    var $hasOne = array( 
            'Proyecto' => array( 
                    'className'     => 'Proyecto', 
                    'foreignKey'    => 'proyecto_id', 
                            ) 
                        ); 
    // RELACION CONVENIOESPECIFICO:ENTIDADFIRMANTE 1:1
    
    var $hasOne = array(
    		'EntidadFirmante' => array(
    				'className'     => 'EntidadFirmante',
    				'foreignKey'    => 'entidad_firmante_id',
    		)
    );
    //------------------------------------------------------------
    // RELACION CONVENIOESPECIFICO:ARCHIVOCONVENIO 1:1
    
    var $belongsTo = array(
    		'ArchivoConvenio' => array(
    				'className'     => 'ArchivoConvenio',
    				'foreignKey'    => 'archivo_convenio_id',
    		)
    );
    
    // RELACION CONVENIOESPECIFICO:ENTIDADFIRMANTE 1:1
    var $belongsto = array(
    		'EntidadFirmante' => array(
    				'className'     => 'EntidadFirmante',
    				'foreignKey'    => 'entidad_firmante_id',
    		)
    );
    
    
    
    
  } 
?>
