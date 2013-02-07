<?php
	class Empresa extends AppModel {
		public $hasMany = array('Usuario','Cliente');
		
		public $validate = array(
			'nome' => array(
				'rule' => 'notEmpty'
			),
			'razao_social' => array(
				'rule' => 'notEmpty'
			)
		);
	}
?>