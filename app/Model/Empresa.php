<?php
	class Empresa extends AppModel {
		public $validate = array(
			'nome' => array(
				'rule' => 'notEmpty'
			),
			'razao_social' => array(
				'rule' => 'notEmpty'
			)
		);
		
		public $hasMany = 'Usuario';
	}
?>