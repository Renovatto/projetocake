<h2>Cadastre-se agora e garanta já sua vaga...</h2>


<?php
$form = '';
$form .= $this->Form->create('Inscricao');
$form .= $this->Form->input('nome',     array('style' => 'width:20%;padding:0'));
$form .= $this->Form->input('email',    array('style' => 'width:20%;padding:0'));
$form .= $this->Form->input('telefone', array('style' => 'width:20%;padding:0'));
$form .= $this->Form->input('endereco', array('style' => 'width:50%;padding:0'));
$form .= $this->Form->input('Inscricao.facebook', array('style' => 'width:35%;padding:0'));
$form .= $this->Form->input('Inscricao.twitter',  array('style' => 'width:35%;padding:0'));
$form .= $this->Form->end('Inscrever-se');

echo $form;


?>
