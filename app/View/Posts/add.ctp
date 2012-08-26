<h1> Criar novo Post </h1>


<?php
$form = '';
$form .= $this->Form->create('Post');
$form .= $this->Form->input('title');
$form .= $this->Form->input('body', array('rows' => '3', 'name' => 'Postagem'));
$form .= $this->Form->end('Enviar Post');
echo $form;