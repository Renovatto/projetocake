<?php


class InscricoesController extends AppController{
    /**
     *  Model que o controller utilizar�
     *  quando n�o especificado sempre ir� procurar por 
     *  um model que seja o singular do nome do controller
     * 
     */
    public $uses = 'Inscricao';
    public $helpers = array('Html' , 'Form');
    
    public function inscrever(){
        
        $isPost = $this->request->isPost();
        
        if($isPost && !empty($this->request->data)) {
            if($this->Inscricao->save($this->request->data)) {
                
                $this->Session->setFlash("Inscri��o enviada com sucesso. Em breve mais novidades.");
                $this->render('sucesso');
            }
        } 
    }

}