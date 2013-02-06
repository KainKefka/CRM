<?php
	class Parametro extends AppModel {
		public $validate = array(
			'descricao' => array(
				'rule' => 'notEmpty'
			),
			'valor' => array(
				'rule' => 'notEmpty'
			),
			'empresa_id' => array(
				'rule' => 'notEmpty'
			)
		);
		
		public $belongsTo = 'Empresa';
	}
?>