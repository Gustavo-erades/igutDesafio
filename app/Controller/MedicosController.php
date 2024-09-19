<?php 
    class MedicosController extends AppController{
        public $helpers=array('Html','Form','js'=>array('Jquery'));
     
        function index() {

            $this->paginate=array(
                'limit'=>5,
                'order'=>array('Medicos.nome','ASC')
            );
            $medicos=$this->paginate($this->Medicos);
            $this->set('medicos',$this->paginate($this->Medicos));
        }
        public function view($id = null) {
            $this->set('medicos', $this->Medico->findById($id));
        }
        public function new(){
            if ($this->request->is('post')) {
                if ($this->Medico->save($this->request->data)) {
                    $this->Flash->success('Medico cadastrado com sucesso!');
                    $this->redirect(array('action' => 'index'));
                }
            }
        }
        public $components=array('RequestHandler');
    }