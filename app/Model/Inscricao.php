<?php

/**
 * Descrição de inscricao
 *
 * @author Renovatto
 */
class Inscricao extends AppModel{
    public $name = 'Inscricao';
    public $order = array('nome' => 'ASC');
    public $useTable = 'inscricoes';
    
    
    
    public $validate = array(
      'nome' => array(
            'rule' => 'notEmpty'
      ),
      'email' => array(
          'rule' => 'notEmpty'
      )
    );
}