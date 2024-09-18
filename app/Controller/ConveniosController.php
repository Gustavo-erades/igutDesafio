<?php 
    class ConveniosController extends AppController{
        function index(){
            $this->set('convenios',$this->Convenio->find('all'));

            if($this->request->is('post')){
                if($this->Convenio->save($this->request->data)){
                    $this->Flash->success('Convênio salvo com sucesso!');
                    $this->redirect(array('action'=>'index'));
                }
            }
        }
        function delete($id){
            if(!$this->request->is('post')){
                throw new BadNotAllowedException();
            }
            if($this->Convenio->delete($id)){
                $this->Flash->success('Convenio deletado com sucesso!');
                $this->redirect(array('action'=>'index'));
            }
        }
    }
?>