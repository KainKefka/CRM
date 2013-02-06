<h1>Adicionar Usuário</h1>
<?php
	echo $this->Form->create('Usuario');
	echo $this->Form->input('matricula');
	echo $this->Form->input('nome');
	echo $this->Form->input('status');
	echo $this->Form->input('empresa_id');
	echo $this->Form->end('Salvar');
?>