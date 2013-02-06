<?php
	class Categoria extends AppModel {
		public $validate = array(
			'descricao' => array(
				'rule' => 'notEmpty'
			)
		);
	}
?>