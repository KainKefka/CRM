<?php
	class Usuario extends AppModel {
		public $validate = array(
			'nome' => array('rule' => 'notEmpty'),
			'matricula' => array('rule' => 'notEmpty'),
			'status' => array('rule' => 'notEmpty'),
			'empresa_id' => array('rule' => 'notEmpty')
		);
		
		public $belongsTo = 'Empresa';
	}
?>