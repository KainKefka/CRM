<?php
	class EmpresasController extends AppController {
		public $helpers = array('Html', 'Form');

		public function index() {
			$this->set('empresas', $this->Empresa->find('all'));
		}
	}
?>