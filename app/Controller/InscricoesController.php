<?php

/**
 * Descrição de InscricoesController
 *
 * @author Renovatto
 */
class InscricoesController extends AppController{
    public $uses = array('Inscricao');
    
    public function inscrever() {
        $isPost = $this->request->isPost();

		if($isPost && !empty($this->request->data)){
			if($this->Inscricao->save($this->request->data)){
				
				$this->Session->setFlash('Inscricao enviada com sucesso. Aguarde mais novidades.');
				$this->redirect(array('controller' => 'pages', 'action' => 'display','sucesso'));
			}
		}
    }

    
}