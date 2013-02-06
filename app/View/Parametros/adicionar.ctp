<h1>Adicionar Parâmetro</h1>
<?php
	echo $this->Form->create('Parametro');
	echo $this->Form->input('descricao');
	echo $this->Form->input('valor');
	echo $this->Form->input('empresa_id');
	echo $this->Form->end('Salvar');
?>