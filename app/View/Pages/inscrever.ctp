<h2>Cadastre-se agora e garanta já sua vaga...</h2>


<?php
$form = '';
$form .= $this->Form->create('Inscricao', array('action' => 'inscrever'));
$form .= $this->Form->input('Nome',     array('style' => 'width:35%;padding:0'));
$form .= $this->Form->input('Telefone', array('style' => 'width:20%;padding:0'));
$form .= $this->Form->input('Email',    array('style' => 'width:35%;padding:0'));
$form .= $this->Form->input('Endereco', array('style' => 'width:50%;padding:0'));
$form .= $this->Form->input('Facebook', array('style' => 'width:35%;padding:0'));
$form .= $this->Form->input('Twitter',  array('style' => 'width:35%;padding:0'));
$form .= $this->Form->submit('Inscrever-se');
$form .= $this->Form->end();

echo $form;


?>
