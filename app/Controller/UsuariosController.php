﻿<?php
	class UsuariosController extends AppController {
		public $helpers = array('Html', 'Form');
		
		public function index() {
			$this->set('usuarios', $this->Usuario->find('all'));
		}
		
		public function ver($id = null) {
			if (!$id) {
				throw new NotFoundException(__('Inválido'));
			}
			
			$usuario = $this->Usuario->findById($id);
			
			if (!$usuario) {
				throw new NotFoundException(__('Inválido'));
			}
			
			$this->set('usuario', $usuario);
		}
		
		public function adicionar() {
			if ($this->request->is('post')) {
				$this->Usuario->create();
				//$this->set('empresas', $this->Empresa->find('all'));
				if ($this->Usuario->save($this->request->data)) {
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

			$usuario = $this->Usuario->findById($id);
			if (!$usuario) {
				throw new NotFoundException(__('Inválido'));
			}

			if ($this->request->is('post') || $this->request->is('put')) {
				$this->Usuario->id = $id;
				if ($this->Usuario->save($this->request->data)) {
					$this->Session->setFlash('As informações foram atualizadas');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('As informações não foram atualizadas');
				}
			}

			if (!$this->request->data) {
				$this->request->data = $usuario;
			}
		}
		
		public function deletar($id) {
			if ($this->request->is('get')) {
				throw new MethodNotAllowedException();
			}
			
			$usuario = $this->Usuario->findById($id);
			
			if ($this->usuario->delete($id)) {
				$this->Session->setFlash('O usuário: ' . $usuario['Usuario']['nome'] . ' foi deletado');
				$this->redirect(array('action' => 'index'));
			}
		}
	}
?>