﻿<?php
	class CategoriasController extends AppController {
		public $helpers = array('Html', 'Form');
		
		public function index() {
			$this->set('categorias', $this->Categoria->find('all'));
		}
		
		public function ver($id = null) {
			if (!$id) {
				throw new NotFoundException(__('Inválido'));
			}
			
			$categoria = $this->Categoria->findById($id);
			
			if (!$categoria) {
				throw new NotFoundException(__('Inválido'));
			}
			
			$this->set('categoria', $categoria);
		}
		
		public function adicionar() {
			if ($this->request->is('post')) {
				$this->Categoria->create();
				if ($this->Categoria->save($this->request->data)) {
					$this->Session->setFlash('As informações foram adicionadas');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('As informações não foram adicionadas');
				}
			}
		}
		
		public function editar($id = null) {
			if (!$id) {
				throw new NotFoundException(__('Inválido'));
			}

			$categoria = $this->Categoria->findById($id);
			if (!$categoria) {
				throw new NotFoundException(__('Inválido'));
			}

			if ($this->request->is('post') || $this->request->is('put')) {
				$this->Categoria->id = $id;
				if ($this->Categoria->save($this->request->data)) {
					$this->Session->setFlash('As informações foram atualizadas');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('As informações não foram atualizadas');
				}
			}

			if (!$this->request->data) {
				$this->request->data = $categoria;
			}
		}
		
		public function deletar($id) {
			if ($this->request->is('get')) {
				throw new MethodNotAllowedException();
			}
			
			if ($this->categoria->delete($id)) {
				$this->Session->setFlash('A categoria: ' . $id . ' foi deletada');
				$this->redirect(array('action' => 'index'));
			}
		}
	}
?>