<h1>Editar as informações de atendimento</h1>
<?php
	echo $this->Form->create('Atendimento');
	echo $this->Form->input('protocolo');
	echo $this->Form->input('data_hora');
	echo $this->Form->input('status');
	echo $this->Form->input('prioridade');
	echo $this->Form->input('plano_atendimento');
	echo $this->Form->input('observacoes', array('rows' => '3'));
	echo $this->Form->input('nota');
	echo $this->Form->input('empresa_id');
	echo $this->Form->input('usuario_id');
	echo $this->Form->input('cliente_id');
	echo $this->Form->input('categoria_id');
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->end('Salvar');
?>